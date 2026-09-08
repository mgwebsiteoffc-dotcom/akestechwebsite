<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akestech Infotech - Scaling Ecommerce Brands with Strong Backend Operations</title>
    <meta name="description" content="Transform backend chaos into competitive advantage. We fix operational leaks for D2C brands doing ₹3L-₹5Cr monthly.">
    
    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX'); // Replace with your GA4 Measurement ID
    </script>

    <!-- Meta Pixel (Facebook) - Optional -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'YOUR_PIXEL_ID'); // Replace with your Pixel ID
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1"
    /></noscript>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-black: #0A0A0A;
            --secondary-black: #1A1A1A;
            --dark-gray: #2D2D2D;
            --gold: #C9A961;
            --light-gold: #E5D4A6;
            --text-light: #E5E5E5;
            --text-gray: #A0A0A0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--primary-black);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--gold);
            letter-spacing: 2px;
        }

        .nav-cta {
            display: flex;
            gap: 15px;
        }

        /* Buttons */
        .btn {
            padding: 12px 30px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: var(--gold);
            color: var(--primary-black);
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(201, 169, 97, 0.3);
        }

        .btn-primary:hover {
            background: var(--light-gold);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(201, 169, 97, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gold);
            border: 2px solid var(--gold);
            text-transform: uppercase;
        }

        .btn-secondary:hover {
            background: var(--gold);
            color: var(--primary-black);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--secondary-black) 100%);
            position: relative;
            padding-top: 80px;
            border-bottom: 1px solid var(--gold);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(201, 169, 97, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(201, 169, 97, 0.05) 0%, transparent 50%);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 56px;
            line-height: 1.2;
            margin-bottom: 30px;
            color: var(--gold);
        }

        .hero p {
            font-size: 20px;
            color: var(--text-gray);
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .hero-cta {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .trust-badge {
            margin-top: 50px;
            font-size: 14px;
            color: var(--text-gray);
            letter-spacing: 1px;
        }

        /* Problem Section */
        .problem-section {
            padding: 100px 0;
            background: var(--secondary-black);
        }

        .section-title {
            text-align: center;
            font-size: 42px;
            margin-bottom: 20px;
            color: var(--gold);
        }

        .section-subtitle {
            text-align: center;
            font-size: 20px;
            color: var(--text-gray);
            margin-bottom: 60px;
        }

        .problem-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .problem-card {
            background: var(--dark-gray);
            padding: 40px 30px;
            border-radius: 8px;
            border: 1px solid rgba(201, 169, 97, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .problem-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gold);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .problem-card:hover::before {
            transform: scaleX(1);
        }

        .problem-card:hover {
            transform: translateY(-5px);
            border-color: var(--gold);
            box-shadow: 0 10px 30px rgba(201, 169, 97, 0.2);
        }

        .problem-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .problem-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--gold);
        }

        .problem-card p {
            color: var(--text-gray);
            line-height: 1.8;
        }

        /* Solution Section */
        .solution-section {
            padding: 100px 0;
            background: var(--primary-black);
        }

        .solution-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .solution-card {
            text-align: center;
            padding: 30px;
        }

        .solution-icon {
            font-size: 64px;
            margin-bottom: 20px;
            display: inline-block;
        }

        .solution-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--light-gold);
        }

        .solution-card p {
            color: var(--text-gray);
        }

        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: var(--secondary-black);
        }

        .services-accordion {
            max-width: 900px;
            margin: 60px auto 0;
        }

        .accordion-item {
            margin-bottom: 20px;
            border: 1px solid rgba(201, 169, 97, 0.2);
            border-radius: 8px;
            overflow: hidden;
            background: var(--dark-gray);
        }

        .accordion-header {
            padding: 25px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .accordion-header:hover {
            background: rgba(201, 169, 97, 0.05);
        }

        .accordion-header h3 {
            font-size: 22px;
            color: var(--gold);
        }

        .accordion-icon {
            font-size: 24px;
            transition: transform 0.3s ease;
            color: var(--gold);
        }

        .accordion-item.active .accordion-icon {
            transform: rotate(45deg);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .accordion-content-inner {
            padding: 0 30px 30px;
        }

        .accordion-content ul {
            list-style: none;
            padding-left: 0;
        }

        .accordion-content li {
            padding: 10px 0;
            color: var(--text-gray);
            position: relative;
            padding-left: 25px;
        }

        .accordion-content li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--gold);
        }

        /* Lead Magnet Section */
        .lead-magnet {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--dark-gray) 100%);
            border-top: 2px solid var(--gold);
            border-bottom: 2px solid var(--gold);
        }

        .lead-magnet-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            background: var(--secondary-black);
            padding: 60px 40px;
            border-radius: 12px;
            border: 1px solid var(--gold);
            box-shadow: 0 20px 60px rgba(201, 169, 97, 0.1);
        }

        .gift-icon {
            font-size: 72px;
            margin-bottom: 20px;
        }

        .lead-magnet h2 {
            font-size: 38px;
            margin-bottom: 20px;
            color: var(--gold);
        }

        .lead-magnet-list {
            text-align: left;
            max-width: 500px;
            margin: 30px auto;
            list-style: none;
        }

        .lead-magnet-list li {
            padding: 12px 0;
            color: var(--text-light);
            position: relative;
            padding-left: 35px;
        }

        .lead-magnet-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-weight: bold;
            font-size: 20px;
        }

        .lead-form {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .form-group label {
            margin-bottom: 8px;
            color: var(--text-gray);
            font-size: 14px;
            letter-spacing: 1px;
        }

        .form-group input,
        .form-group select {
            padding: 15px;
            background: var(--dark-gray);
            border: 1px solid rgba(201, 169, 97, 0.3);
            color: var(--text-light);
            font-size: 16px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201, 169, 97, 0.1);
        }

        .privacy-note {
            font-size: 12px;
            color: var(--text-gray);
            margin-top: 20px;
        }

        /* Comparison Section */
        .comparison-section {
            padding: 100px 0;
            background: var(--primary-black);
        }

        .comparison-table {
            max-width: 900px;
            margin: 60px auto 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .comparison-column {
            padding: 40px;
            border-radius: 8px;
            border: 2px solid;
        }

        .comparison-column.standard {
            border-color: #666;
            background: var(--dark-gray);
        }

        .comparison-column.akestech {
            border-color: var(--gold);
            background: rgba(201, 169, 97, 0.05);
        }

        .comparison-column h3 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        .comparison-column.standard h3 {
            color: #999;
        }

        .comparison-column.akestech h3 {
            color: var(--gold);
        }

        .comparison-list {
            list-style: none;
        }

        .comparison-list li {
            padding: 15px 0;
            position: relative;
            padding-left: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .comparison-list li:last-child {
            border-bottom: none;
        }

        .comparison-column.standard li::before {
            content: '✗';
            position: absolute;
            left: 0;
            color: #666;
            font-size: 24px;
        }

        .comparison-column.akestech li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-size: 24px;
        }

        /* Final CTA Section */
        .final-cta {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--secondary-black) 0%, var(--primary-black) 100%);
            text-align: center;
            border-top: 2px solid var(--gold);
        }

        .final-cta h2 {
            font-size: 48px;
            margin-bottom: 40px;
            color: var(--gold);
        }

        .cta-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 900px;
            margin: 60px auto 0;
        }

        .cta-option {
            background: var(--dark-gray);
            padding: 50px 30px;
            border-radius: 12px;
            border: 1px solid rgba(201, 169, 97, 0.2);
            transition: all 0.3s ease;
        }

        .cta-option:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
            box-shadow: 0 20px 40px rgba(201, 169, 97, 0.2);
        }

        .cta-option h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: var(--light-gold);
        }

        .cta-option p {
            color: var(--text-gray);
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .contact-info {
            margin-top: 80px;
            padding: 40px;
            background: var(--dark-gray);
            border-radius: 8px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-info h3 {
            color: var(--gold);
            margin-bottom: 20px;
        }

        .contact-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-link {
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--text-light);
            text-decoration: none;
            padding: 15px;
            background: var(--secondary-black);
            border-radius: 6px;
            transition: all 0.3s ease;
            border: 1px solid rgba(201, 169, 97, 0.2);
        }

        .contact-link:hover {
            background: rgba(201, 169, 97, 0.1);
            border-color: var(--gold);
            transform: translateX(5px);
        }

        .contact-icon {
            font-size: 24px;
        }

        /* Footer */
        footer {
            background: var(--primary-black);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(201, 169, 97, 0.2);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            color: var(--gold);
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-section p,
        .footer-section a {
            color: var(--text-gray);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(201, 169, 97, 0.1);
            color: var(--text-gray);
            font-size: 14px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: var(--secondary-black);
            margin: 5% auto;
            padding: 40px;
            border: 2px solid var(--gold);
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            position: relative;
            animation: fadeInUp 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .close-modal {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 32px;
            cursor: pointer;
            color: var(--gold);
            transition: transform 0.3s ease;
        }

        .close-modal:hover {
            transform: rotate(90deg);
        }

        /* Success Message */
        .success-message {
            background: rgba(76, 175, 80, 0.1);
            border: 1px solid #4CAF50;
            color: #4CAF50;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
            display: none;
        }

        .success-message.show {
            display: block;
            animation: fadeInUp 0.3s ease;
        }

        /* Loading Spinner */
        .spinner {
            display: none;
            border: 3px solid rgba(201, 169, 97, 0.3);
            border-top: 3px solid var(--gold);
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        .spinner.show {
            display: block;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .section-title {
                font-size: 32px;
            }

            .comparison-table {
                grid-template-columns: 1fr;
            }

            .nav-cta {
                flex-direction: column;
                gap: 10px;
            }

            .hero-cta {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .final-cta h2 {
                font-size: 32px;
            }

            .modal-content {
                margin: 10% auto;
                padding: 30px 20px;
            }
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            z-index: 999;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
        }

        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/917275013628?text=Hi%20Akestech,%20I'm%20interested%20in%20fixing%20my%20backend%20operations" 
       class="whatsapp-float" 
       target="_blank"
       onclick="trackEvent('WhatsApp', 'Click', 'Float Button')">
        💬
    </a>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">AKESTECH</div>
            <div class="nav-cta">
                <a href="#lead-magnet" class="btn btn-secondary" onclick="trackEvent('Navigation', 'Click', 'Free Audit')">Free Audit</a>
                <button class="btn btn-primary" onclick="openModal('call'); trackEvent('Navigation', 'Click', 'Book Call')">Book Call</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Is Your Ecommerce Growth Draining Profits Instead of Maximizing Them?</h1>
            <p>Most D2C brands scale revenue but lose money on backend chaos. We fix the operational leaks that turn growth into actual profit.</p>
            <div class="hero-cta">
                <button class="btn btn-primary" onclick="openModal('call'); trackEvent('Hero', 'Click', 'Book Strategy Call')">Book Your Free Strategy Call</button>
                <a href="#lead-magnet" class="btn btn-secondary" onclick="trackEvent('Hero', 'Click', 'Download Audit')">Download Free Audit Checklist</a>
            </div>
            <div class="trust-badge">
                Trusted by brands doing ₹3L–₹5Cr/month across India, US, UK & UAE
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section">
        <div class="container">
            <h2 class="section-title">You're Spending Thousands on Ads, But Where's the Profit?</h2>
            <p class="section-subtitle">Most brands focus on ads. We fix the backend leaks that drain your profits.</p>
            
            <div class="problem-grid fade-in">
                <div class="problem-card">
                    <div class="problem-icon">📦</div>
                    <h3>Inventory Chaos</h3>
                    <p>Multi-warehouse blind spots causing frequent stockouts and costly dead inventory eating into margins.</p>
                </div>
                <div class="problem-card">
                    <div class="problem-icon">↩️</div>
                    <h3>RTO Bleeding</h3>
                    <p>High Return to Origin (RTO) rates and Non-Delivery Report (NDR) issues destroying 15-30% of your margins.</p>
                </div>
                <div class="problem-card">
                    <div class="problem-icon">💳</div>
                    <h3>Payment Leaks</h3>
                    <p>Reconciliation gaps between Shopify, Razorpay, and COD gateways creating massive financial blind spots.</p>
                </div>
                <div class="problem-card">
                    <div class="problem-icon">📊</div>
                    <h3>No Real P&L</h3>
                    <p>Weak customer experience and lack of clear, real-time P&L tracking preventing sustainable scaling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="solution-section">
        <div class="container">
            <h2 class="section-title">The Akestech Difference: Backend-First Growth</h2>
            <p class="section-subtitle">While others chase ROAS, we build the foundation for sustainable profitability.</p>
            
            <div class="solution-grid fade-in">
                <div class="solution-card">
                    <div class="solution-icon">📈</div>
                    <h3>Profitability Focus</h3>
                    <p>Plug operational leaks before scaling ad spend for sustainable growth.</p>
                </div>
                <div class="solution-card">
                    <div class="solution-icon">⚡</div>
                    <h3>Enterprise Systems</h3>
                    <p>SOP-driven processes ensuring consistency and reliability at scale.</p>
                </div>
                <div class="solution-card">
                    <div class="solution-icon">🔧</div>
                    <h3>Full-Stack Integration</h3>
                    <p>Seamless tech ecosystem management across all platforms.</p>
                </div>
                <div class="solution-card">
                    <div class="solution-icon">🤝</div>
                    <h3>True Partnership</h3>
                    <p>Your growth is our success metric. We're invested in your wins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title">Our End-to-End Operations Suite</h2>
            <p class="section-subtitle">Comprehensive backend solutions for scaling D2C brands</p>
            
            <div class="services-accordion fade-in">
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this); trackEvent('Services', 'Expand', 'Store Operations')">
                        <h3>Store & Financial Operations</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <ul>
                                <li>End-to-end Shopify store management (Official Partner)</li>
                                <li>Automated payment reconciliation across Shopify, Razorpay, and COD</li>
                                <li>Real-time P&L tracking with detailed margin analysis</li>
                                <li>Seamless returns and exchange management</li>
                                <li>Daily settlement verification for all payment modes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this); trackEvent('Services', 'Expand', 'Inventory')">
                        <h3>Advanced Inventory Management</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <ul>
                                <li>Unified view of stock across all physical locations</li>
                                <li>Real-time stock visibility for Shopify & marketplaces</li>
                                <li>Automated stock transfers between warehouses</li>
                                <li>Exhibition & event inventory tracking</li>
                                <li>Aging and dead stock identification</li>
                                <li>Fast-moving item tracking for replenishment</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this); trackEvent('Services', 'Expand', 'CX Operations')">
                        <h3>Customer Experience Operations</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <ul>
                                <li>Omnichannel support (WhatsApp, Email, Social Media)</li>
                                <li>Guaranteed <2 hour response time</li>
                                <li>Proactive delivery updates before customers ask</li>
                                <li>Unified brand voice across all channels</li>
                                <li>Feedback loops to improve product & packaging</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this); trackEvent('Services', 'Expand', 'RTO Reduction')">
                        <h3>RTO Reduction & NDR Management</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <ul>
                                <li>Active NDR management to prevent failed deliveries</li>
                                <li>Real-time intervention before returns happen</li>
                                <li>Proven strategies for 40%+ RTO reduction</li>
                                <li>Bridge between courier and customer</li>
                                <li>Transparent fulfillment communication</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this); trackEvent('Services', 'Expand', 'Reporting')">
                        <h3>Strategic Reporting & Optimization</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-content-inner">
                            <ul>
                                <li>Daily, weekly, and monthly performance dashboards</li>
                                <li>Rapid discrepancy identification and resolution</li>
                                <li>Continuous SOP improvement and efficiency audits</li>
                                <li>Product and order-level profitability analysis</li>
                                <li>Data-driven scaling recommendations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Magnet Section -->
    <section class="lead-magnet" id="lead-magnet">
        <div class="lead-magnet-container fade-in">
            <div class="gift-icon">🎁</div>
            <h2>FREE RESOURCE</h2>
            <p style="font-size: 24px; color: var(--gold); margin-bottom: 20px;">
                The Complete Ecommerce Backend Audit Checklist<br>
                <span style="font-size: 18px; color: var(--text-gray);">Plus 2026 Strategy Deck</span>
            </p>
            <p style="color: var(--text-gray); margin-bottom: 30px;">
                Discover exactly where your backend is leaking profits with our comprehensive 47-point audit framework used by ₹5Cr+ brands.
            </p>
            
            <ul class="lead-magnet-list">
                <li>Payment reconciliation audit template</li>
                <li>Inventory health scorecard</li>
                <li>RTO reduction playbook</li>
                <li>P&L tracking framework</li>
                <li>Full 2026 Strategy Deck (exclusive)</li>
            </ul>

            <form class="lead-form" id="leadForm" onsubmit="submitLeadForm(event)">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label>Email Address *</label>
                    <input type="email" name="email" required placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label>WhatsApp Number *</label>
                    <input type="tel" name="phone" required placeholder="+91-XXXXXXXXXX">
                </div>
                <div class="form-group">
                    <label>Monthly Revenue *</label>
                    <select name="revenue" required>
                        <option value="">Select range</option>
                        <option value="3-10L">₹3L - ₹10L</option>
                        <option value="10-50L">₹10L - ₹50L</option>
                        <option value="50L-1Cr">₹50L - ₹1Cr</option>
                        <option value="1-5Cr">₹1Cr - ₹5Cr</option>
                        <option value="5Cr+">₹5Cr+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Biggest Challenge *</label>
                    <select name="challenge" required>
                        <option value="">Select challenge</option>
                        <option value="inventory">Inventory Management</option>
                        <option value="rto">High RTO Rates</option>
                        <option value="reconciliation">Payment Reconciliation</option>
                        <option value="pl">P&L Visibility</option>
                        <option value="cx">Customer Experience</option>
                        <option value="all">All of the above</option>
                    </select>
                </div>
                <div class="spinner" id="leadSpinner"></div>
                <button type="submit" class="btn btn-primary" style="width: 100%;" id="leadSubmitBtn">
                    SEND ME THE FREE AUDIT KIT
                </button>
                <div class="success-message" id="successMessage">
                    ✓ Success! Check your email for the download link.
                </div>
                <p class="privacy-note">🔒 Zero spam. Just premium operational intelligence.</p>
            </form>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison-section">
        <div class="container">
            <h2 class="section-title">The Market Standard vs. The Akestech Way</h2>
            <p class="section-subtitle">Most brands focus on ads. We fix backend leaks.</p>
            
            <div class="comparison-table fade-in">
                <div class="comparison-column standard">
                    <h3>❌ Typical Agency</h3>
                    <ul class="comparison-list">
                        <li>Focus on ad spend</li>
                        <li>Revenue-first growth</li>
                        <li>Surface metrics (ROAS)</li>
                        <li>Service provider mindset</li>
                        <li>Generic processes</li>
                        <li>Hidden operational costs</li>
                    </ul>
                </div>
                <div class="comparison-column akestech">
                    <h3>✓ Akestech Approach</h3>
                    <ul class="comparison-list">
                        <li>Focus on profitability</li>
                        <li>Backend-first growth</li>
                        <li>Bottom-line metrics</li>
                        <li>True growth partner</li>
                        <li>SOP-driven systems</li>
                        <li>Complete cost transparency</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta" id="final-cta">
        <div class="container">
            <h2>Ready to Transform Backend Chaos<br>Into Competitive Advantage?</h2>
            <p style="font-size: 20px; color: var(--text-gray); max-width: 700px; margin: 0 auto 40px;">
                Two ways to get started with fixing your operational leaks
            </p>
            
            <div class="cta-options fade-in">
                <div class="cta-option">
                    <h3>Option 1: Free Strategy Call</h3>
                    <p>Book a 30-minute consultation to diagnose your operational leaks and map your profit optimization roadmap.</p>
                    <button class="btn btn-primary" style="width: 100%;" onclick="openModal('call'); trackEvent('Final CTA', 'Click', 'Schedule Call')">
                        SCHEDULE YOUR FREE CALL
                    </button>
                </div>
                <div class="cta-option">
                    <h3>Option 2: Get Resources First</h3>
                    <p>Download our complete 2026 Strategy Deck + Backend Audit Kit and explore at your own pace.</p>
                    <a href="#lead-magnet" class="btn btn-secondary" style="width: 100%;" onclick="trackEvent('Final CTA', 'Click', 'Download Resources')">
                        DOWNLOAD FREE RESOURCES
                    </a>
                </div>
            </div>

            <div class="contact-info">
                <h3>Contact Us Directly</h3>
                <div class="contact-links">
                    <a href="https://www.akestech.com" target="_blank" class="contact-link" onclick="trackEvent('Contact', 'Click', 'Website')">
                        <span class="contact-icon">🌐</span>
                        <span>www.akestech.com</span>
                    </a>
                    <a href="https://wa.me/917275013628?text=Hi%20Akestech,%20I'm%20interested%20in%20fixing%20my%20backend%20operations" 
                       target="_blank" 
                       class="contact-link"
                       onclick="trackEvent('Contact', 'Click', 'WhatsApp')">
                        <span class="contact-icon">💬</span>
                        <span>+91-7275013628 (WhatsApp)</span>
                    </a>
                    <a href="mailto:info@akestech.com" class="contact-link" onclick="trackEvent('Contact', 'Click', 'Email')">
                        <span class="contact-icon">✉️</span>
                        <span>info@akestech.com</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>AKESTECH INFOTECH</h4>
                    <p>Scaling Ecommerce Brands with Strong Backend Operations</p>
                    <p>Official Shopify Partner</p>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <a href="#services" onclick="trackEvent('Footer', 'Click', 'Services')">Store Operations</a>
                    <a href="#services" onclick="trackEvent('Footer', 'Click', 'Inventory')">Inventory Management</a>
                    <a href="#services" onclick="trackEvent('Footer', 'Click', 'CX')">Customer Experience</a>
                    <a href="#services" onclick="trackEvent('Footer', 'Click', 'RTO')">RTO Reduction</a>
                </div>
                <div class="footer-section">
                    <h4>Global Presence</h4>
                    <p>🇮🇳 India</p>
                    <p>🇺🇸 United States</p>
                    <p>🇬🇧 United Kingdom</p>
                    <p>🇦🇪 United Arab Emirates</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <a href="#lead-magnet" onclick="trackEvent('Footer', 'Click', 'Free Audit')">Free Audit</a>
                    <a href="#final-cta" onclick="trackEvent('Footer', 'Click', 'Book Call')">Book Call</a>
                    <a href="https://www.akestech.com" target="_blank" onclick="trackEvent('Footer', 'Click', 'Website')">Website</a>
                    <a href="https://wa.me/917275013628" target="_blank" onclick="trackEvent('Footer', 'Click', 'WhatsApp')">WhatsApp</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 Akestech Infotech. All rights reserved. | Scalable for Global Brands: India | US | UK | UAE</p>
            </div>
        </div>
    </footer>

    <!-- Modal for Call Booking -->
    <div id="callModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('call')">&times;</span>
            <h2 style="color: var(--gold); margin-bottom: 20px;">Book Your Free Strategy Call</h2>
            <p style="color: var(--text-gray); margin-bottom: 30px;">
                Schedule a 30-minute consultation with our operations experts.
            </p>
            <form id="callForm" onsubmit="submitCallForm(event)">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>WhatsApp Number *</label>
                    <input type="tel" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Brand Name *</label>
                    <input type="text" name="brand" required>
                </div>
                <div class="form-group">
                    <label>Monthly Revenue *</label>
                    <select name="revenue" required>
                        <option value="">Select range</option>
                        <option value="3-10L">₹3L - ₹10L</option>
                        <option value="10-50L">₹10L - ₹50L</option>
                        <option value="50L-1Cr">₹50L - ₹1Cr</option>
                        <option value="1-5Cr">₹1Cr - ₹5Cr</option>
                        <option value="5Cr+">₹5Cr+</option>
                    </select>
                </div>
                <div class="spinner" id="callSpinner"></div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;" id="callSubmitBtn">
                    BOOK MY CALL NOW
                </button>
                <div class="success-message" id="callSuccessMessage">
                    ✓ Success! We'll contact you within 24 hours to schedule.
                </div>
            </form>
        </div>
    </div>

    <script>
        // Google Analytics Event Tracking
        function trackEvent(category, action, label) {
            if (typeof gtag !== 'undefined') {
                gtag('event', action, {
                    'event_category': category,
                    'event_label': label
                });
            }
            
            // Facebook Pixel tracking
            if (typeof fbq !== 'undefined') {
                fbq('track', action, {
                    category: category,
                    label: label
                });
            }
            
            console.log('Event tracked:', category, action, label);
        }

        // Accordion functionality
        function toggleAccordion(element) {
            const item = element.parentElement;
            const content = item.querySelector('.accordion-content');
            const isActive = item.classList.contains('active');
            
            // Close all accordion items
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.accordion-content').style.maxHeight = null;
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }

        // Modal functionality
        function openModal(type) {
            if (type === 'call') {
                document.getElementById('callModal').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            if (type === 'call') {
                document.getElementById('callModal').style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const callModal = document.getElementById('callModal');
            if (event.target == callModal) {
                closeModal('call');
            }
        }

        // PDF Download Function
        function downloadPDF(formData) {
            // Create a link element
            const link = document.createElement('a');
            
            // Set the href to your PDF file
            // Option 1: If PDF is hosted on your server
            link.href = '/assets/Akestech_Infotech_2026_Strategy_Deck.pdf';
            
            // Option 2: If using external hosting (Google Drive, Dropbox, etc.)
            // link.href = 'https://drive.google.com/uc?export=download&id=YOUR_FILE_ID';
            
            // Set download attribute with filename
            link.download = 'Akestech_Ecommerce_Audit_Kit_2026.pdf';
            
            // Append to body, click, and remove
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            // Track download
            trackEvent('Lead Magnet', 'Download', 'PDF Audit Kit');
            
            // Optional: Send email with PDF link
            sendPDFEmail(formData);
        }

        // Send PDF via Email (backend integration)
        function sendPDFEmail(formData) {
            // This is where you'd integrate with your email service
            // Example: SendGrid, Mailchimp, or your own backend
            
            const emailData = {
                to: formData.email,
                name: formData.name,
                phone: formData.phone,
                revenue: formData.revenue,
                challenge: formData.challenge,
                pdfUrl: 'https://www.akestech.com/downloads/audit-kit.pdf',
                timestamp: new Date().toISOString()
            };

            // Example API call (replace with your endpoint)
            /*
            fetch('https://your-backend.com/api/send-pdf', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(emailData)
            })
            .then(response => response.json())
            .then(data => console.log('Email sent:', data))
            .catch(error => console.error('Error:', error));
            */

            // For now, log to console
            console.log('Email data to be sent:', emailData);
        }

        // Lead Form Submission
        function submitLeadForm(event) {
            event.preventDefault();
            
            const submitBtn = document.getElementById('leadSubmitBtn');
            const spinner = document.getElementById('leadSpinner');
            const successMsg = document.getElementById('successMessage');
            
            // Disable button and show spinner
            submitBtn.disabled = true;
            submitBtn.textContent = 'PROCESSING...';
            spinner.classList.add('show');
            
            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);
            
            // Track form submission
            trackEvent('Lead Magnet', 'Submit', 'Form Submission');
            
            // Simulate API call
            setTimeout(() => {
                // Hide spinner
                spinner.classList.remove('show');
                
                // Show success message
                successMsg.classList.add('show');
                
                // Download PDF
                downloadPDF(data);
                
                // Reset form
                event.target.reset();
                
                // Re-enable button
                submitBtn.disabled = false;
                submitBtn.textContent = 'SEND ME THE FREE AUDIT KIT';
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMsg.classList.remove('show');
                }, 5000);
                
                // Optional: Redirect to thank you page
                // setTimeout(() => {
                //     window.location.href = '/thank-you.html';
                // }, 2000);
                
            }, 1500);

            // Real implementation would look like this:
            /*
            fetch('https://your-backend.com/api/lead-magnet', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                spinner.classList.remove('show');
                successMsg.classList.add('show');
                downloadPDF(data);
                event.target.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = 'SEND ME THE FREE AUDIT KIT';
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong. Please try again or contact us directly.');
                spinner.classList.remove('show');
                submitBtn.disabled = false;
                submitBtn.textContent = 'SEND ME THE FREE AUDIT KIT';
            });
            */
        }

        // Call Form Submission
        function submitCallForm(event) {
            event.preventDefault();
            
            const submitBtn = document.getElementById('callSubmitBtn');
            const spinner = document.getElementById('callSpinner');
            const successMsg = document.getElementById('callSuccessMessage');
            
            // Disable button and show spinner
            submitBtn.disabled = true;
            submitBtn.textContent = 'PROCESSING...';
            spinner.classList.add('show');
            
            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);
            
            // Track form submission
            trackEvent('Call Booking', 'Submit', 'Call Form Submission');
            
            // Simulate API call
            setTimeout(() => {
                spinner.classList.remove('show');
                successMsg.classList.add('show');
                event.target.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = 'BOOK MY CALL NOW';
                
                // Close modal after 3 seconds
                setTimeout(() => {
                    closeModal('call');
                    successMsg.classList.remove('show');
                }, 3000);

                // Send WhatsApp notification
                const message = `New Call Booking Request:\nName: ${data.name}\nEmail: ${data.email}\nPhone: ${data.phone}\nBrand: ${data.brand}\nRevenue: ${data.revenue}`;
                const whatsappUrl = `https://wa.me/917275013628?text=${encodeURIComponent(message)}`;
                
                // Optional: Auto-open WhatsApp
                // window.open(whatsappUrl, '_blank');
                
            }, 1500);

            // Real implementation:
            /*
            fetch('https://your-backend.com/api/book-call', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                spinner.classList.remove('show');
                successMsg.classList.add('show');
                event.target.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = 'BOOK MY CALL NOW';
                
                setTimeout(() => {
                    closeModal('call');
                    successMsg.classList.remove('show');
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong. Please try again or contact us on WhatsApp.');
                spinner.classList.remove('show');
                submitBtn.disabled = false;
                submitBtn.textContent = 'BOOK MY CALL NOW';
            });
            */
        }

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Track section view
                    const sectionName = entry.target.querySelector('.section-title')?.textContent || 'Unknown Section';
                    trackEvent('Section View', 'Scroll', sectionName);
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
            
            // Track page load
            trackEvent('Page', 'Load', 'Landing Page');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Track scroll depth
        let scrollDepth = 0;
        window.addEventListener('scroll', function() {
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
            
            if (scrollPercent > scrollDepth) {
                scrollDepth = Math.floor(scrollPercent / 25) * 25; // Track at 25%, 50%, 75%, 100%
                if (scrollDepth > 0 && scrollDepth % 25 === 0) {
                    trackEvent('Scroll Depth', 'Scroll', scrollDepth + '%');
                }
            }
        });

        // Track time on page
        let timeOnPage = 0;
        setInterval(function() {
            timeOnPage += 30;
            if (timeOnPage % 60 === 0) {
                trackEvent('Time on Page', 'Duration', Math.floor(timeOnPage / 60) + ' minutes');
            }
        }, 30000); // Track every 30 seconds

        // Exit intent popup (optional)
        /*
        document.addEventListener('mouseout', function(e) {
            if (!e.toElement && !e.relatedTarget) {
                // User is leaving the page
                trackEvent('Exit Intent', 'Trigger', 'Mouse Leave');
                // You could show a special offer modal here
            }
        });
        */
    </script>

</body>
</html>