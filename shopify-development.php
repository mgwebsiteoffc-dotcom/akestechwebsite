<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build a Profitable Shopify Store in 7 Days | ₹9,999 Only</title>
    <meta name="description" content="Launch your profitable Shopify store in just 7 days. Proven system that generated ₹50Cr+ in sales. Starting at ₹9,999. 30-day money-back guarantee.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --dark: #111827;
            --gray: #6b7280;
            --light: #f9fafb;
            --white: #ffffff;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Announcement Bar */
        .announcement-bar {
            background: linear-gradient(90deg, #ef4444 0%, #dc2626 100%);
            color: white;
            text-align: center;
            padding: 12px 20px;
            font-weight: 600;
            font-size: 14px;
            position: sticky;
            top: 0;
            z-index: 9999;
        }

        .announcement-bar span {
            color: #fde047;
            font-weight: 700;
        }

        /* Sticky Header */
        .sticky-header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: sticky;
            top: 44px;
            z-index: 9998;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
        }

        .header-cta {
            background: var(--primary);
            color: white;
            padding: 12px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 15px;
        }

        .header-cta:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 20px 100px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 50px;
            margin-bottom: 25px;
            font-size: 14px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .hero h1 {
            font-size: 56px;
            line-height: 1.2;
            margin-bottom: 25px;
            font-weight: 800;
        }

        .hero h1 .highlight {
            color: #fde047;
            position: relative;
        }

        .hero-subheadline {
            font-size: 24px;
            margin-bottom: 35px;
            opacity: 0.95;
            font-weight: 400;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .hero-stat {
            text-align: center;
        }

        .hero-stat-number {
            font-size: 32px;
            font-weight: 800;
            color: #fde047;
        }

        .hero-stat-label {
            font-size: 14px;
            opacity: 0.9;
        }

        .hero-cta-container {
            display: flex;
            gap: 15px;
            justify-content: center;
            align-items: center;
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
            text-align: center;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
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

        .hero-trust {
            font-size: 14px;
            opacity: 0.9;
        }

        .hero-trust strong {
            color: #fde047;
        }

        /* Trust Bar */
        .trust-bar {
            background: white;
            padding: 40px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.05);
        }

        .trust-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .trust-logo {
            font-size: 14px;
            color: var(--gray);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .trust-metrics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .trust-metric {
            text-align: center;
        }

        .trust-metric-number {
            font-size: 36px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .trust-metric-label {
            color: var(--gray);
            font-size: 15px;
        }

        /* Social Proof Section */
        .social-proof {
            background: var(--light);
            padding: 80px 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-pretitle {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .section-subtitle {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Case Studies */
        .case-studies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .case-study-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }

        .case-study-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .case-study-image {
            width: 100%;
            height: 220px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        .case-study-content {
            padding: 30px;
        }

        .case-study-category {
            color: var(--primary);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .case-study-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .case-study-results {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin: 20px 0;
            padding: 20px 0;
            border-top: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
        }

        .case-study-metric {
            text-align: center;
        }

        .case-study-metric-value {
            font-size: 24px;
            font-weight: 800;
            color: var(--success);
        }

        .case-study-metric-label {
            font-size: 12px;
            color: var(--gray);
        }

        .case-study-quote {
            font-style: italic;
            color: var(--gray);
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .case-study-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .case-study-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .case-study-author-info h4 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .case-study-author-info p {
            font-size: 12px;
            color: var(--gray);
        }

        /* Problem-Solution Section */
        .problem-solution {
            background: white;
            padding: 80px 20px;
        }

        .problem-solution-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-top: 50px;
        }

        .problem-side, .solution-side {
            padding: 40px;
            border-radius: 12px;
        }

        .problem-side {
            background: #fef2f2;
            border-left: 4px solid var(--danger);
        }

        .solution-side {
            background: #f0fdf4;
            border-left: 4px solid var(--success);
        }

        .side-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 25px;
        }

        .problem-side .side-title {
            color: var(--danger);
        }

        .solution-side .side-title {
            color: var(--success);
        }

        .problem-list, .solution-list {
            list-style: none;
        }

        .problem-list li, .solution-list li {
            padding: 15px 0;
            padding-left: 35px;
            position: relative;
            font-size: 16px;
            line-height: 1.6;
        }

        .problem-list li::before {
            content: "❌";
            position: absolute;
            left: 0;
            font-size: 18px;
        }

        .solution-list li::before {
            content: "✅";
            position: absolute;
            left: 0;
            font-size: 18px;
        }

        /* Process Section */
        .process {
            background: var(--dark);
            color: white;
            padding: 80px 20px;
        }

        .process-timeline {
            max-width: 900px;
            margin: 60px auto 0;
            position: relative;
        }

        .process-timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary);
        }

        .process-step {
            display: flex;
            gap: 30px;
            margin-bottom: 50px;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            flex-shrink: 0;
            z-index: 1;
        }

        .step-content {
            flex: 1;
            padding-top: 5px;
        }

        .step-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .step-description {
            color: #d1d5db;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .step-duration {
            display: inline-block;
            background: rgba(99, 102, 241, 0.2);
            color: #a5b4fc;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .step-deliverables {
            list-style: none;
            margin-top: 15px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .step-deliverables li {
            font-size: 14px;
            color: #d1d5db;
            padding-left: 20px;
            position: relative;
        }

        .step-deliverables li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        /* Pricing Section */
        .pricing {
            background: var(--light);
            padding: 80px 20px;
        }

        .pricing-toggle {
            text-align: center;
            margin-bottom: 50px;
        }

        .pricing-note {
            background: #fef3c7;
            border-left: 4px solid var(--warning);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .pricing-note strong {
            color: #92400e;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .pricing-card {
            background: white;
            border-radius: 16px;
            padding: 40px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .pricing-card.featured {
            border-color: var(--primary);
            box-shadow: 0 8px 40px rgba(99, 102, 241, 0.3);
        }

        .pricing-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .plan-name {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .plan-description {
            color: var(--gray);
            font-size: 15px;
            margin-bottom: 25px;
            min-height: 45px;
        }

        .plan-price {
            margin-bottom: 25px;
        }

        .price-amount {
            font-size: 48px;
            font-weight: 800;
            color: var(--dark);
        }

        .price-currency {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray);
            vertical-align: super;
        }

        .price-original {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 20px;
            margin-left: 10px;
        }

        .price-note {
            color: var(--gray);
            font-size: 14px;
            margin-top: 5px;
        }

        .plan-delivery {
            background: #f0fdf4;
            color: var(--success);
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 25px;
            text-align: center;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            padding: 12px 0;
            padding-left: 30px;
            position: relative;
            font-size: 15px;
            color: var(--dark);
            border-bottom: 1px solid #f3f4f6;
        }

        .plan-features li:last-child {
            border-bottom: none;
        }

        .plan-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: 800;
            font-size: 18px;
        }

        .plan-cta {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 16px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .plan-cta:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .pricing-card.featured .plan-cta {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .plan-guarantee {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: var(--gray);
        }

        /* Guarantee Section */
        .guarantee {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
            margin-top: 50px;
            border-radius: 16px;
        }

        .guarantee-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }

        .guarantee h3 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .guarantee p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Testimonials */
        .testimonials {
            background: white;
            padding: 80px 20px;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .testimonial-card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }

        .testimonial-rating {
            color: #fbbf24;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .testimonial-text {
            font-size: 16px;
            line-height: 1.7;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
        }

        .testimonial-author-info h4 {
            font-weight: 700;
            margin-bottom: 3px;
        }

        .testimonial-author-info p {
            font-size: 14px;
            color: var(--gray);
        }

        .testimonial-verified {
            background: #f0fdf4;
            color: var(--success);
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 15px;
            display: inline-block;
        }

        /* FAQ Section */
        .faq {
            background: var(--light);
            padding: 80px 20px;
        }

        .faq-container {
            max-width: 800px;
            margin: 50px auto 0;
        }

        .faq-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            width: 100%;
            padding: 25px;
            background: none;
            border: none;
            text-align: left;
            font-size: 18px;
            font-weight: 700;
            color: var(--dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s;
        }

        .faq-question:hover {
            color: var(--primary);
        }

        .faq-icon {
            font-size: 24px;
            transition: transform 0.3s;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer-content {
            padding: 0 25px 25px;
            color: var(--gray);
            line-height: 1.7;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        /* CTA Section */
        .final-cta {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
        }

        .final-cta h2 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .final-cta p {
            font-size: 22px;
            margin-bottom: 40px;
            opacity: 0.95;
        }

        .cta-benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            max-width: 900px;
            margin: 40px auto;
        }

        .cta-benefit {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        .cta-benefit-icon {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .cta-benefit-text {
            font-size: 15px;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            padding: 50px 40px;
            border-radius: 16px;
            max-width: 600px;
            margin: 50px auto 0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .contact-form h3 {
            color: var(--dark);
            margin-bottom: 15px;
            font-size: 28px;
            font-weight: 800;
        }

        .contact-form .form-subtitle {
            color: var(--gray);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-submit {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 18px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .form-submit:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .form-trust {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: var(--gray);
        }

        .form-success {
            background: #f0fdf4;
            color: var(--success);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
            font-weight: 600;
        }

        .form-success.active {
            display: block;
        }

        /* Urgency Timer */
        .urgency-timer {
            background: #fef2f2;
            border: 2px solid var(--danger);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
        }

        .urgency-timer h4 {
            color: var(--danger);
            margin-bottom: 15px;
            font-size: 18px;
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .timer-block {
            text-align: center;
        }

        .timer-value {
            font-size: 36px;
            font-weight: 800;
            color: var(--danger);
        }

        .timer-label {
            font-size: 12px;
            color: var(--gray);
            text-transform: uppercase;
        }

        /* WhatsApp Float */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
        }

        .whatsapp-float a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            transition: transform 0.3s;
            animation: pulse 2s infinite;
        }

        .whatsapp-float a:hover {
            transform: scale(1.1);
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 20px 30px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #374151;
            color: #9ca3af;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero-subheadline {
                font-size: 18px;
            }

            .section-title {
                font-size: 32px;
            }

            .problem-solution-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .pricing-grid {
                grid-template-columns: 1fr;
            }

            .process-timeline::before {
                left: 20px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .step-deliverables {
                grid-template-columns: 1fr;
            }

            .contact-form {
                padding: 30px 20px;
            }

            .hero-stats {
                gap: 20px;
            }

            .timer {
                gap: 10px;
            }

            .timer-value {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Announcement Bar -->
    <div class="announcement-bar">
        🔥 <span>LIMITED OFFER:</span> Get 10% OFF + FREE Marketing Setup (Worth ₹25,000) - Expires in <span id="announcement-timer">23:59:45</span>
    </div>

    <!-- Sticky Header -->
    <header class="sticky-header">
        <div class="header-content">
            <div class="logo">🛍️ ShopifyPro</div>
            <a href="#contact" class="header-cta">Start Your Store →</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge">✓ Trusted by 500+ Successful Store Owners</div>
            <h1>Launch Your <span class="highlight">Profitable Shopify Store</span> in Just 7 Days</h1>
            <p class="hero-subheadline">The proven system that generated ₹50+ Crores in sales for our clients. No templates. No guesswork. Just results.</p>
            
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-number">500+</div>
                    <div class="hero-stat-label">Stores Launched</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-number">₹50Cr+</div>
                    <div class="hero-stat-label">Revenue Generated</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-number">98%</div>
                    <div class="hero-stat-label">Client Satisfaction</div>
                </div>
            </div>

            <div class="hero-cta-container">
                <a href="#contact" class="btn btn-primary">Get Started at ₹9,999 →</a>
                <a href="#case-studies" class="btn btn-secondary">See Success Stories</a>
            </div>

            <div class="hero-trust">
                ⚡ <strong>7-Day Delivery</strong> • 💰 <strong>30-Day Money-Back Guarantee</strong> • 🏆 <strong>500+ Happy Clients</strong>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-logos">
                <div class="trust-logo">⭐ Shopify Partner</div>
                <div class="trust-logo">🔒 SSL Secured</div>
                <div class="trust-logo">✓ 100% Satisfaction</div>
                <div class="trust-logo">🏆 Award Winning</div>
            </div>
            
            <div class="trust-metrics">
                <div class="trust-metric">
                    <div class="trust-metric-number">₹50Cr+</div>
                    <div class="trust-metric-label">Sales Generated for Clients</div>
                </div>
                <div class="trust-metric">
                    <div class="trust-metric-number">7 Days</div>
                    <div class="trust-metric-label">Average Store Delivery</div>
                </div>
                <div class="trust-metric">
                    <div class="trust-metric-number">3.8x</div>
                    <div class="trust-metric-label">Average Conversion Increase</div>
                </div>
                <div class="trust-metric">
                    <div class="trust-metric-number">24/7</div>
                    <div class="trust-metric-label">Priority Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="social-proof" id="case-studies">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle">Real Results from Real Clients</div>
                <h2 class="section-title">Success Stories That Speak Louder Than Words</h2>
                <p class="section-subtitle">See how we helped these brands go from zero to 6-figures in revenue</p>
            </div>

            <div class="case-studies-grid">
                <div class="case-study-card">
                    <div class="case-study-image">Fashion & Apparel Store</div>
                    <div class="case-study-content">
                        <div class="case-study-category">Fashion E-commerce</div>
                        <h3 class="case-study-title">From ₹0 to ₹42L in 90 Days</h3>
                        
                        <div class="case-study-results">
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹42L</div>
                                <div class="case-study-metric-label">Revenue</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">4.2%</div>
                                <div class="case-study-metric-label">Conv. Rate</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹2,850</div>
                                <div class="case-study-metric-label">AOV</div>
                            </div>
                        </div>
                        
                        <p class="case-study-quote">"The store they built converted 3x better than our old website. The design is clean, fast, and most importantly - it sells!"</p>
                        
                        <div class="case-study-author">
                            <div class="case-study-avatar">P</div>
                            <div class="case-study-author-info">
                                <h4>Priya Sharma</h4>
                                <p>Founder, StyleHub Fashion</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-study-card">
                    <div class="case-study-image">Home Decor & Lifestyle</div>
                    <div class="case-study-content">
                        <div class="case-study-category">Home & Living</div>
                        <h3 class="case-study-title">Scaled to ₹1.2Cr Annual Revenue</h3>
                        
                        <div class="case-study-results">
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹1.2Cr</div>
                                <div class="case-study-metric-label">Yearly</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">5.1%</div>
                                <div class="case-study-metric-label">Conv. Rate</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹3,200</div>
                                <div class="case-study-metric-label">AOV</div>
                            </div>
                        </div>
                        
                        <p class="case-study-quote">"Best investment we made! The store handles 500+ orders/month smoothly. Customer support is outstanding."</p>
                        
                        <div class="case-study-author">
                            <div class="case-study-avatar">R</div>
                            <div class="case-study-author-info">
                                <h4>Rajesh Kumar</h4>
                                <p>Owner, HomeCraft India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-study-card">
                    <div class="case-study-image">Beauty & Cosmetics</div>
                    <div class="case-study-content">
                        <div class="case-study-category">Beauty & Personal Care</div>
                        <h3 class="case-study-title">₹18L Revenue in First 60 Days</h3>
                        
                        <div class="case-study-results">
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹18L</div>
                                <div class="case-study-metric-label">2 Months</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">3.8%</div>
                                <div class="case-study-metric-label">Conv. Rate</div>
                            </div>
                            <div class="case-study-metric">
                                <div class="case-study-metric-value">₹1,850</div>
                                <div class="case-study-metric-label">AOV</div>
                            </div>
                        </div>
                        
                        <p class="case-study-quote">"Professional, fast, and result-oriented. They understood our brand vision perfectly and delivered beyond expectations!"</p>
                        
                        <div class="case-study-author">
                            <div class="case-study-avatar">N</div>
                            <div class="case-study-author-info">
                                <h4>Neha Patel</h4>
                                <p>Founder, GlowBeauty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Solution Section -->
    <section class="problem-solution">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle">Why Choose Us</div>
                <h2 class="section-title">We Fix What Others Break</h2>
            </div>

            <div class="problem-solution-grid">
                <div class="problem-side">
                    <h3 class="side-title">❌ What You're Struggling With</h3>
                    <ul class="problem-list">
                        <li><strong>Low Conversion Rates:</strong> Beautiful store but no sales coming in</li>
                        <li><strong>Slow Loading Speed:</strong> Customers leaving before pages even load</li>
                        <li><strong>Poor Mobile Experience:</strong> 80% traffic from mobile, 0% conversions</li>
                        <li><strong>No Clear Customer Journey:</strong> Visitors confused, cart abandonment sky-high</li>
                        <li><strong>Unprofessional Design:</strong> Looks like every other template store</li>
                        <li><strong>No Marketing Integration:</strong> Can't run ads effectively</li>
                        <li><strong>Zero Upsell Strategy:</strong> Leaving 40% revenue on the table</li>
                    </ul>
                </div>

                <div class="solution-side">
                    <h3 class="side-title">✅ How We Solve It</h3>
                    <ul class="solution-list">
                        <li><strong>Conversion-Optimized Design:</strong> Every element positioned for maximum sales</li>
                        <li><strong>Lightning Fast Performance:</strong> Optimized for Google Core Web Vitals</li>
                        <li><strong>Mobile-First Approach:</strong> Perfect experience on every device</li>
                        <li><strong>Strategic Sales Funnels:</strong> Guide customers from browse to buy</li>
                        <li><strong>Custom Brand Identity:</strong> Stand out from competition</li>
                        <li><strong>Ads-Ready Infrastructure:</strong> Built for Facebook/Google campaigns</li>
                        <li><strong>Built-in Upsell System:</strong> Maximize every order value</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle" style="color: #a5b4fc;">Our Proven Process</div>
                <h2 class="section-title" style="color: white;">From Concept to Launch in 4 Simple Steps</h2>
                <p class="section-subtitle" style="color: #d1d5db;">Transparent, efficient, and designed for your success</p>
            </div>

            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Discovery & Strategy</h3>
                        <span class="step-duration">Day 1-2</span>
                        <p class="step-description">We deep-dive into your business, target audience, competitors, and goals. We create a custom strategy tailored to YOUR specific needs - not a one-size-fits-all template.</p>
                        <ul class="step-deliverables">
                            <li>Brand analysis & positioning</li>
                            <li>Competitor research</li>
                            <li>Target audience profiling</li>
                            <li>Conversion strategy document</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Design & Development</h3>
                        <span class="step-duration">Day 3-5</span>
                        <p class="step-description">Our team builds your store with conversion in mind. Every section, every button, every word is strategically placed to maximize sales. You get regular updates and unlimited revisions.</p>
                        <ul class="step-deliverables">
                            <li>Custom homepage design</li>
                            <li>Product page optimization</li>
                            <li>Mobile responsiveness</li>
                            <li>Speed optimization</li>
                            <li>Trust elements integration</li>
                            <li>Payment & shipping setup</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Testing & Optimization</h3>
                        <span class="step-duration">Day 6</span>
                        <p class="step-description">Before launch, we rigorously test every aspect - from checkout flow to mobile experience. We ensure everything works flawlessly and converts optimally.</p>
                        <ul class="step-deliverables">
                            <li>Complete functionality testing</li>
                            <li>Mobile & desktop testing</li>
                            <li>Speed & performance check</li>
                            <li>Checkout flow optimization</li>
                            <li>Browser compatibility</li>
                            <li>Final revisions</li>
                        </ul>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Launch & Scale</h3>
                        <span class="step-duration">Day 7+</span>
                        <p class="step-description">Your store goes live! We provide complete training, documentation, and ongoing support. Plus, we help you set up marketing campaigns to drive your first sales.</p>
                        <ul class="step-deliverables">
                            <li>Store launch & handover</li>
                            <li>Admin training session</li>
                            <li>Complete documentation</li>
                            <li>Marketing setup (Premium plans)</li>
                            <li>30-day support included</li>
                            <li>Growth consultation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle">Simple, Transparent Pricing</div>
                <h2 class="section-title">Choose Your Growth Path</h2>
                <p class="section-subtitle">All plans include mobile-responsive design, payment setup, and dedicated support</p>
            </div>

            <div class="pricing-note">
                <strong>💰 Limited Time Offer:</strong> Book today and get <strong>10% OFF</strong> + FREE Marketing Setup worth ₹25,000 on Advanced & Premium plans!
            </div>

            <div class="pricing-grid">
                <!-- Starter Plan -->
                <div class="pricing-card">
                    <div class="plan-name">Starter</div>
                    <p class="plan-description">Perfect for testing the waters and quick launches</p>
                    <div class="plan-price">
                        <span class="price-currency">₹</span><span class="price-amount">9,999</span>
                        <p class="price-note">One-time payment</p>
                    </div>
                    <div class="plan-delivery">⚡ Delivered in 7 Days</div>
                    <ul class="plan-features">
                        <li>Professional theme setup</li>
                        <li>Up to 10 products upload</li>
                        <li>Mobile-responsive design</li>
                        <li>Payment gateway integration</li>
                        <li>Shipping setup</li>
                        <li>Basic SEO setup</li>
                        <li>7 days support</li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Starter Plan - ₹9,999')">Get Started →</button>
                    <p class="plan-guarantee">🔒 30-Day Money-Back Guarantee</p>
                </div>

                <!-- Growth Plan -->
                <div class="pricing-card">
                    <div class="plan-name">Growth</div>
                    <p class="plan-description">Ideal for serious sellers ready to scale</p>
                    <div class="plan-price">
                        <span class="price-currency">₹</span><span class="price-amount">19,999</span>
                        <p class="price-note">One-time payment</p>
                    </div>
                    <div class="plan-delivery">⚡ Delivered in 10 Days</div>
                    <ul class="plan-features">
                        <li>Everything in Starter, plus:</li>
                        <li>Up to 25 products upload</li>
                        <li>Custom homepage design</li>
                        <li>Product page optimization</li>
                        <li>Trust badges & reviews setup</li>
                        <li>Email marketing integration</li>
                        <li>Social media integration</li>
                        <li>15 days priority support</li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Growth Plan - ₹19,999')">Choose Growth →</button>
                    <p class="plan-guarantee">🔒 30-Day Money-Back Guarantee</p>
                </div>

                <!-- Scale Plan (Most Popular) -->
                <div class="pricing-card featured">
                    <div class="pricing-badge">⭐ Most Popular</div>
                    <div class="plan-name">Scale</div>
                    <p class="plan-description">For brands serious about 6-figure revenue</p>
                    <div class="plan-price">
                        <span class="price-currency">₹</span><span class="price-amount">34,999</span>
                        <span class="price-original">₹44,999</span>
                        <p class="price-note">One-time payment • Save ₹10,000</p>
                    </div>
                    <div class="plan-delivery">⚡ Delivered in 12 Days</div>
                    <ul class="plan-features">
                        <li>Everything in Growth, plus:</li>
                        <li>Up to 50 products upload</li>
                        <li>Advanced conversion optimization</li>
                        <li>Upsell & cross-sell setup</li>
                        <li>Cart abandonment recovery</li>
                        <li>Newsletter popup setup</li>
                        <li>Speed optimization</li>
                        <li>Advanced analytics setup</li>
                        <li>30 days VIP support</li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Scale Plan - ₹34,999')">Start Scaling →</button>
                    <p class="plan-guarantee">🔒 30-Day Money-Back Guarantee</p>
                </div>

                <!-- Premium Plan -->
                <div class="pricing-card">
                    <div class="pricing-badge" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">💎 Premium</div>
                    <div class="plan-name">Premium</div>
                    <p class="plan-description">Complete solution for enterprise-level brands</p>
                    <div class="plan-price">
                        <span class="price-currency">₹</span><span class="price-amount">74,999</span>
                        <p class="price-note">Best value for serious businesses</p>
                    </div>
                    <div class="plan-delivery">⚡ Delivered in 20 Days</div>
                    <ul class="plan-features">
                        <li>Everything in Scale, plus:</li>
                        <li>Unlimited products upload</li>
                        <li>Fully custom store design</li>
                        <li>Advanced sales funnel setup</li>
                        <li>Multi-channel integration</li>
                        <li>WhatsApp automation</li>
                        <li>Meta/Google Ads setup</li>
                        <li>Dedicated account manager</li>
                        <li>90 days premium support</li>
                        <li><strong>BONUS: ₹25,000 marketing credit</strong></li>
                    </ul>
                    <button class="plan-cta" onclick="selectPlan('Premium Plan - ₹74,999')">Go Premium →</button>
                    <p class="plan-guarantee">🔒 30-Day Money-Back Guarantee</p>
                </div>
            </div>

            <!-- Guarantee Section -->
            <div class="guarantee">
                <div class="guarantee-icon">🛡️</div>
                <h3>30-Day Money-Back Guarantee</h3>
                <p>We're so confident in our work that if you're not 100% satisfied within 30 days, we'll refund every single rupee. No questions asked. That's how much we believe in delivering results.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle">Client Love</div>
                <h2 class="section-title">What Our Clients Say About Us</h2>
                <p class="section-subtitle">Real reviews from real business owners who scaled with us</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Hands down the best Shopify developers I've worked with. They didn't just build a store - they built a money-making machine. Revenue increased by 320% in just 3 months!"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">A</div>
                        <div class="testimonial-author-info">
                            <h4>Amit Verma</h4>
                            <p>Electronics Store Owner</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Professional, responsive, and results-driven. They completed my store in 6 days (promised 7) and the conversion rate is 4.5% - industry average is 1-2%! Worth every rupee."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">S</div>
                        <div class="testimonial-author-info">
                            <h4>Sneha Reddy</h4>
                            <p>Fashion Brand Owner</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"I was skeptical about the 7-day delivery promise, but they over-delivered! The store is beautiful, fast, and most importantly - it sells. Already made ₹8L in the first month."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">K</div>
                        <div class="testimonial-author-info">
                            <h4>Karan Singh</h4>
                            <p>Home Decor Brand</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Best decision for my business! They set up everything including payment gateways, shipping, and even helped with Meta ads. Customer support is exceptional - always there when needed."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">M</div>
                        <div class="testimonial-author-info">
                            <h4>Meera Joshi</h4>
                            <p>Jewelry Store Owner</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Finally found developers who understand e-commerce! The upsell features they implemented increased my average order value by 65%. ROI was positive within 2 weeks."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">V</div>
                        <div class="testimonial-author-info">
                            <h4>Vikram Patel</h4>
                            <p>Fitness Supplements Brand</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Premium plan was totally worth it! The dedicated account manager, marketing setup, and ongoing support helped me scale from ₹2L to ₹25L monthly revenue in 4 months."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">D</div>
                        <div class="testimonial-author-info">
                            <h4>Divya Sharma</h4>
                            <p>Beauty & Cosmetics Brand</p>
                        </div>
                    </div>
                    <span class="testimonial-verified">✓ Verified Client</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-header">
                <div class="section-pretitle">Got Questions?</div>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Everything you need to know before getting started</p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How quickly can you launch my store?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Our standard delivery is 7-12 days depending on your plan. For urgent requirements, we offer express delivery (3-5 days) at an additional cost. We've never missed a deadline in 500+ projects.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Do I need technical knowledge to manage my store?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Not at all! We build user-friendly stores and provide complete training. You'll be able to add products, manage orders, and update content without any coding knowledge. Plus, we're always here to help.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>What if I don't like the design?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            All our plans include unlimited revisions during the development phase. We work closely with you to ensure the final design matches your vision. Plus, we offer a 30-day money-back guarantee for complete peace of mind.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Will my store work on mobile devices?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Absolutely! All our stores are mobile-first, meaning they're designed and optimized for mobile devices first, then adapted for desktop. Since 80% of shoppers browse on mobile, this is crucial for conversions.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>What's included in ongoing support?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Support duration varies by plan (7-90 days). It includes bug fixes, technical assistance, content updates, and general guidance. After the included period, you can opt for our monthly maintenance plans starting at ₹2,999/month.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Do you help with marketing and driving traffic?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! Our Advanced and Premium plans include marketing setup (Meta/Google Ads, email marketing, WhatsApp automation). We also offer separate digital marketing services to drive qualified traffic to your store.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>What payment methods will my store accept?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We integrate all major Indian payment gateways including Razorpay, Instamojo, PayU, and Shopify Payments. Your customers can pay via UPI, cards, net banking, and wallets. We handle the complete setup.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Is the 30-day money-back guarantee really "no questions asked"?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! If you're not satisfied within 30 days of delivery, we'll refund 100% of your money. We've only had to do this twice in 500+ projects because we're obsessed with client satisfaction.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta" id="contact">
        <div class="container">
            <h2>Ready to Launch Your Profitable Store?</h2>
            <p>Join 500+ successful store owners who trusted us with their business</p>

            <div class="cta-benefits">
                <div class="cta-benefit">
                    <div class="cta-benefit-icon">⚡</div>
                    <div class="cta-benefit-text">7-Day Launch</div>
                </div>
                <div class="cta-benefit">
                    <div class="cta-benefit-icon">💰</div>
                    <div class="cta-benefit-text">30-Day Guarantee</div>
                </div>
                <div class="cta-benefit">
                    <div class="cta-benefit-icon">📈</div>
                    <div class="cta-benefit-text">Proven Results</div>
                </div>
                <div class="cta-benefit">
                    <div class="cta-benefit-icon">🏆</div>
                    <div class="cta-benefit-text">Expert Support</div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <!-- Urgency Timer -->
                <div class="urgency-timer">
                    <h4>🔥 Limited Time Offer Expires In:</h4>
                    <div class="timer">
                        <div class="timer-block">
                            <div class="timer-value" id="hours">23</div>
                            <div class="timer-label">Hours</div>
                        </div>
                        <div class="timer-block">
                            <div class="timer-value" id="minutes">59</div>
                            <div class="timer-label">Minutes</div>
                        </div>
                        <div class="timer-block">
                            <div class="timer-value" id="seconds">45</div>
                            <div class="timer-label">Seconds</div>
                        </div>
                    </div>
                </div>

                <div class="form-success" id="formSuccess">
                    ✅ Thank you! We'll contact you within 2 hours with a custom proposal.
                </div>

                <h3>Get Your Free Consultation</h3>
                <p class="form-subtitle">Fill out the form below and we'll get back to you within 2 hours with a custom plan</p>

                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number (WhatsApp) *</label>
                        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="10-digit mobile number">
                    </div>

                    <div class="form-group">
                        <label for="plan">Which Plan Interests You? *</label>
                        <select id="plan" name="plan" required>
                            <option value="">-- Select a plan --</option>
                            <option value="Starter Plan - ₹9,999">Starter Plan - ₹9,999</option>
                            <option value="Growth Plan - ₹19,999">Growth Plan - ₹19,999</option>
                            <option value="Scale Plan - ₹34,999">Scale Plan - ₹34,999 (Most Popular)</option>
                            <option value="Premium Plan - ₹74,999">Premium Plan - ₹74,999</option>
                            <option value="Not Sure - Need Consultation">Not Sure - Need Consultation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="business">Tell us about your business (Optional)</label>
                        <textarea id="business" name="business" rows="3" placeholder="What products will you sell? Do you have an existing website? Any specific requirements?"></textarea>
                    </div>

                    <button type="submit" class="form-submit">Get Free Consultation →</button>

                    <p class="form-trust">🔒 100% secure. Your information is safe with us. We hate spam too!</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>🛍️ ShopifyPro</h4>
                <p style="color: #9ca3af; margin-top: 10px;">Building profitable Shopify stores that actually sell, not just look good.</p>
            </div>

            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#case-studies">Success Stories</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Get Started</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="https://wa.me/917275013628" target="_blank">WhatsApp: +91 7275013628</a></li>
                    <li><a href="mailto:hello@shopifypro.com">Email: hello@shopifypro.com</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Trust Badges</h4>
                <ul>
                    <li>⭐ Shopify Partner</li>
                    <li>🏆 500+ Stores Built</li>
                    <li>💰 ₹50Cr+ Revenue Generated</li>
                    <li>🛡️ 30-Day Guarantee</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 ShopifyPro. All rights reserved.</p>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/917275013628?text=Hi,%20I%27m%20interested%20in%20building%20a%20Shopify%20store" target="_blank" aria-label="Contact us on WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path fill="white" d="M16 0C7.164 0 0 7.164 0 16c0 2.828.736 5.484 2.016 7.792L0 32l8.384-2.208A15.905 15.905 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.096 22.708c-.36.996-2.124 1.884-2.916 1.992-.78.096-1.512.348-5.124-.996-4.608-1.716-7.572-6.408-7.8-6.708-.228-.3-1.86-2.472-1.86-4.716s1.176-3.348 1.596-3.804c.42-.456.924-.564 1.236-.564.312 0 .624.012.888.012.288 0 .672-.108.996.756.36.876 1.176 2.892 1.284 3.096.108.204.18.444.048.72-.132.276-.204.444-.408.672-.204.228-.42.504-.6.684-.204.192-.408.396-.18.78.228.384 1.02 1.68 2.196 2.724 1.512 1.332 2.784 1.752 3.18 1.956.396.204.624.168.852-.108.228-.276.972-1.128 1.236-1.512.264-.384.528-.324.888-.192.36.132 2.28 1.068 2.676 1.272.396.204.66.3.756.456.096.156.096.912-.264 1.908z"/>
            </svg>
        </a>
    </div>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Countdown Timer
        function startCountdown() {
            const countdownTime = 24 * 60 * 60; // 24 hours in seconds
            let timeLeft = countdownTime;

            const timer = setInterval(() => {
                const hours = Math.floor(timeLeft / 3600);
                const minutes = Math.floor((timeLeft % 3600) / 60);
                const seconds = timeLeft % 60;

                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');

                // Update announcement timer
                document.getElementById('announcement-timer').textContent = 
                    `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

                timeLeft--;

                if (timeLeft < 0) {
                    timeLeft = countdownTime; // Reset timer
                }
            }, 1000);
        }

        startCountdown();

        // Select Plan Function
        function selectPlan(planName) {
            document.getElementById('plan').value = planName;
            document.getElementById('contactForm').scrollIntoView({ behavior: 'smooth' });
            
            // Highlight the form
            const form = document.querySelector('.contact-form');
            form.style.animation = 'pulse 0.5s ease';
            setTimeout(() => {
                form.style.animation = '';
            }, 500);
        }

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                plan: document.getElementById('plan').value,
                business: document.getElementById('business').value,
                timestamp: new Date().toISOString(),
                source: 'Landing Page CRO Version'
            };

            try {
                // You can replace this with your actual backend endpoint
                const response = await fetch('save-enquiry.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData)
                });

                // Show success message
                document.getElementById('formSuccess').classList.add('active');
                document.getElementById('contactForm').reset();

                // Redirect to WhatsApp after 2 seconds
                setTimeout(() => {
                    const message = `Hi! I just filled the consultation form for ${formData.plan}. My name is ${formData.name}.`;
                    window.open(`https://wa.me/917275013628?text=${encodeURIComponent(message)}`, '_blank');
                }, 2000);

                // Hide success message after 10 seconds
                setTimeout(() => {
                    document.getElementById('formSuccess').classList.remove('active');
                }, 10000);

            } catch (error) {
                console.error('Error:', error);
                alert('Something went wrong. Please contact us directly on WhatsApp: +91 7275013628');
            }
        });

        // Smooth Scroll
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

        // Scroll Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.case-study-card, .pricing-card, .testimonial-card, .process-step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>