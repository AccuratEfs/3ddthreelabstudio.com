<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="#0f172a">
  <title>3D LAB STUDIO | 3D Печать и прототипы</title>

  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    :root {
      --accent: #06b6d4;
      --accent-soft: #3b82f6;
      --success: #10b981;
      --warning: #f59e0b;
      --radius: 24px;
      --shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
      --shadow-hover: 0 35px 60px -12px rgba(6,182,212,0.4);
      --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    :root[data-theme="dark"] {
      --bg-primary: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
      --bg-secondary: rgba(15,23,42,0.95);
      --bg-card: rgba(30,41,59,0.98);
      --text-primary: #f8fafc;
      --text-secondary: #cbd5e1;
      --border: rgba(71,85,105,0.4);
      --header-bg: rgba(15,23,42,0.95);
      --gallery-overlay: linear-gradient(180deg, rgba(15,23,42,0) 0%, rgba(15,23,42,0.9) 100%);
      --modal-bg: rgba(15,23,42,0.98);
    }

    :root[data-theme="light"] {
      --bg-primary: linear-gradient(135deg, #fdf7ef 0%, #f4e7d6 50%, #e7d7c4 100%);
      --bg-secondary: rgba(255, 252, 246, 0.96);
      --bg-card: rgba(255, 252, 246, 0.98);
      --text-primary: #1f2933;
      --text-secondary: #4b5563;
      --border: rgba(209, 178, 140, 0.6);
      --header-bg: rgba(255, 252, 246, 0.96);
      --gallery-overlay: linear-gradient(180deg, rgba(255,252,246,0.02) 0%, rgba(255,252,246,0.9) 100%);
      --modal-bg: rgba(255, 252, 246, 0.98);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    html {
      scroll-padding-top: 90px;
    }

    body {
      font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      background: var(--bg-primary);
      color: var(--text-primary);
      overflow-x: hidden;
      line-height: 1.7;
      font-weight: 400;
      font-size: 1.05rem;
      letter-spacing: -0.01em;
      text-rendering: optimizeLegibility;
      transition: background 0.6s ease, color 0.6s ease;
      padding-bottom: env(safe-area-inset-bottom, 20px);
      position: relative;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1, h2, h3 {
      font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
      font-weight: 700;
      line-height: 1.15;
      letter-spacing: -0.02em;
    }

    .bg-layer {
      position: fixed;
      inset: 0;
      z-index: -2;
      overflow: hidden;
      pointer-events: none;
    }

    .bg-blobs {
      position: absolute;
      inset: -40%;
      filter: blur(90px);
      opacity: 0.65;
    }
    .bg-blob {
      position: absolute;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      animation: blobFloat 20s infinite ease-in-out;
    }
    .bg-blob.b1 { 
      background: radial-gradient(circle, var(--accent) 0%, transparent 70%); 
      top: 10%; left: -20%; 
      animation-duration: 25s; animation-delay: 0s;
    }
    .bg-blob.b2 { 
      background: radial-gradient(circle, var(--accent-soft) 0%, transparent 70%); 
      bottom: 10%; right: -30%; 
      animation-duration: 30s; animation-delay: -8s;
    }
    .bg-blob.b3 { 
      background: radial-gradient(circle, var(--success) 0%, transparent 70%); 
      top: 60%; left: 70%; 
      animation-duration: 22s; animation-delay: -15s;
    }
    .bg-blob.b4 {
      background: radial-gradient(circle, #ec4899 0%, transparent 70%);
      top: 20%; right: 20%;
      animation-duration: 28s; animation-delay: -5s;
    }
    @keyframes blobFloat {
      0%, 100% { transform: translateY(0) scale(1) rotate(0deg); opacity: 0.65; }
      33% { transform: translateY(-40px) scale(1.15) rotate(120deg); opacity: 0.8; }
      66% { transform: translateY(20px) scale(0.95) rotate(240deg); opacity: 0.5; }
    }

    .bg-grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(71,85,105,0.25) 1px, transparent 1px),
        linear-gradient(90deg, rgba(71,85,105,0.25) 1px, transparent 1px);
      background-size: 100px 100px;
      opacity: 0.4;
      animation: gridShift 40s linear infinite;
    }
    @keyframes gridShift {
      0% { transform: translate(0,0) scale(1); }
      25% { transform: translate(50px, 25px) scale(1.02); }
      50% { transform: translate(100px, 50px) scale(1.05); }
      75% { transform: translate(50px, 75px) scale(1.03); }
      100% { transform: translate(0,100px) scale(1); }
    }

    .bg-particles {
      position: absolute;
      inset: 0;
      background-image: 
        radial-gradient(2px 2px at 20px 30px, var(--accent), transparent),
        radial-gradient(2px 2px at 40px 70px, rgba(236,72,153,0.8), transparent),
        radial-gradient(1px 1px at 90px 40px, var(--success), transparent),
        radial-gradient(1px 1px at 130px 80px, var(--accent-soft), transparent);
      background-repeat: repeat;
      background-size: 200px 100px;
      animation: particlesFloat 15s linear infinite;
      opacity: 0.6;
    }
    @keyframes particlesFloat {
      0% { background-position: 0 0; }
      100% { background-position: 100px 50px; }
    }

    .theme-toggle {
      background: rgba(71,85,105,0.3);
      border: 1px solid var(--border);
      border-radius: 50px;
      padding: 8px 14px;
      color: var(--text-secondary);
      cursor: pointer;
      font-size: 0.9rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
      backdrop-filter: blur(20px);
      transition: var(--transition);
    }
    .theme-toggle:hover { 
      background: var(--accent-soft); 
      border-color: var(--accent-soft);
      color: white;
      transform: translateY(-2px);
    }

    .header {
      position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
      background: var(--header-bg); backdrop-filter: blur(25px);
      padding: 12px 0; border-bottom: 1px solid var(--border);
      transition: var(--transition);
    }
    .header.scrolled { box-shadow: var(--shadow); }
    .nav-container {
      max-width: 1200px; margin: 0 auto; padding: 0 24px;
      display: flex; justify-content: space-between; align-items: center;
    }

    .logo {
      width: 72px; height: 72px;
      position: relative;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none;
      transition: var(--transition);
    }
    .logo:hover { transform: translateY(-4px) rotate(5deg); }

    .logo-frame {
      width: 100%; height: 100%;
      background: linear-gradient(145deg, #1e293b 0%, #334155 100%);
      border-radius: 20px;
      position: relative;
      box-shadow: 
        0 20px 40px rgba(0,0,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.1);
      border: 2px solid transparent;
      background-clip: padding-box;
    }

    :root[data-theme="light"] .logo-frame {
      background: linear-gradient(145deg, #ffffff 0%, #f1f5f9 100%);
      box-shadow: 
        0 20px 40px rgba(0,0,0,0.1),
        inset 0 1px 0 rgba(0,0,0,0.02);
    }

    .logo-neon {
      position: absolute;
      inset: -2px;
      background: linear-gradient(45deg, var(--accent), var(--accent-soft));
      border-radius: 22px;
      padding: 2px;
      opacity: 0;
      transition: var(--transition);
      filter: blur(1px);
    }
    .logo:hover .logo-neon { opacity: 1; }

    .logo-cube {
      position: absolute;
      width: 44px; height: 44px;
      background: linear-gradient(135deg, var(--accent) 0%, var(--accent-soft) 50%, #0ea5e9 100%);
      border-radius: 12px;
      transform: perspective(500px) rotateX(20deg) rotateY(20deg);
      box-shadow: 
        0 12px 30px rgba(6,182,212,0.4),
        0 0 0 1px rgba(255,255,255,0.2),
        inset 0 2px 10px rgba(255,255,255,0.3);
      transition: var(--transition);
    }
    .logo:hover .logo-cube {
      transform: perspective(500px) rotateX(0deg) rotateY(0deg) rotateZ(360deg);
      box-shadow: 
        0 20px 40px rgba(6,182,212,0.6),
        0 0 20px rgba(6,182,212,0.5);
    }

    .logo-printer {
      position: absolute;
      top: 12px; left: 12px;
      width: 24px; height: 24px;
    }
    .printer-body {
      fill: rgba(255,255,255,0.9);
      stroke: rgba(0,0,0,0.1);
      stroke-width: 0.5;
    }
    .printer-nozzle {
      fill: var(--accent);
      animation: nozzlePulse 2s ease-in-out infinite;
    }
    @keyframes nozzlePulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }

    .logo-plate {
      position: absolute;
      bottom: 8px; right: 8px;
      width: 28px; height: 20px;
      background: linear-gradient(135deg, #64748b 0%, #475569 100%);
      border-radius: 4px;
      transform: perspective(300px) rotateX(15deg);
      box-shadow: 0 4px 12px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.2);
    }

    :root[data-theme="light"] .logo-plate {
      background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
    }

    .nav-menu { 
      display: flex; 
      gap: 28px; 
      align-items: center; 
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .nav-link {
      color: var(--text-secondary); 
      text-decoration: none;
      font-weight: 500; 
      font-size: 1rem;
      font-family: 'Plus Jakarta Sans', sans-serif;
      transition: var(--transition); 
      position: relative;
      padding: 8px 0;
    }
    .nav-link:hover { color: var(--accent); }
    .nav-link::after {
      content: ''; 
      position: absolute; 
      bottom: 0; 
      left: 50%;
      width: 0; 
      height: 2px; 
      background: var(--accent);
      transition: var(--transition); 
      transform: translateX(-50%);
    }
    .nav-link:hover::after { width: 100%; }

    .text-outline {
      position: relative;
      color: transparent;
      -webkit-text-stroke: 2px var(--accent);
      paint-order: stroke;
      text-shadow: 0 0 10px rgba(6,182,212,0.5);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 700;
    }

    .hero {
      min-height: 100vh; 
      display: flex; 
      align-items: center;
      position: relative; 
      overflow: hidden; 
      padding-top: 100px;
    }
    .container { 
      max-width: 1200px; 
      margin: 0 auto; 
      padding: 0 24px; 
    }
    .hero-content { 
      max-width: 680px; 
      position: relative; 
      z-index: 1; 
    }

    .hero-label {
      display: inline-flex; 
      align-items: center; 
      gap: 10px;
      padding: 6px 16px; 
      border-radius: 50px; 
      font-size: 0.85rem;
      font-weight: 500;
      text-transform: uppercase; 
      letter-spacing: 0.1em;
      background: rgba(16,185,129,0.2); 
      border: 1px solid var(--success);
      color: var(--success); 
      margin-bottom: 16px; 
      backdrop-filter: blur(12px);
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .hero h1 {
      font-size: clamp(3.5rem, 8vw, 5.5rem);
      margin-bottom: 20px;
      line-height: 1.1;
      position: relative;
    }
    
    .hero-subtitle {
      display: inline-block; 
      padding: 12px 20px;
      border-radius: 50px; 
      background: rgba(59,130,246,0.15);
      color: var(--accent-soft); 
      font-weight: 600; 
      font-size: 1.1rem;
      text-transform: uppercase; 
      letter-spacing: 0.05em; 
      margin-bottom: 28px;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .hero p {
      font-size: 1.25rem; 
      margin-bottom: 44px;
      color: var(--text-secondary); 
      max-width: 520px;
      font-weight: 400;
    }

    .cta-buttons { 
      display: flex; 
      gap: 16px; 
      flex-wrap: wrap; 
    }

    .btn-primary, .btn-secondary {
      padding: 16px 32px; 
      border-radius: 50px;
      font-size: 1rem; 
      font-weight: 600;
      border: none; 
      cursor: pointer; 
      transition: var(--transition);
      display: inline-flex; 
      align-items: center; 
      gap: 12px;
      text-decoration: none;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-soft));
      color: white; 
      box-shadow: var(--shadow);
    }
    .btn-primary:hover { 
      transform: translateY(-4px); 
      box-shadow: var(--shadow-hover);
    }
    .btn-secondary {
      background: transparent;
      border: 2px solid var(--accent);
      color: var(--accent);
    }
    .btn-secondary:hover { 
      background: var(--accent); 
      color: white;
      transform: translateY(-2px);
    }

    .gallery { padding: 80px 0; }
    .gallery h2 {
      text-align: center; 
      font-size: clamp(2.8rem, 6vw, 4rem); 
      margin-bottom: 16px;
      position: relative;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .gallery-sub {
      text-align: center; 
      color: var(--text-secondary); 
      margin-bottom: 48px; 
      font-size: 1.2rem;
      font-weight: 400;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .gallery-grid {
      max-width: 1200px; 
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 28px; 
      padding: 0 24px;
    }
    .gallery-item {
      position: relative; 
      border-radius: var(--radius);
      overflow: hidden; 
      cursor: pointer; 
      transition: var(--transition);
      box-shadow: var(--shadow); 
      border: 1px solid var(--border);
    }
    .gallery-item img {
      width: 100%; 
      height: 300px; 
      object-fit: cover; 
      display: block;
      transition: transform 0.6s ease;
    }
    .gallery-item:hover img { transform: scale(1.1); }
    .gallery-item:hover { 
      transform: translateY(-8px); 
      box-shadow: var(--shadow-hover);
    }

    .gallery-overlay {
      position: absolute; 
      inset: 0;
      background: var(--gallery-overlay);
      opacity: 0; 
      transition: var(--transition);
      display: flex; 
      align-items: center; 
      justify-content: center;
    }
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    .gallery-overlay i {
      font-size: 2.5rem; 
      color: white;
    }

    .calculator { padding: 80px 24px; }
    .calc-inner {
      max-width: 1000px; 
      margin: 0 auto;
      background: var(--bg-card); 
      border-radius: var(--radius);
      padding: 48px; 
      border: 1px solid var(--border);
      backdrop-filter: blur(25px); 
      box-shadow: var(--shadow);
    }
    .calculator h2 {
      text-align: center; 
      font-size: clamp(2.5rem, 5vw, 3.5rem); 
      margin-bottom: 16px;
      position: relative;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .calculator p {
      text-align: center; 
      color: var(--text-secondary); 
      margin-bottom: 36px;
      font-size: 1.2rem;
      font-weight: 400;
    }
    .calc-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 28px;
    }
    .calc-group { 
      display: flex; 
      flex-direction: column; 
      gap: 12px; 
    }
    .calc-group label { 
      font-weight: 600; 
      color: var(--text-primary); 
      font-size: 1.05rem;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    select, input[type="range"], input, textarea {
      width: 100%; 
      padding: 16px; 
      border-radius: 16px;
      border: 1px solid var(--border); 
      background: var(--bg-secondary);
      color: var(--text-primary); 
      font-size: 1rem;
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 400;
      outline: none; 
      transition: var(--transition);
      line-height: 1.5;
    }
    select:focus, input:focus, textarea:focus {
      border-color: var(--accent); 
      box-shadow: 0 0 0 3px rgba(6,182,212,0.1);
    }
    input[type="range"] { height: 10px; cursor: pointer; }
    .price-display {
      font-size: 3.5rem; 
      font-weight: 700; 
      text-align: center;
      background: linear-gradient(45deg, var(--success), #059669);
      -webkit-background-clip: text; 
      -webkit-text-fill-color: transparent;
      margin-top: 8px;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    #weightValue {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .modal {
      display: none; 
      position: fixed; 
      inset: 0;
      background: var(--modal-bg); 
      z-index: 2000;
      backdrop-filter: blur(15px);
    }
    .modal-content {
      position: absolute; 
      top: 50%; 
      left: 50%;
      transform: translate(-50%, -50%);
      max-width: 95%; 
      max-height: 95%;
      text-align: center;
    }
    .modal img {
      width: 100%; 
      max-height: 60vh; 
      object-fit: contain;
      border-radius: var(--radius); 
      box-shadow: var(--shadow-hover);
    }
    .modal-desc {
      margin-top: 24px; 
      background: var(--bg-card);
      color: var(--text-primary); 
      padding: 24px; 
      border-radius: var(--radius);
      max-width: 700px; 
      margin-left: auto; 
      margin-right: auto;
      font-size: 1.1rem; 
      border: 1px solid var(--border);
      font-family: 'Plus Jakarta Sans', sans-serif;
      line-height: 1.7;
    }
    .close {
      position: absolute; 
      top: 20px; 
      right: 24px;
      font-size: 2.5rem; 
      color: var(--text-secondary); 
      cursor: pointer;
      width: 50px; 
      height: 50px; 
      border-radius: 50%;
      background: rgba(71,85,105,0.5); 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      transition: var(--transition);
      font-weight: 300;
    }
    .close:hover { 
      background: #ef4444; 
      color: white; 
    }

    label {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .nav-menu { gap: 20px; font-size: 0.95rem; }
      .hero { padding-top: 90px; }
      .hero h1 { font-size: 2.8rem; }
      .logo { width: 64px; height: 64px; }
      .gallery-grid { grid-template-columns: 1fr; }
      .calc-grid { grid-template-columns: 1fr; }
      body { font-size: 1rem; line-height: 1.65; }
      .text-outline { -webkit-text-stroke: 1.5px var(--accent) !important; }
    }
  </style>
</head>
<body data-theme="dark">

  <div class="bg-layer">
    <div class="bg-blobs">
      <div class="bg-blob b1"></div>
      <div class="bg-blob b2"></div>
      <div class="bg-blob b3"></div>
      <div class="bg-blob b4"></div>
    </div>
    <div class="bg-grid"></div>
    <div class="bg-particles"></div>
  </div>

  <div id="imageModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-content">
      <span class="close" id="closeModal" aria-label="Закрыть просмотр работы">&times;</span>
      <img id="modalImage" src="" alt="Просмотр работы">
      <div id="modalDesc" class="modal-desc">
        <h2 id="modalTitle" style="margin-top:0;margin-bottom:12px;font-size:1.4rem;">
          Просмотр работы
        </h2>
        <p id="modalText"></p>
      </div>
    </div>
  </div>

  <header class="header" id="header">
    <div class="nav-container">
      <a href="#" class="logo">
        <div class="logo-neon"></div>
        <div class="logo-frame">
          <svg class="logo-printer" viewBox="0 0 24 24">
            <path class="printer-body" d="M19 8H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM7 14H5v-2h2v2zm11 0h-2v-2h2v2z"/>
            ircle class="printer-nozzle" cx="12" cy="13" r="1.5"/>
          </svg>
          <div class="logo-cube"></div>
          <div class="logo-plate"></div>
        </div>
      </a>
      <nav class="nav-menu">
        <a href="#gallery" class="nav-link">Портфолио</a>
        <a href="#calculator" class="nav-link">Калькулятор</a>
        <a href="#order" class="nav-link">Заказать</a>
        <button id="themeToggle" class="theme-toggle" aria-label="Переключить тему">
          <i class="fas fa-moon"></i>
          <span>Тема</span>
        </button>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-label">
          <span style="width:8px;height:8px;border-radius:50%;background:var(--success);box-shadow:0 0 12px var(--success);"></span>
          On-demand 3D printing
        </div>
        <h1>
          <span class="text-outline">3D LAB</span><br>
          <span class="text-outline" style="font-size: 0.82em; letter-spacing: -0.015em;">STUDIO</span>
        </h1>
        <div class="hero-subtitle">Прототипы • Детали • Миниатюры</div>
        <p>Печатаем высококачественные функциональные детали и визуальные модели за 24 часа. Полный цикл от 3D-модели до готового изделия.</p>
        <div class="cta-buttons">
          <a href="#calculator" class="btn-primary">
            <i class="fas fa-calculator"></i> Рассчитать стоимость
          </a>
          <a href="#order" class="btn-secondary">
            <i class="fas fa-file-upload"></i> Загрузить модель
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery" id="gallery">
    <div class="container">
      <h2>
        <span class="text-outline">Последние</span><br>
        <span class="text-outline" style="font-size: 0.75em;">работы</span>
      </h2>
      <p class="gallery-sub">Проекты напечатанные на профессиональных 3D-принтерах FDM и SLA. Высокая детализация и точность.</p>
      <div class="gallery-grid" id="galleryGrid">
        <div class="gallery-item" data-img="https://i.pinimg.com/736x/16/9d/18/169d18c6d76b202b846cbe6daef08131.jpg" data-desc="Пластиковая шестерёнка с высокой детализацией">
          <img src="https://i.pinimg.com/736x/16/9d/18/169d18c6d76b202b846cbe6daef08131.jpg" alt="Шестерёнка">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item" data-img="https://cdn.thingiverse.com/assets/a6/46/a5/b9/d0/large_display_Pavo35_o4.png" data-desc="Рама FPV-дрона Pavo35">
          <img src="https://cdn.thingiverse.com/assets/a6/46/a5/b9/d0/large_display_Pavo35_o4.png" alt="Рама FPV-дрона">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item" data-img="https://fbi.cults3d.com/uploaders/27253403/illustration-file/1dc9400d-fcad-452e-ad27-86b50dd04110/FPV-Drone-3-v10.png" data-desc="Корпус FPV-дрона с антивибрационными вставками">
          <img src="https://fbi.cults3d.com/uploaders/27253403/illustration-file/1dc9400d-fcad-452e-ad27-86b50dd04110/FPV-Drone-3-v10.png" alt="FPV-дрон">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item" data-img="https://cdn.thingiverse.com/assets/66/7d/2b/e4/ed/large_display__TRAXXAS_REVO_3.3_145_38%D0%A2_%D0%9C1_v4.png" data-desc="Деталь Traxxas Revo 3.3 — усиленный кронштейн">
          <img src="https://cdn.thingiverse.com/assets/66/7d/2b/e4/ed/large_display__TRAXXAS_REVO_3.3_145_38%D0%A2_%D0%9C1_v4.png" alt="Traxxas Revo деталь">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item" data-img="https://3d-rus.com/wp-content/uploads/2019/01/ring-lion-3d-model-stl-3dm.jpg7_.jpg" data-desc="Ювелирное кольцо с 3D-гравировкой льва">
          <img src="https://3d-rus.com/wp-content/uploads/2019/01/ring-lion-3d-model-stl-3dm.jpg7_.jpg" alt="Ювелирное кольцо">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
      </div>
    </div>
  </section>

  <section class="calculator" id="calculator">
    <div class="calc-inner">
      <h2>
        <span class="text-outline">Калькулятор</span><br>
        <span class="text-outline" style="font-size: 0.8em;">стоимости</span>
      </h2>
      <p>Точный расчёт по материалу, весу модели и срокам изготовления. Минимальная сумма заказа 500₽.</p>
      <div class="calc-grid">
        <div class="calc-group">
          <label for="material">Материал</label>
          <select id="material">
            <option value="12">PLA — 12₽/г</option>
            <option value="18">ABS — 18₽/г</option>
            <option value="22">PETG — 22₽/г</option>
            <option value="120">Смола — 120₽/г</option>
          </select>
        </div>
        <div class="calc-group">
          <label for="weight">Вес модели (г)</label>
          <input type="range" id="weight" min="5" max="1000" value="100">
          <span id="weightValue">100г</span>
        </div>
        <div class="calc-group">
          <label for="urgency">Срочность</label>
          <select id="urgency">
            <option value="1.0">Стандарт (3 дня) — ×1.0</option>
            <option value="1.4">Ускоренно (24ч) — ×1.4</option>
            <option value="2.0">Срочно (6ч) — ×2.0</option>
          </select>
        </div>
        <div class="calc-group">
          <label>Итого стоимость</label>
          <div class="price-display" id="price">от 1 200₽</div>
        </div>
      </div>
    </div>
  </section>

  <section id="order" style="padding:90px 24px;">
    <div class="container" style="max-width:1000px;margin:0 auto;">
      <h2 style="font-size:clamp(2.8rem,6vw,4rem);margin-bottom:20px;text-align:center;position:relative;font-family:'Plus Jakarta Sans',sans-serif;">
        <span class="text-outline">Заказать</span><br>
        <span class="text-outline" style="font-size: 0.75em;">печать</span>
      </h2>
      <p style="color:var(--text-secondary);margin-bottom:36px;text-align:center;font-size:1.2rem;font-weight:400;font-family:'Plus Jakarta Sans',sans-serif;">
        Загрузите STL/OBJ/3MF файл. Получите точный расчёт стоимости в течение часа.
      </p>
      <form id="orderForm" style="background:var(--bg-card);padding:48px;border-radius:var(--radius);border:1px solid var(--border);backdrop-filter:blur(20px);box-shadow:var(--shadow);">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:28px;margin-bottom:28px;">
          <div>
            <label style="display:block;margin-bottom:12px;font-weight:600;font-family:'Plus Jakarta Sans',sans-serif;">Email *</label>
            <input type="email" id="email" placeholder="your@email.com" required
                   style="width:100%;padding:18px;border-radius:16px;border:1px solid var(--border);background:var(--bg-secondary);color:var(--text-primary);font-size:1.05rem;font-family:'Plus Jakarta Sans',sans-serif;outline:none;transition:var(--transition);">
          </div>
          <div>
            <label style="display:block;margin-bottom:12px;font-weight:600;font-family:'Plus Jakarta Sans',sans-serif;">Телефон (опционально)</label>
            <input type="tel" id="phone" placeholder="+7 (___) ___-__-__"
                   style="width:100%;padding:18px;border-radius:16px;border:1px solid var(--border);background:var(--bg-secondary);color:var(--text-primary);font-size:1.05rem;font-family:'Plus Jakarta Sans',sans-serif;outline:none;transition:var(--transition);">
          </div>
        </div>
        <div style="margin-bottom:28px;">
          <label style="display:block;margin-bottom:12px;font-weight:600;font-family:'Plus Jakarta Sans',sans-serif;">Комментарий к заказу</label>
          <textarea id="comment" rows="4" placeholder="Желаемый материал, цвет, количество копий, назначение детали, особые требования..."
                    style="width:100%;padding:18px;border-radius:16px;border:1px solid var(--border);background:var(--bg-secondary);color:var(--text-primary);font-size:1.05rem;font-family:'Plus Jakarta Sans',sans-serif;resize:vertical;outline:none;transition:var(--transition);line-height:1.6;"></textarea>
        </div>
        <div style="margin-bottom:28px;">
          <label style="display:block;margin-bottom:16px;font-weight:600;font-size:1.15rem;font-family:'Plus Jakarta Sans',sans-serif;">Файл 3D-модели (.stl, .obj, .3mf)</label>
          <label id="fileWrapper" style="display:flex;flex-direction:column;align-items:center;cursor:pointer;border:2px dashed var(--border);border-radius:20px;padding:40px;text-align:center;background:var(--bg-secondary);transition:var(--transition);gap:16px;font-family:'Plus Jakarta Sans',sans-serif;">
            <i class="fas fa-cloud-upload-alt" style="font-size:3.5rem;color:var(--text-secondary);"></i>
            <span id="fileLabel" style="font-weight:500;font-size:1.1rem;">📎 Нажмите или перетащите 3D-файл</span>
            <input type="file" id="fileInput" accept=".stl,.obj,.3mf" style="display:none;">
          </label>
        </div>
        <button type="submit" class="btn-primary" style="width:100%;padding:22px;font-size:1.15rem;justify-content:center;font-family:'Plus Jakarta Sans',sans-serif;font-weight:600;">
          <i class="fas fa-rocket"></i> Отправить заявку на расчёт стоимости
        </button>
      </form>
    </div>
  </section>

  <script>
    // Theme toggle
    (function() {
      const root = document.documentElement;
      const btn = document.getElementById('themeToggle');
      if (!btn) return;
      let current = localStorage.getItem('theme') || 'dark';
      function apply(theme) {
        root.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        btn.querySelector('i').className = theme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
      }
      apply(current);
      btn.addEventListener('click', () => {
        current = current === 'dark' ? 'light' : 'dark';
        apply(current);
      });
    })();

    // Header scroll effect
    window.addEventListener('scroll', () => {
      document.getElementById('header').classList.toggle('scrolled', window.scrollY > 50);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const href = a.getAttribute('href');
        if (href === '#') return;
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Calculator functionality
    (function() {
      const material = document.getElementById('material');
      const weight = document.getElementById('weight');
      const urgency = document.getElementById('urgency');
      const priceEl = document.getElementById('price');
      const weightVal = document.getElementById('weightValue');
      
      function updatePrice() {
        const pricePerGram = parseFloat(material.value);
        const grams = parseInt(weight.value);
        const multiplier = parseFloat(urgency.value);
        const total = Math.max(500, Math.round(pricePerGram * grams * multiplier / 10) * 10);
        priceEl.textContent = `от ${total.toLocaleString('ru-RU')}₽`;
        weightVal.textContent = `${grams}г`;
      }
      
      material.addEventListener('change', updatePrice);
      weight.addEventListener('input', updatePrice);
      urgency.addEventListener('change', updatePrice);
      updatePrice();
    })();

    // Gallery modal with descriptions + доступность
    (function() {
      const modal = document.getElementById('imageModal');
      const modalImg = document.getElementById('modalImage');
      const modalText = document.getElementById('modalText');
      const closeBtn = document.getElementById('closeModal');
      const galleryItems = document.querySelectorAll('.gallery-item');
      let lastFocusedElement = null;

      function openModal(src, desc) {
        lastFocusedElement = document.activeElement;
        modalImg.src = src;
        modalText.textContent = desc || 'Кликабельное изображение работы';
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        closeBtn.focus();
      }

      function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = '';
        modalImg.src = '';
        if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
          lastFocusedElement.focus();
        }
      }

      galleryItems.forEach(item => {
        item.addEventListener('click', () => {
          openModal(item.dataset.img, item.dataset.desc);
        });
      });

      closeBtn.addEventListener('click', closeModal);
      modal.addEventListener('click', e => {
        if (e.target === modal) closeModal();
      });

      document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && modal.style.display === 'block') {
          closeModal();
        }
      });
    })();

    // Enhanced file upload with drag & drop (1 файл)
    (function() {
      const fileInput = document.getElementById('fileInput');
      const fileLabel = document.getElementById('fileLabel');
      const fileWrapper = document.getElementById('fileWrapper');
      const validExtensions = ['stl', 'obj', '3mf'];

      function resetState() {
        fileLabel.textContent = '📎 Нажмите или перетащите 3D-файл';
        fileWrapper.style.borderColor = 'var(--border)';
      }

      function setValidFile(file) {
        fileLabel.textContent = `✅ ${file.name}`;
        fileWrapper.style.borderColor = 'var(--success)';
      }

      function setInvalidFile() {
        fileLabel.textContent = '❌ Поддерживаются только STL, OBJ, 3MF файлы';
        fileWrapper.style.borderColor = '#ef4444';
      }

      function isValid3DFile(fileName) {
        const ext = fileName.split('.').pop().toLowerCase();
        return validExtensions.includes(ext);
      }

      if (fileInput && fileLabel && fileWrapper) {
        fileInput.addEventListener('change', () => {
          const file = fileInput.files[0];
          if (file) {
            if (isValid3DFile(file.name)) {
              setValidFile(file);
            } else {
              setInvalidFile();
            }
          } else {
            resetState();
          }
        });

        fileWrapper.addEventListener('click', () => {
          fileInput.focus();
          fileInput.click();
        });

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
          fileWrapper.addEventListener(event, e => {
            e.preventDefault();
            e.stopPropagation();
          });
        });

        fileWrapper.addEventListener('dragenter', () => {
          fileWrapper.style.borderColor = 'var(--accent)';
          fileWrapper.style.background = 'rgba(6,182,212,0.05)';
        });

        fileWrapper.addEventListener('dragleave', () => {
          fileWrapper.style.borderColor = 'var(--border)';
          fileWrapper.style.background = 'var(--bg-secondary)';
        });

        fileWrapper.addEventListener('drop', e => {
          const files = Array.from(e.dataTransfer.files);
          const validFile = files.find(file => isValid3DFile(file.name));

          if (validFile) {
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(validFile);
            fileInput.files = dataTransfer.files;
            setValidFile(validFile);
          } else {
            setInvalidFile();
          }

          fileWrapper.style.background = 'var(--bg-secondary)';
        });
      }
    })();

    // Form submission with validation + отправка в Telegram
    document.getElementById('orderForm').addEventListener('submit', async e => {
      e.preventDefault();
      
      const form = e.target;
      const emailInput = document.getElementById('email');
      const phoneInput = document.getElementById('phone');
      const commentInput = document.getElementById('comment');
      const fileInput = document.getElementById('fileInput');
      const fileLabel = document.getElementById('fileLabel');
      const fileWrapper = document.getElementById('fileWrapper');
      const priceEl = document.getElementById('price');

      const email = emailInput ? emailInput.value.trim() : '';
      const hasFile = fileInput && fileInput.files && fileInput.files[0];

      if (!email || !hasFile) {
        alert('⚠️ Заполните email и выберите 3D-файл');
        return;
      }

      const priceText = priceEl ? priceEl.textContent.trim() : '';

      const formData = new FormData();
      formData.append('email', email);
      formData.append('phone', phoneInput ? phoneInput.value.trim() : '');
      formData.append('comment', commentInput ? commentInput.value.trim() : '');
      formData.append('price', priceText);

      try {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.textContent = 'Отправляем...';
        }

        const response = await fetch('send_telegram.php', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.ok) {
          alert('🚀 Заявка отправлена! Ожидайте ответ в ближайшее время.');
          form.reset();
          if (fileLabel && fileWrapper) {
            fileLabel.textContent = '📎 Нажмите или перетащите 3D-файл';
            fileWrapper.style.borderColor = 'var(--border)';
          }
        } else {
          console.error(data);
          alert('❌ Ошибка при отправке заявки. Попробуйте позже.');
        }
      } catch (err) {
        console.error(err);
        alert('❌ Ошибка соединения с сервером. Проверьте интернет или попробуйте позже.');
      } finally {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i class="fas fa-rocket"></i> Отправить заявку на расчёт стоимости';
        }
      }
    });
  </script>
<!-- Тестовая кнопка для отправки заявки в Telegram -->
<div style="position:fixed;bottom:20px;right:20px;z-index:999;">
  <button id="testSubmitBtn" style="
    padding:12px 20px;
    background:linear-gradient(135deg, var(--accent), var(--accent-soft));
    color:white;
    border:none;
    border-radius:50px;
    font-weight:600;
    cursor:pointer;
    box-shadow:var(--shadow);
    font-family:'Plus Jakarta Sans',sans-serif;
    transition:var(--transition);
    font-size:0.9rem;
  " onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-hover)'" 
    onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='var(--shadow)'">
    🧪 Тест заявки
  </button>
</div>

<script>
  // Тестовая отправка заявки в Telegram
  document.getElementById('testSubmitBtn').addEventListener('click', async () => {
    const testData = new FormData();
    testData.append('email', 'test@example.com');
    testData.append('phone', '+7 (999) 123-45-67');
    testData.append('comment', 'Это тестовая заявка для проверки работы отправки');
    testData.append('price', 'от 1 200₽');

    try {
      const response = await fetch('send_telegram.php', {
        method: 'POST',
        body: testData
      });

      const data = await response.json();

      if (data.ok) {
        alert('✅ Тестовая заявка успешно отправлена в Telegram!');
      } else {
        alert('❌ Ошибка: ' + (data.error || 'Неизвестная ошибка'));
      }
    } catch (err) {
      alert('❌ Ошибка соединения: ' + err.message);
    }
  });
</script>
</body>
</html>

