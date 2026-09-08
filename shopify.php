<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>₹9,999 Shopify Store That Makes ₹10L+/Month | 7-Day Launch Guarantee</title>
    <meta name="description" content="We build profitable Shopify stores that generate ₹10L-₹1Cr+ monthly revenue. 500+ stores launched. ₹50Cr+ revenue generated. 30-day money-back guarantee.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --dark: #0f172a;
            --gray: #64748b;
            --light: #f8fafc;
            --border: #e2e8f0;
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Announcement Bar */
        .announcement {
            background: linear-gradient(90deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            text-align: center;
            padding: 12px 20px;
            font-weight: 700;
            font-size: 15px;
            position: sticky;
            top: 0;
            z-index: 10000;
        }

        .announcement span {
            color: #fbbf24;
            font-size: 16px;
        }

        /* Header */
        header {
            background: white;
            box-shadow: 0 1px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 44px;
            z-index: 9999;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            font-weight: 900;
            color: var(--primary);
        }

        .header-cta {
            background: var(--primary);
            color: white;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }

        .header-cta:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99,102,241,0.4);
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 20px 120px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 10px 25px;
            border-radius: 50px;
            margin-bottom: 20px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .hero h1 {
            font-size: 56px;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #fbbf24;
        }

        .hero p {
            font-size: 22px;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin: 50px 0;
            flex-wrap: wrap;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 42px;
            font-weight: 900;
            color: #fbbf24;
        }

        .stat-label {
            font-size: 15px;
            opacity: 0.9;
        }

        .hero-ctas {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .btn {
            padding: 18px 40px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary);
        }

        .guarantee {
            background: rgba(255,255,255,0.1);
            padding: 15px 30px;
            border-radius: 50px;
            display: inline-block;
            margin-top: 20px;
            font-size: 15px;
        }

        /* Trust Section */
        .trust {
            background: white;
            padding: 50px 20px;
            text-align: center;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .trust-item {
            padding: 20px;
        }

        .trust-number {
            font-size: 48px;
            font-weight: 900;
            color: var(--primary);
        }

        .trust-label {
            color: var(--gray);
            font-size: 16px;
            margin-top: 10px;
        }

        /* Case Studies */
        .section {
            padding: 100px 20px;
        }

        .section-title {
            text-align: center;
            font-size: 42px;
            font-weight: 900;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .section-subtitle {
            text-align: center;
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .case-studies {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .case-study {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .case-study:hover {
            transform: translateY(-10px);
        }

        .case-image {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 700;
        }

        .case-content {
            padding: 30px;
        }

        .case-category {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .case-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .case-results {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 25px 0;
            padding: 20px;
            background: #f8fafc;
            border-radius: 8px;
        }

        .result {
            text-align: center;
        }

        .result-value {
            font-size: 28px;
            font-weight: 900;
            color: var(--success);
        }

        .result-label {
            font-size: 12px;
            color: var(--gray);
            margin-top: 5px;
        }

        .case-quote {
            font-style: italic;
            color: var(--gray);
            margin: 20px 0;
            line-height: 1.7;
        }

        .case-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
        }

        .author-info h4 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 14px;
            color: var(--gray);
        }

        /* Problem vs Solution */
        .problem-solution {
            background: #fef2f2;
        }

        .problem-solution-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .problem-side, .solution-side {
            background: white;
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .problem-side {
            border-left: 6px solid var(--danger);
        }

        .solution-side {
            border-left: 6px solid var(--success);
        }

        .side-title {
            font-size: 28px;
            font-weight: 900;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .problem-list li, .solution-list li {
            padding: 15px 0;
            padding-left: 40px;
            position: relative;
            font-size: 17px;
            line-height: 1.6;
            border-bottom: 1px solid #f1f5f9;
        }

        .problem-list li:last-child, .solution-list li:last-child {
            border-bottom: none;
        }

        .problem-list li::before {
            content: "✗";
            position: absolute;
            left: 0;
            color: var(--danger);
            font-weight: 900;
            font-size: 20px;
        }

        .solution-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: 900;
            font-size: 20px;
        }

        /* Process */
        .process {
            background: var(--dark);
            color: white;
        }

        .process-timeline {
            max-width: 900px;
            margin: 60px auto 0;
            position: relative;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary);
            transform: translateX(-50%);
        }

        .process-step {
            display: flex;
            margin-bottom: 80px;
            position: relative;
        }

        .process-step:nth-child(even) {
            flex-direction: row-reverse;
        }

        .step-content {
            width: 45%;
            background: rgba(255,255,255,0.05);
            padding: 40px;
            border-radius: var(--radius);
            backdrop-filter: blur(10px);
        }

        .step-number {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 70px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 900;
            z-index: 1;
        }

        .step-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .step-duration {
            background: rgba(99,102,241,0.3);
            color: #c7d2fe;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 15px;
        }

        .step-deliverables {
            margin-top: 20px;
        }

        .step-deliverables li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            opacity: 0.9;
        }

        .step-deliverables li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        /* Pricing */
        .pricing {
            background: #f8fafc;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pricing-card {
            background: white;
            border-radius: var(--radius);
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            border: 2px solid transparent;
            transition: all 0.3s;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .pricing-card.featured {
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--danger);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
        }

        .plan-name {
            font-size: 28px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .plan-price {
            font-size: 48px;
            font-weight: 900;
            color: var(--primary);
            margin: 20px 0;
        }

        .plan-price small {
            font-size: 18px;
            color: var(--gray);
        }

        .delivery {
            background: #ecfdf5;
            color: var(--success);
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
        }

        .features {
            list-style: none;
            margin: 30px 0;
        }

        .features li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            border-bottom: 1px solid #f1f5f9;
        }

        .features li:last-child {
            border-bottom: none;
        }

        .features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: 900;
            font-size: 20px;
        }

        .plan-cta {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 18px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 18px;
            margin-top: 20px;
        }

        .plan-cta:hover {
            background: var(--primary-dark);
        }

        /* Guarantee */
        .guarantee-box {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
            border-radius: var(--radius);
            margin: 80px 0;
        }

        .guarantee-box h3 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Testimonials */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-left: 4px solid var(--primary);
        }

        .stars {
            color: #fbbf24;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* FAQ */
        .faq-item {
            background: white;
            margin-bottom: 15px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .faq-question {
            width: 100%;
            padding: 25px;
            background: none;
            border: none;
            text-align: left;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            color: var(--primary);
        }

        .faq-answer {
            padding: 0 25px 25px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 300px;
        }

        /* Final CTA */
        .final-cta {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .final-cta h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .countdown {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: var(--radius);
            margin: 40px auto;
            max-width: 600px;
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .time-block {
            text-align: center;
        }

        .time-number {
            font-size: 48px;
            font-weight: 900;
            color: #fbbf24;
        }

        .time-label {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Form */
        .contact-form {
            background: white;
            padding: 50px;
            border-radius: var(--radius);
            max-width: 600px;
            margin: 50px auto 0;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        /* WhatsApp Float */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            animation: pulse 2s infinite;
        }

        .whatsapp-float a {
            display: block;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(37,211,102,0.4);
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 36px; }
            .hero p { font-size: 18px; }
            .problem-solution-grid { grid-template-columns: 1fr; }
            .process-timeline::before { left: 30px; }
            .process-step { flex-direction: column !important; }
            .step-content { width: 100%; margin-left: 0 !important; margin-right: 0 !important; }
            .step-number { left: 30px; }
            .pricing-card.featured { transform: none; }
        }
    </style>
</head>
<body>

    <!-- Announcement -->
    <div class="announcement">
        🔥 <span>LIMITED OFFER:</span> Get 15% OFF + FREE Marketing Setup Worth ₹35,000 - Only 7 Spots Left This Week!
    </div>

    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="logo">ShopifyPro</div>
            <a href="#contact" class="header-cta">Book Free Call →</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge">✓ 500+ Stores Launched • ₹50Cr+ Revenue Generated</div>
            <h1>Build a Shopify Store That Makes <span>₹10L-₹1Cr+/Month</span></h1>
            <p>We don't build pretty websites. We build money-making machines that convert visitors into paying customers. Launch in 7 days with our proven system.</p>
            
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Stores Launched</div>
                </div>
                <div class="stat">
                    <div class="stat-number">₹50Cr+</div>
                    <div class="stat-label">Revenue Generated</div>
                </div>
                <div class="stat">
                    <div class="stat-number">4.2%</div>
                    <div class="stat-label">Average Conversion Rate</div>
                </div>
                <div class="stat">
                    <div class="stat-number">7 Days</div>
                    <div class="stat-label">Average Delivery</div>
                </div>
            </div>

            <div class="hero-ctas">
                <a href="#contact" class="btn btn-primary">Start at ₹9,999 →</a>
                <a href="#case-studies" class="btn btn-secondary">See Success Stories</a>
            </div>

            <div class="guarantee">
                🛡️ 30-Day Money-Back Guarantee • No Questions Asked
            </div>
        </div>
    </section>

    <!-- Trust -->
    <section class="trust">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-number">500+</div>
                    <div class="trust-label">Happy Clients</div>
                </div>
                <div class="trust-item">
                    <div class="trust-number">₹50Cr+</div>
                    <div class="trust-label">Revenue Generated</div>
                </div>
                <div class="trust-item">
                    <div class="trust-number">98%</div>
                    <div class="trust-label">Client Satisfaction</div>
                </div>
                <div class="trust-item">
                    <div class="trust-number">24/7</div>
                    <div class="trust-label">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="section" id="case-studies">
        <div class="container">
            <h2 class="section-title">Real Results From Real Clients</h2>
            <p class="section-subtitle">These are actual stores we built that are making serious money right now</p>

            <div class="case-studies">
                <!-- Case Study 1 -->
                <div class="case-study">
                    <div class="case-image">Fashion Store Launch</div>
                    <div class="case-content">
                        <div class="case-category">Women's Fashion</div>
                        <h3 class="case-title">From Zero to ₹42 Lakh in 90 Days</h3>
                        
                        <div class="case-results">
                            <div class="result">
                                <div class="result-value">₹42L</div>
                                <div class="result-label">Revenue</div>
                            </div>
                            <div class="result">
                                <div class="result-value">4.8%</div>
                                <div class="result-label">Conversion</div>
                            </div>
                            <div class="result">
                                <div class="result-value">₹2,850</div>
                                <div class="result-label">AOV</div>
                            </div>
                        </div>

                        <p class="case-quote">"I was skeptical about paying ₹34,999 but this was the best decision for my business. The store they built looks premium and converts like crazy. Already recovered the investment 10x!"</p>

                        <div class="case-author">
                            <div class="author-avatar">P</div>
                            <div class="author-info">
                                <h4>Priyanka Sharma</h4>
                                <p>Founder, StyleAura</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="case-study">
                    <div class="case-image">Home Decor Scale</div>
                    <div class="case-content">
                        <div class="case-category">Home & Living</div>
                        <h3 class="case-title">₹1.8 Crore Annual Revenue</h3>
                        
                        <div class="case-results">
                            <div class="result">
                                <div class="result-value">₹1.8Cr</div>
                                <div class="result-label">Yearly</div>
                            </div>
                            <div class="result">
                                <div class="result-value">5.2%</div>
                                <div class="result-label">Conversion</div>
                            </div>
                            <div class="result">
                                <div class="result-value">₹3,400</div>
                                <div class="result-label">AOV</div>
                            </div>
                        </div>

                        <p class="case-quote">"They understood my brand vision perfectly. The store handles 800+ orders/month without any issues. Their upsell strategy increased AOV by 68%!"</p>

                        <div class="case-author">
                            <div class="author-avatar">R</div>
                            <div class="author-info">
                                <h4>Rajesh Kumar</h4>
                                <p>Owner, DecorDelight</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="case-study">
                    <div class="case-image">Beauty Brand</div>
                    <div class="case-content">
                        <div class="case-category">Beauty & Skincare</div>
                        <h3 class="case-title">₹28 Lakh in First 45 Days</h3>
                        
                        <div class="case-results">
                            <div class="result">
                                <div class="result-value">₹28L</div>
                                <div class="result-label">45 Days</div>
                            </div>
                            <div class="result">
                                <div class="result-value">4.1%</div>
                                <div class="result-label">Conversion</div>
                            </div>
                            <div class="result">
                                <div class="result-value">₹1,950</div>
                                <div class="result-label">AOV</div>
                            </div>
                        </div>

                        <p class="case-quote">"Professional team that delivers results. The mobile experience is perfect - 85% of my customers shop from phone. Couldn't be happier!"</p>

                        <div class="case-author">
                            <div class="author-avatar">N</div>
                            <div class="author-info">
                                <h4>Neha Gupta</h4>
                                <p>Founder, GlowBeauty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem vs Solution -->
    <section class="section problem-solution">
        <div class="container">
            <h2 class="section-title">Why Most Shopify Stores Fail (And How We Fix It)</h2>
            <p class="section-subtitle">95% of Shopify stores never make ₹5L/month. Here's why - and how we guarantee you won't be one of them</p>

            <div class="problem-solution-grid">
                <div class="problem-side">
                    <h3 class="side-title">❌ What You're Doing Wrong</h3>
                    <ul class="problem-list">
                        <li>Using cheap templates that look like everyone else</li>
                        <li>Slow loading speed (losing 50%+ visitors)</li>
                        <li>No mobile optimization (80% traffic is mobile)</li>
                        <li>No trust elements or social proof</li>
                        <li>Poor checkout experience (70% cart abandonment)</li>
                        <li>No upsell/cross-sell strategy</li>
                        <li>Not optimized for Facebook/Google ads</li>
                        <li>Generic product descriptions</li>
                    </ul>
                </div>

                <div class="solution-side">
                    <h3 class="side-title">✅ How We Make You Succeed</h3>
                    <ul class="solution-list">
                        <li>Custom premium design that stands out</li>
                        <li>Lightning-fast loading (under 2 seconds)</li>
                        <li>Mobile-first design with perfect UX</li>
                        <li>Trust badges, reviews, testimonials built-in</li>
                        <li>Optimized checkout flow (95%+ completion)</li>
                        <li>Advanced upsell/cross-sell systems</li>
                        <li>100% ads-optimized structure</li>
                        <li>Professional copywriting that sells</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="section process">
        <div class="container">
            <h2 class="section-title">Our Proven 7-Day Launch Process</h2>
            <p class="section-subtitle">We've refined this process over 500+ successful launches</p>

            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Strategy & Planning</h3>
                        <span class="step-duration">Day 1-2</span>
                        <p>We study your business, competitors, and target audience to create a custom conversion strategy.</p>
                        <ul class="step-deliverables">
                            <li>Competitor analysis</li>
                            <li>Target audience research</li>
                            <li>Custom conversion strategy</li>
                            <li>Brand positioning</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Design & Development</h3>
                        <span class="step-duration">Day 3-5</span>
                        <p>We build your store with conversion in mind - every element is strategically placed to maximize sales.</p>
                        <ul class="step-deliverables">
                            <li>Custom homepage design</li>
                            <li>Product page optimization</li>
                            <li>Mobile optimization</li>
                            <li>Speed optimization</li>
                            <li>Trust elements integration</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Testing & Optimization</h3>
                        <span class="step-duration">Day 6</span>
                        <p>We test everything - checkout flow, mobile experience, loading speed - to ensure perfect performance.</p>
                        <ul class="step-deliverables">
                            <li>Complete functionality testing</li>
                            <li>Mobile & desktop testing</li>
                            <li>Speed optimization</li>
                            <li>Checkout flow testing</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Launch & Growth</h3>
                        <span class="step-duration">Day 7+</span>
                        <p>Your store goes live with everything set up for immediate sales and scaling.</p>
                        <ul class="step-deliverables">
                            <li>Store launch</li>
                            <li>Complete training</li>
                            <li>Marketing setup (Premium plans)</li>
                            <li>Ongoing support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section pricing">
        <div class="container">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <p class="section-subtitle">Choose the perfect plan for your business goals</p>

            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="plan-name">Starter</div>
                    <div class="plan-price">₹9,999</div>
                    <div class="delivery">Delivered in 7 Days</div>
                    <ul class="features">
                        <li>Professional theme setup</li>
                        <li>Up to 15 products</li>
                        <li>Mobile responsive</li>
                        <li>Payment gateway setup</li>
                        <li>Shipping configuration</li>
                        <li>Basic SEO</li>
                        <li>7 days support</li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Starter - ₹9,999')">Get Started</button>
                </div>

                <div class="pricing-card featured">
                    <div class="badge">MOST POPULAR</div>
                    <div class="plan-name">Growth</div>
                    <div class="plan-price">₹34,999</div>
                    <div class="delivery">Delivered in 10 Days</div>
                    <ul class="features">
                        <li>Everything in Starter</li>
                        <li>Up to 50 products</li>
                        <li>Custom homepage design</li>
                        <li>Conversion optimization</li>
                        <li>Upsell/cross-sell setup</li>
                        <li>Newsletter popup</li>
                        <li>30 days support</li>
                        <li><strong>FREE Marketing Setup</strong></li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Growth - ₹34,999')">Best Value →</button>
                </div>

                <div class="pricing-card">
                    <div class="badge">PREMIUM</div>
                    <div class="plan-name">Premium</div>
                    <div class="plan-price">₹74,999</div>
                    <div class="delivery">Delivered in 20 Days</div>
                    <ul class="features">
                        <li>Fully custom design</li>
                        <li>Unlimited products</li>
                        <li>Advanced CRO</li>
                        <li>Complete marketing setup</li>
                        <li>WhatsApp automation</li>
                        <li>Dedicated manager</li>
                        <li>90 days VIP support</li>
                        <li><strong>₹35,000 Bonus Package</strong></li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Premium - ₹74,999')">Go Premium</button>
                </div>
            </div>

            <div class="guarantee-box">
                <h3>30-Day Money-Back Guarantee</h3>
                <p>If you're not 100% satisfied with your store within 30 days, we'll refund every rupee. No questions asked.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta" id="contact">
        <div class="container">
            <h2>Ready to Launch Your Profitable Store?</h2>
            <p>Join 500+ successful entrepreneurs who trusted us with their business</p>

            <div class="countdown">
                <h3>Offer Ends In:</h3>
                <div class="timer">
                    <div class="time-block">
                        <div class="time-number" id="hours">23</div>
                        <div class="time-label">Hours</div>
                    </div>
                    <div class="time-block">
                        <div class="time-number" id="minutes">59</div>
                        <div class="time-label">Minutes</div>
                    </div>
                    <div class="time-block">
                        <div class="time-number" id="seconds">59</div>
                        <div class="time-label">Seconds</div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3>Get Your Free Consultation</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Phone (WhatsApp) *</label>
                        <input type="tel" required>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" required>
                    </div>
                    <div class="form-group">
                        <label>Interested Plan</label>
                        <select>
                            <option>Starter - ₹9,999</option>
                            <option>Growth - ₹34,999 (Most Popular)</option>
                            <option>Premium - ₹74,999</option>
                            <option>Not Sure - Need Consultation</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%; padding:20px;">Get Started Now →</button>
                </form>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float -->
    <div class="whatsapp-float">
        <a href="https://wa.me/917275013628?text=Hi! I'm interested in building my Shopify store" target="_blank">
            <svg viewBox="0 0 32 32" width="32" height="32" fill="white">
                <path d="M16 0C7.164 0 0 7.164 0 16c0 2.828.736 5.484 2.016 7.792L0 32l8.384-2.208A15.905 15.905 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.096 22.708c-.36.996-2.124 1.884-2.916 1.992-.78.096-1.512.348-5.124-.996-4.608-1.716-7.572-6.408-7.8-6.708-.228-.3-1.86-2.472-1.86-4.716s1.176-3.348 1.596-3.804c.42-.456.924-.564 1.236-.564.312 0 .624.012.888.012.288 0 .672-.108.996.756.36.876 1.176 2.892 1.284 3.096.108.204.18.444.048.72-.132.276-.204.444-.408.672-.204.228-.42.504-.6.684-.204.192-.408.396-.18.78.228.384 1.02 1.68 2.196 2.724 1.512 1.332 2.784 1.752 3.18 1.956.396.204.624.168.852-.108.228-.276.972-1.128 1.236-1.512.264-.384.528-.324.888-.192.36.132 2.28 1.068 2.676 1.272.396.204.66.3.756.456.096.156.096.912-.264 1.908z"/>
            </svg>
        </a>
    </div>

    <script>
        // Countdown
        setInterval(() => {
            const now = new Date();
            const end = new Date();
            end.setHours(23,59,59,999);
            if (now > end) end.setDate(end.getDate() + 1);
            
            const diff = end - now;
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }, 1000);

        function selectPlan(plan) {
            document.querySelector('select').value = plan;
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>