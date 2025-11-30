<?php
// НАСТРОЙКИ ТВОЕГО БОТА
$botToken = '8244489661:AAFHeH4On__PYCkly79XcIMEz_3GR9RTiAw';
$chatId   = '838993019'; // твой chat_id

header('Content-Type: application/json; charset=utf-8');

// Разрешаем только POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Метод не разрешён']);
    exit;
}

$email   = isset($_POST['email'])   ? trim($_POST['email'])   : '';
$phone   = isset($_POST['phone'])   ? trim($_POST['phone'])   : '';
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
$price   = isset($_POST['price'])   ? trim($_POST['price'])   : '';

if ($email === '') {
    echo json_encode(['ok' => false, 'error' => 'Не указан email']);
    exit;
}

// Собираем текст сообщения
$text  = "🧾 *Новая заявка с сайта 3D LAB STUDIO*\n\n";
$text .= "📧 Email: " . $email . "\n";
if ($phone !== '') {
    $text .= "📱 Телефон: " . $phone . "\n";
}
if ($price !== '') {
    $text .= "💰 Цена с калькулятора: " . $price . "\n";
}
if ($comment !== '') {
    $text .= "\n📝 Комментарий:\n" . $comment . "\n";
}

// Проверяем, есть ли файл
$hasFile = !empty($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name']);

if ($hasFile) {
    // Если есть файл — шлём как документ
    $url = "https://api.telegram.org/bot{$botToken}/sendDocument";

    $postFields = [
        'chat_id'    => $chatId,
        'caption'    => $text,
        'parse_mode' => 'Markdown',
        'document'   => new CURLFile(
            $_FILES['file']['tmp_name'],
            mime_content_type($_FILES['file']['tmp_name']),
            $_FILES['file']['name']
        ),
    ];
} else {
    // Без файла — обычное сообщение
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $postFields = [
        'chat_id'    => $chatId,
        'text'       => $text,
        'parse_mode' => 'Markdown',
    ];
}

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => $url,
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => $postFields,
    CURLOPT_TIMEOUT        => 15,
]);

$response  = curl_exec($ch);
$curlError = curl_error($ch);
curl_close($ch);

if ($response === false) {
    echo json_encode(['ok' => false, 'error' => 'CURL error: ' . $curlError]);
    exit;
}

$data = json_decode($response, true);

if (isset($data['ok']) && $data['ok'] === true) {
    echo json_encode(['ok' => true]);
} else {
    echo json_encode([
        'ok'    => false,
        'error' => isset($data['description']) ? $data['description'] : 'Unknown Telegram API error',
    ]);
}
