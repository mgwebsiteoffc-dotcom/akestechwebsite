<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Akestech Infotech — Scale Your Ecommerce Backend</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --gold: #C9A84C;
    --gold-light: #E8C97A;
    --gold-pale: #F5E9C8;
    --black: #0A0A0A;
    --deep: #111111;
    --charcoal: #1A1A1A;
    --mid: #2A2A2A;
    --light-text: #C8BFA8;
    --white: #F8F5EF;
    --off-white: #EDE8DC;
  }

  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--black);
    color: var(--white);
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    overflow-x: hidden;
    cursor: none;
  }

  /* Custom Cursor */
  .cursor {
    position: fixed;
    width: 10px; height: 10px;
    background: var(--gold);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9999;
    transform: translate(-50%,-50%);
    transition: transform 0.1s ease;
  }
  .cursor-ring {
    position: fixed;
    width: 36px; height: 36px;
    border: 1px solid rgba(201,168,76,0.5);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9998;
    transform: translate(-50%,-50%);
    transition: transform 0.15s ease, width 0.2s, height 0.2s;
  }
  body:hover .cursor-ring { opacity: 1; }

  /* Noise Overlay */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 1;
    opacity: 0.4;
  }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 100;
    padding: 28px 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to bottom, rgba(10,10,10,0.95) 0%, transparent 100%);
    backdrop-filter: blur(2px);
  }
  .nav-logo {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.5rem;
    font-weight: 400;
    letter-spacing: 0.15em;
    color: var(--white);
    text-decoration: none;
  }
  .nav-logo span { color: var(--gold); }
  .nav-cta {
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--gold);
    border: 1px solid var(--gold);
    padding: 10px 24px;
    text-decoration: none;
    transition: all 0.3s;
  }
  .nav-cta:hover { background: var(--gold); color: var(--black); }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    padding: 0 60px;
    padding-bottom: 100px;
    overflow: hidden;
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 60% at 80% 50%, rgba(201,168,76,0.06) 0%, transparent 70%),
      radial-gradient(ellipse 40% 80% at 10% 80%, rgba(201,168,76,0.04) 0%, transparent 60%),
      var(--black);
  }

  .hero-line {
    position: absolute;
    right: 60px; top: 0; bottom: 0;
    width: 1px;
    background: linear-gradient(to bottom, transparent, rgba(201,168,76,0.3) 30%, rgba(201,168,76,0.3) 70%, transparent);
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 0.7rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 32px;
    opacity: 0;
    animation: fadeUp 0.8s 0.2s forwards;
  }
  .hero-badge::before {
    content: '';
    display: block;
    width: 40px; height: 1px;
    background: var(--gold);
  }

  .hero-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(3.5rem, 8vw, 7.5rem);
    font-weight: 300;
    line-height: 1.1;
    letter-spacing: -0.01em;
    max-width: 820px;
    opacity: 0;
    animation: fadeUp 0.9s 0.4s forwards;
    color: var(--white);
  }
  .hero-title em {
    font-style: italic;
    color: var(--gold-light);
  }

  .hero-sub {
    font-size: 0.9rem;
    letter-spacing: 0.08em;
    color: var(--light-text);
    max-width: 520px;
    line-height: 1.9;
    margin-top: 32px;
    opacity: 0;
    animation: fadeUp 0.9s 0.6s forwards;
  }

  .hero-actions {
    display: flex;
    align-items: center;
    gap: 32px;
    margin-top: 56px;
    opacity: 0;
    animation: fadeUp 0.9s 0.8s forwards;
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--gold);
    color: var(--black);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    padding: 18px 40px;
    text-decoration: none;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
  }
  .btn-primary::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255,255,255,0.15);
    transform: translateX(-100%);
    transition: transform 0.4s;
  }
  .btn-primary:hover::after { transform: translateX(0); }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 16px 40px rgba(201,168,76,0.3); }

  .btn-secondary {
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--light-text);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
  }
  .btn-secondary:hover { color: var(--white); }
  .btn-secondary span {
    display: inline-block;
    width: 24px; height: 1px;
    background: currentColor;
    transition: width 0.3s;
  }
  .btn-secondary:hover span { width: 40px; }

  .hero-stats {
    position: absolute;
    bottom: 60px; right: 100px;
    display: flex;
    gap: 60px;
    opacity: 0;
    animation: fadeUp 0.9s 1s forwards;
  }
  .stat { text-align: right; }
  .stat-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.8rem;
    font-weight: 300;
    color: var(--white);
    line-height: 1;
  }
  .stat-num span { color: var(--gold); }
  .stat-label {
    font-size: 0.65rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--light-text);
    margin-top: 6px;
  }

  /* MARQUEE */
  .marquee-wrap {
    overflow: hidden;
    border-top: 1px solid rgba(201,168,76,0.15);
    border-bottom: 1px solid rgba(201,168,76,0.15);
    padding: 20px 0;
    background: var(--deep);
  }
  .marquee-track {
    display: flex;
    gap: 0;
    animation: marquee 20s linear infinite;
    white-space: nowrap;
  }
  .marquee-item {
    font-size: 0.7rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--light-text);
    padding: 0 40px;
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .marquee-item::after {
    content: '✦';
    color: var(--gold);
    font-size: 0.5rem;
  }

  /* PROBLEM SECTION */
  .section { 
    padding: 140px 60px; 
    position: relative; 
  }

  .section-label {
    font-size: 0.65rem;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 16px;
  }
  .section-label::before {
    content: '';
    width: 30px; height: 1px;
    background: var(--gold);
  }

  .section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    font-weight: 300;
    line-height: 1.15;
    max-width: 700px;
    color: var(--white);
    margin-bottom: 20px;
  }
  .section-title em { font-style: italic; color: var(--gold-light); }

  /* PAIN CARDS */
  .pain-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2px;
    margin-top: 80px;
    border: 1px solid rgba(201,168,76,0.1);
  }
  .pain-card {
    background: var(--deep);
    padding: 56px 48px;
    border: 1px solid rgba(201,168,76,0.08);
    position: relative;
    overflow: hidden;
    transition: background 0.4s;
  }
  .pain-card:hover { background: var(--charcoal); }
  .pain-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 3px; height: 0;
    background: var(--gold);
    transition: height 0.4s;
  }
  .pain-card:hover::before { height: 100%; }
  .pain-icon {
    font-size: 2rem;
    margin-bottom: 28px;
    opacity: 0.8;
  }
  .pain-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--white);
    margin-bottom: 18px;
  }
  .pain-desc {
    font-size: 0.8rem;
    color: var(--light-text);
    line-height: 1.85;
    letter-spacing: 0.03em;
  }
  .pain-num {
    position: absolute;
    top: 28px; right: 32px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 4rem;
    font-weight: 300;
    color: rgba(201,168,76,0.08);
    line-height: 1;
  }

  /* SERVICES */
  .services-bg { background: var(--deep); }

  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    margin-top: 80px;
  }

  .service-card {
    background: var(--black);
    padding: 56px 40px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s;
    border: 1px solid rgba(201,168,76,0.06);
  }
  .service-card:hover { background: var(--charcoal); transform: translateY(-4px); }
  .service-card-accent {
    width: 36px; height: 2px;
    background: var(--gold);
    margin-bottom: 28px;
  }
  .service-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 0.95rem;
    color: var(--gold);
    letter-spacing: 0.1em;
    margin-bottom: 18px;
  }
  .service-name {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.7rem;
    font-weight: 400;
    line-height: 1.25;
    margin-bottom: 20px;
    color: var(--white);
  }
  .service-desc {
    font-size: 0.78rem;
    color: var(--light-text);
    line-height: 1.85;
    letter-spacing: 0.02em;
  }
  .service-features {
    margin-top: 28px;
    list-style: none;
  }
  .service-features li {
    font-size: 0.72rem;
    color: var(--light-text);
    letter-spacing: 0.04em;
    padding: 9px 0;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    display: flex;
    gap: 12px;
    align-items: flex-start;
  }
  .service-features li::before {
    content: '→';
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
  }

  /* DIFFERENTIATOR */
  .diff-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px;
    margin-top: 80px;
  }
  .diff-col {
    padding: 68px 56px;
  }
  .diff-col.dark { background: var(--charcoal); }
  .diff-col.gold-col { background: var(--gold); }
  .diff-col-label {
    font-size: 0.65rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    margin-bottom: 40px;
    opacity: 0.7;
    color: var(--light-text);
  }
  .diff-col.gold-col .diff-col-label { color: rgba(0,0,0,0.6); }
  .diff-col-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    font-weight: 300;
    line-height: 1.25;
    margin-bottom: 32px;
    color: var(--white);
  }
  .diff-col.gold-col .diff-col-title { color: var(--black); }
  .diff-list { list-style: none; }
  .diff-list li {
    font-size: 0.78rem;
    letter-spacing: 0.04em;
    padding: 14px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    display: flex;
    gap: 14px;
    color: var(--light-text);
  }
  .diff-col.gold-col .diff-list li {
    color: rgba(0,0,0,0.75);
    border-bottom-color: rgba(0,0,0,0.12);
  }
  .diff-list li .icon { flex-shrink: 0; font-weight: 600; }
  .diff-col.dark .diff-list li .icon { color: rgba(201,168,76,0.5); }
  .diff-col.gold-col .diff-list li .icon { color: rgba(0,0,0,0.5); }

  /* STACK */
  .stack-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    margin-top: 80px;
    background: rgba(201,168,76,0.08);
  }
  .stack-item {
    background: var(--deep);
    padding: 40px 32px;
    text-align: center;
    transition: background 0.3s;
  }
  .stack-item:hover { background: var(--charcoal); }
  .stack-item-cat {
    font-size: 0.6rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 20px;
  }
  .stack-item-name {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    color: var(--white);
  }

  /* WHY */
  .why-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 48px;
    margin-top: 80px;
  }
  .why-card {
    position: relative;
    padding-top: 32px;
  }
  .why-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 1px;
    background: linear-gradient(to right, var(--gold), transparent);
  }
  .why-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 3.2rem;
    font-weight: 300;
    color: rgba(201,168,76,0.18);
    line-height: 1;
    margin-bottom: 20px;
  }
  .why-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.5rem;
    font-weight: 400;
    margin-bottom: 16px;
    color: var(--white);
  }
  .why-desc {
    font-size: 0.78rem;
    color: var(--light-text);
    line-height: 1.85;
    letter-spacing: 0.02em;
  }

  /* CTA SECTION */
  .cta-section {
    background: var(--deep);
    padding: 140px 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 50% 50%, rgba(201,168,76,0.07) 0%, transparent 70%);
  }
  .cta-eyebrow {
    font-size: 0.65rem;
    letter-spacing: 0.4em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 32px;
  }
  .cta-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(3rem, 7vw, 6rem);
    font-weight: 300;
    line-height: 1.1;
    max-width: 700px;
    margin: 0 auto 24px;
    color: var(--white);
  }
  .cta-title em { font-style: italic; color: var(--gold-light); }
  .cta-subtitle {
    font-size: 0.85rem;
    color: var(--light-text);
    letter-spacing: 0.06em;
    margin-bottom: 56px;
    max-width: 520px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.85;
  }
  .cta-buttons {
    display: flex;
    justify-content: center;
    gap: 24px;
    flex-wrap: wrap;
  }
  .btn-whatsapp {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    background: var(--gold);
    color: var(--black);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    padding: 20px 48px;
    text-decoration: none;
    transition: all 0.3s;
  }
  .btn-whatsapp:hover {
    background: var(--gold-light);
    transform: translateY(-3px);
    box-shadow: 0 20px 50px rgba(201,168,76,0.35);
  }
  .btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    border: 1px solid rgba(201,168,76,0.4);
    color: var(--gold);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.7rem;
    font-weight: 500;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    padding: 20px 40px;
    text-decoration: none;
    transition: all 0.3s;
  }
  .btn-outline:hover { border-color: var(--gold); background: rgba(201,168,76,0.05); }

  .cta-trust {
    margin-top: 56px;
    display: flex;
    justify-content: center;
    gap: 40px;
    font-size: 0.65rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--light-text);
  }
  .cta-trust span {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .cta-trust span::before { content: '✓'; color: var(--gold); font-weight: 700; }

  /* FOOTER */
  footer {
    background: var(--black);
    padding: 64px 60px;
    border-top: 1px solid rgba(201,168,76,0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .footer-logo {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    color: var(--white);
  }
  .footer-logo span { color: var(--gold); }
  .footer-links {
    display: flex;
    gap: 36px;
  }
  .footer-links a {
    font-size: 0.68rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--light-text);
    text-decoration: none;
    transition: color 0.3s;
  }
  .footer-links a:hover { color: var(--gold); }
  .footer-copy {
    font-size: 0.62rem;
    color: rgba(176,168,152,0.5);
    letter-spacing: 0.1em;
  }

  /* FLOATING CTA */
  .floating-cta {
    position: fixed;
    bottom: 32px; right: 32px;
    z-index: 200;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.4s;
    pointer-events: none;
  }
  .floating-cta.visible {
    opacity: 1;
    transform: translateY(0);
    pointer-events: all;
  }
  .floating-btn {
    display: flex;
    align-items: center;
    gap: 12px;
    background: var(--gold);
    color: var(--black);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    padding: 16px 28px;
    text-decoration: none;
    box-shadow: 0 8px 32px rgba(201,168,76,0.4);
    transition: all 0.3s;
  }
  .floating-btn:hover {
    background: var(--gold-light);
    box-shadow: 0 12px 40px rgba(201,168,76,0.5);
    transform: translateY(-2px);
  }
  .wa-dot {
    width: 8px; height: 8px;
    background: #25D366;
    border-radius: 50%;
    animation: pulse 2s infinite;
  }

  /* ANIMATIONS */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  @keyframes marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }
  @keyframes pulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(37,211,102,0.4); }
    50% { box-shadow: 0 0 0 6px rgba(37,211,102,0); }
  }

  /* SCROLL REVEAL */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.7s ease, transform 0.7s ease;
  }
  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  /* DIVIDER */
  .gold-divider {
    width: 60px; height: 1px;
    background: var(--gold);
    margin: 0 auto 20px;
    opacity: 0.6;
  }

  @media (max-width: 900px) {
    nav { padding: 20px 24px; }
    .hero { padding: 0 24px; padding-bottom: 60px; }
    .hero-stats { display: none; }
    .section { padding: 90px 24px; }
    .pain-grid, .diff-wrap { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr; }
    .why-grid { grid-template-columns: 1fr; gap: 36px; }
    .stack-grid { grid-template-columns: repeat(2, 1fr); }
    .cta-section { padding: 90px 24px; }
    .cta-buttons { flex-direction: column; align-items: center; }
    footer { flex-direction: column; gap: 28px; text-align: center; padding: 50px 24px; }
    .footer-links { flex-wrap: wrap; justify-content: center; }
    .hero-line { display: none; }
    .cursor, .cursor-ring { display: none; }
    body { cursor: auto; }
    .cta-trust { flex-direction: column; align-items: center; gap: 18px; }
  }
</style>
</head>
<body>

<!-- Custom Cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- Nav -->
<nav>
  <a href="#" class="nav-logo">AKES<span>TECH</span></a>
  <a href="https://wa.me/917275013628?text=Hi%2C%20I%20want%20a%20Free%20Strategy%20Call%20for%20my%20ecommerce%20brand" class="nav-cta" target="_blank" rel="noopener">Free Strategy Call</a>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-line"></div>

  <div style="position:relative; z-index:2; max-width:1300px;">
    <div class="hero-badge">Ecommerce Operations Partner</div>
    <h1 class="hero-title">
      Your Backend<br>
      is the<br>
      <em>Real Bottleneck.</em>
    </h1>
    <p class="hero-sub">
      While others scale ads, we eliminate the operational leaks draining your profit. Inventory, RTO, reconciliation, CX — we own it all.
    </p>
    <div class="hero-actions">
      <a href="https://wa.me/917275013628?text=Hi%2C%20I%20want%20a%20Free%20Strategy%20Call%20for%20my%20ecommerce%20brand" class="btn-primary" target="_blank" rel="noopener">
        Book Free Strategy Call
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5a12 12 0 0 0-17 17l-1 3.5 3.5-1a12 12 0 0 0 17-17zm-6 14.5a9 9 0 0 1-5.2-1.6l-.4-.2-2.1.5.5-2-.3-.4A9 9 0 1 1 17 12a9 9 0 0 1-2.5 6z"/><path d="M15 13.8c-.3-.1-1.6-.8-1.8-.9-.3-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.3-.1-1.2-.4-2.3-1.4-.8-.7-1.4-1.6-1.5-1.8-.2-.3 0-.5.1-.6l.4-.5c.1-.1.1-.3.2-.4 0-.2 0-.3-.1-.5-.1-.1-.5-1.3-.7-1.8-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3 1 2.5c.1.1 1.6 2.4 3.8 3.4.5.2 1 .4 1.3.5.5.2 1 .1 1.4.1.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.5-.3z"/></svg>
      </a>
      <a href="#services" class="btn-secondary">
        <span></span>
        Explore Services
      </a>
    </div>
  </div>

  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num">₹3L<span>+</span></div>
      <div class="stat-label">Monthly Revenue Brands</div>
    </div>
    <div class="stat">
      <div class="stat-num">D2C<span>/</span>Fashion</div>
      <div class="stat-label">Domain Specialisation</div>
    </div>
    <div class="stat">
      <div class="stat-num">4<span>+</span></div>
      <div class="stat-label">Markets Served</div>
    </div>
  </div>
</section>

<!-- Marquee -->
<div class="marquee-wrap">
  <div class="marquee-track">
    <div class="marquee-item">Shopify Operations</div>
    <div class="marquee-item">Payment Reconciliation</div>
    <div class="marquee-item">RTO Reduction</div>
    <div class="marquee-item">Inventory Management</div>
    <div class="marquee-item">CX Excellence</div>
    <div class="marquee-item">P&L Tracking</div>
    <div class="marquee-item">NDR Management</div>
    <div class="marquee-item">D2C Growth</div>
    <div class="marquee-item">India · US · UK · UAE</div>
    <div class="marquee-item">Shopify Operations</div>
    <div class="marquee-item">Payment Reconciliation</div>
    <div class="marquee-item">RTO Reduction</div>
    <div class="marquee-item">Inventory Management</div>
    <div class="marquee-item">CX Excellence</div>
    <div class="marquee-item">P&L Tracking</div>
    <div class="marquee-item">NDR Management</div>
    <div class="marquee-item">D2C Growth</div>
    <div class="marquee-item">India · US · UK · UAE</div>
  </div>
</div>

<!-- Pain Points -->
<section class="section">
  <div class="section-label reveal">The Problem</div>
  <h2 class="section-title reveal">
    Hidden leaks are<br><em>silently killing</em><br>your margins.
  </h2>

  <div class="pain-grid">
    <div class="pain-card reveal reveal-delay-1">
      <div class="pain-num">01</div>
      <div class="pain-icon">📦</div>
      <div class="pain-title">Inventory Blind Spots</div>
      <p class="pain-desc">Poor visibility across multiple warehouses leads to frequent stockouts or costly overstocking — both drain your capital and damage customer trust.</p>
    </div>
    <div class="pain-card reveal reveal-delay-2">
      <div class="pain-num">02</div>
      <div class="pain-icon">🔄</div>
      <div class="pain-title">The RTO & NDR Trap</div>
      <p class="pain-desc">High Return to Origin rates and unresolved Non-Delivery Reports silently eat into your margins while burning your logistics budget with every failed attempt.</p>
    </div>
    <div class="pain-card reveal reveal-delay-3">
      <div class="pain-num">03</div>
      <div class="pain-icon">💳</div>
      <div class="pain-title">Financial Chaos</div>
      <p class="pain-desc">Payment reconciliation gaps between Shopify, Razorpay, and COD gateways create massive undetected leaks that compound every single month.</p>
    </div>
    <div class="pain-card reveal reveal-delay-4">
      <div class="pain-num">04</div>
      <div class="pain-icon">⚙️</div>
      <div class="pain-title">Operational Friction</div>
      <p class="pain-desc">Weak customer experience, unclear P&L visibility, and broken workflows prevent you from scaling — no matter how much you spend on ads.</p>
    </div>
  </div>
</section>

<!-- Services -->
<section class="section services-bg" id="services">
  <div class="section-label reveal">What We Do</div>
  <h2 class="section-title reveal">
    End-to-end<br><em>operations mastery.</em>
  </h2>

  <div class="services-grid">
    <div class="service-card reveal reveal-delay-1">
      <div class="service-card-accent"></div>
      <div class="service-num">01</div>
      <div class="service-name">Store Operations & Financial Management</div>
      <p class="service-desc">Precision in every transaction, clarity in every rupee. Stop guessing your margins — start knowing your numbers.</p>
      <ul class="service-features">
        <li>End-to-end Shopify order processing & fulfillment</li>
        <li>Automated payment reconciliation (Shopify, Razorpay, COD)</li>
        <li>Real-time P&L with product-level margin analysis</li>
        <li>Daily settlement verification & gateway audits</li>
      </ul>
    </div>
    <div class="service-card reveal reveal-delay-2">
      <div class="service-card-accent"></div>
      <div class="service-num">02</div>
      <div class="service-name">Advanced Inventory Management</div>
      <p class="service-desc">Real-time visibility across every warehouse, marketplace, and pop-up event — zero discrepancy guaranteed.</p>
      <ul class="service-features">
        <li>Multi-warehouse unified stock tracking</li>
        <li>Automated stock transfers between locations</li>
        <li>Exhibition & pop-up event inventory support</li>
        <li>Aging, dead stock & velocity-based categorization</li>
      </ul>
    </div>
    <div class="service-card reveal reveal-delay-3">
      <div class="service-card-accent"></div>
      <div class="service-num">03</div>
      <div class="service-name">Customer Experience Operations</div>
      <p class="service-desc">Turning support into a growth engine — with a 2-hour response guarantee and zero friction service delivery.</p>
      <ul class="service-features">
        <li>Omnichannel: WhatsApp, Email & Social Media</li>
        <li>Guaranteed 2-hour response SLA</li>
        <li>Proactive delay updates before customers ask</li>
        <li>Feedback loops for product page optimization</li>
      </ul>
    </div>
    <div class="service-card reveal reveal-delay-1">
      <div class="service-card-accent"></div>
      <div class="service-num">04</div>
      <div class="service-name">Smart NDR & RTO Management</div>
      <p class="service-desc">Protect your margins by resolving delivery issues before they turn into costly returns.</p>
      <ul class="service-features">
        <li>Real-time NDR intervention & courier bridging</li>
        <li>Proven RTO reduction strategies</li>
        <li>Transparent delivery cycle communication</li>
      </ul>
    </div>
    <div class="service-card reveal reveal-delay-2">
      <div class="service-card-accent"></div>
      <div class="service-num">05</div>
      <div class="service-name">Reporting & Strategic Optimisation</div>
      <p class="service-desc">Data-driven decisions to scale your brand faster with daily, weekly, and monthly operational snapshots.</p>
      <ul class="service-features">
        <li>Comprehensive daily/weekly/monthly reports</li>
        <li>Discrepancy detection before bottom-line impact</li>
        <li>Continuous SOP improvement & efficiency audits</li>
      </ul>
    </div>
    <div class="service-card reveal reveal-delay-3" style="display:flex; flex-direction:column; justify-content:center; background:var(--gold); border-color:transparent;">
      <div style="color:var(--black);">
        <div style="font-family:'Cormorant Garamond',serif; font-size:1.1rem; font-weight:300; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:16px; opacity:0.7;">For Brands Doing</div>
        <div style="font-family:'Cormorant Garamond',serif; font-size:3rem; font-weight:400; line-height:1; margin-bottom:16px;">₹3L – ₹5Cr</div>
        <div style="font-size:0.7rem; letter-spacing:0.15em; text-transform:uppercase; margin-bottom:32px; opacity:0.7;">Per Month</div>
        <a href="https://wa.me/917275013628?text=Hi%2C%20I%20want%20a%20Free%20Strategy%20Call%20for%20my%20ecommerce%20brand" class="btn-primary" style="background:var(--black); color:var(--gold);" target="_blank" rel="noopener">
          Get Started Free
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Differentiator -->
<section class="section">
  <div class="section-label reveal">The Difference</div>
  <h2 class="section-title reveal">
    Most agencies scale<br><em>ad spend.</em> We scale<br>profitability.
  </h2>

  <div class="diff-wrap reveal">
    <div class="diff-col dark">
      <div class="diff-col-label">The Market Standard</div>
      <div class="diff-col-title">Ad-Centric, Surface-Level Growth</div>
      <ul class="diff-list">
        <li><span class="icon">✗</span> Focus exclusively on scaling ad spend</li>
        <li><span class="icon">✗</span> Measure success by ROAS alone</li>
        <li><span class="icon">✗</span> Ignore backend operational inefficiencies</li>
        <li><span class="icon">✗</span> Mask deep-seated margin leaks</li>
        <li><span class="icon">✗</span> Revenue grows, profits don't</li>
      </ul>
    </div>
    <div class="diff-col gold-col">
      <div class="diff-col-label">The Akestech Way</div>
      <div class="diff-col-title">Backend-First, Profitability-Driven Growth</div>
      <ul class="diff-list">
        <li><span class="icon">✓</span> Fix backend leaks before spending on ads</li>
        <li><span class="icon">✓</span> Measure true bottom-line profitability</li>
        <li><span class="icon">✓</span> Optimise the entire operations cycle</li>
        <li><span class="icon">✓</span> Every ad dollar drives actual profit</li>
        <li><span class="icon">✓</span> SOP-driven enterprise discipline at scale</li>
      </ul>
    </div>
  </div>
</section>

<!-- Tech Stack -->
<section class="section services-bg">
  <div class="section-label reveal">Our Tech Stack</div>
  <h2 class="section-title reveal">
    A fully integrated<br><em>ecommerce ecosystem.</em>
  </h2>

  <div class="stack-grid reveal">
    <div class="stack-item">
      <div class="stack-item-cat">Core Platforms</div>
      <div class="stack-item-name">Shopify Official Partner</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Core Platforms</div>
      <div class="stack-item-name">Meta Ads</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Core Platforms</div>
      <div class="stack-item-name">Google Merchant Center</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Core Platforms</div>
      <div class="stack-item-name">Amazon Brand Registry</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Automation & Payments</div>
      <div class="stack-item-name">Whatify WhatsApp</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Automation & Payments</div>
      <div class="stack-item-name">Razorpay</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Automation & Payments</div>
      <div class="stack-item-name">PayGlocal</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Automation & Payments</div>
      <div class="stack-item-name">Paytring</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Logistics & CX</div>
      <div class="stack-item-name">Shiprocket</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Logistics & CX</div>
      <div class="stack-item-name">Delhivery</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Logistics & CX</div>
      <div class="stack-item-name">Zendesk</div>
    </div>
    <div class="stack-item">
      <div class="stack-item-cat">Logistics & CX</div>
      <div class="stack-item-name">Gorgias</div>
    </div>
  </div>
</section>

<!-- Why Choose -->
<section class="section">
  <div class="section-label reveal">Why Akestech</div>
  <h2 class="section-title reveal">
    Strong systems.<br><em>Scalable growth.</em><br>Premium execution.
  </h2>

  <div class="why-grid">
    <div class="why-card reveal reveal-delay-1">
      <div class="why-num">01</div>
      <div class="why-title">Deep Domain Expertise</div>
      <p class="why-desc">Specialised knowledge in D2C, fashion, and lifestyle sectors. We understand the unique operational challenges of high-growth brands scaling in India and globally.</p>
    </div>
    <div class="why-card reveal reveal-delay-2">
      <div class="why-num">02</div>
      <div class="why-title">SOP-Driven Discipline</div>
      <p class="why-desc">We bring the rigour of large-scale enterprise operations to growing brands — ensuring consistency, reliability, and predictability as you scale across markets.</p>
    </div>
    <div class="why-card reveal reveal-delay-3">
      <div class="why-num">03</div>
      <div class="why-title">True Growth Partnership</div>
      <p class="why-desc">We are not a service provider — we are your operations partner. Our success is directly tied to your profitability. Scalable for India, US, UK, and UAE markets.</p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
  <p class="cta-eyebrow reveal">Ready to Scale?</p>
  <h2 class="cta-title reveal">
    Fix your backend.<br><em>Fuel your growth.</em>
  </h2>
  <p class="cta-subtitle reveal">Book a free 30-minute strategy call. No commitment — just clarity on where your brand is leaking profit and exactly how to fix it.</p>

  <div class="cta-buttons reveal">
    <a href="https://wa.me/917275013628?text=Hi%2C%20I%20want%20a%20Free%20Strategy%20Call%20for%20my%20ecommerce%20brand" class="btn-whatsapp" target="_blank" rel="noopener">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5a12 12 0 0 0-17 17l-1 3.5 3.5-1a12 12 0 0 0 17-17zm-6 14.5a9 9 0 0 1-5.2-1.6l-.4-.2-2.1.5.5-2-.3-.4A9 9 0 1 1 17 12a9 9 0 0 1-2.5 6z"/><path d="M15 13.8c-.3-.1-1.6-.8-1.8-.9-.3-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.3-.1-1.2-.4-2.3-1.4-.8-.7-1.4-1.6-1.5-1.8-.2-.3 0-.5.1-.6l.4-.5c.1-.1.1-.3.2-.4 0-.2 0-.3-.1-.5-.1-.1-.5-1.3-.7-1.8-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3 1 2.5c.1.1 1.6 2.4 3.8 3.4.5.2 1 .4 1.3.5.5.2 1 .1 1.4.1.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.1-1-.1-.1-.2-.2-.5-.3z"/></svg>
      Book Free Strategy Call on WhatsApp
    </a>
    <a href="https://www.akestech.com" class="btn-outline" target="_blank" rel="noopener">
      Visit Website
    </a>
  </div>

  <div class="cta-trust reveal">
    <span>No Commitment Required</span>
    <span>30-Minute Call</span>
    <span>100% Free</span>
    <span>Instant WhatsApp Response</span>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="footer-logo">AKES<span>TECH</span> INFOTECH</div>
  <div class="footer-links">
    <a href="https://wa.me/917275013628" target="_blank" rel="noopener">WhatsApp</a>
    <a href="https://www.akestech.com" target="_blank" rel="noopener">Website</a>
    <a href="#services">Services</a>
  </div>
  <div class="footer-copy">© 2026 Akestech Infotech. All rights reserved.</div>
</footer>

<!-- Floating CTA -->
<div class="floating-cta" id="floatingCta">
  <a href="https://wa.me/917275013628?text=Hi%2C%20I%20want%20a%20Free%20Strategy%20Call%20for%20my%20ecommerce%20brand" class="floating-btn" target="_blank" rel="noopener">
    <div class="wa-dot"></div>
    Free Strategy Call
  </a>
</div>

<script>
  // Custom Cursor
  const cursor = document.getElementById('cursor');
  const ring = document.getElementById('cursorRing');
  let mx = 0, my = 0, rx = 0, ry = 0;

  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    cursor.style.left = mx + 'px';
    cursor.style.top = my + 'px';
  });

  function animateRing() {
    rx += (mx - rx) * 0.12;
    ry += (my - ry) * 0.12;
    ring.style.left = rx + 'px';
    ring.style.top = ry + 'px';
    requestAnimationFrame(animateRing);
  }
  animateRing();

  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => {
      ring.style.width = '56px';
      ring.style.height = '56px';
      cursor.style.transform = 'translate(-50%,-50%) scale(1.5)';
    });
    el.addEventListener('mouseleave', () => {
      ring.style.width = '36px';
      ring.style.height = '36px';
      cursor.style.transform = 'translate(-50%,-50%) scale(1)';
    });
  });

  // Scroll Reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  reveals.forEach(el => observer.observe(el));

  // Floating CTA
  const floatingCta = document.getElementById('floatingCta');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 600) {
      floatingCta.classList.add('visible');
    } else {
      floatingCta.classList.remove('visible');
    }
  });

  // Save lead data to JSON on CTA click
  document.querySelectorAll('a[href*="wa.me"]').forEach(btn => {
    btn.addEventListener('click', () => {
      const lead = {
        timestamp: new Date().toISOString(),
        source: window.location.href,
        action: 'whatsapp_cta_click',
        button: btn.textContent.trim().substring(0, 50)
      };
      const existing = JSON.parse(localStorage.getItem('akestech_leads') || '[]');
      existing.push(lead);
      localStorage.setItem('akestech_leads', JSON.stringify(existing));
    });
  });
</script>
</body>
</html>