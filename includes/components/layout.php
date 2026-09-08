<?php
/**
 * Main Layout Wrapper — AKESTECH design system
 *
 * Contract with every page is UNCHANGED:
 *   - pages set $pageContent, $pageTitle, $metaDescription, $schemas
 *   - SEO::renderMeta() and all JSON-LD blocks are still emitted
 *   - every route/slug stays exactly the same
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f5f5f2">

    <?= SEO::renderMeta() ?>

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CDN: kept as a safety net for legacy page markup -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] } } }
        }
    </script>

    <!-- AKESTECH design system (loaded after Tailwind so it always wins) -->
    <link rel="stylesheet" href="<?= asset('css/akestech.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">

    <!-- Structured data: Organization (always) -->
    <script type="application/ld+json"><?= SEO::organizationSchema() ?></script>

    <!-- Structured data: page level -->
    <?php if (!empty($schemas)): ?>
        <?php foreach ($schemas as $schema): ?>
            <?php if (!empty($schema)): ?>
            <script type="application/ld+json"><?= $schema ?></script>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <link rel="icon" type="image/png" href="<?= asset('images/akestech-transparent-logo.png') ?>">

    <meta name="google-site-verification" content="_TWkROr8bVLwANXVRTwFc2mIFxNdruJbwkVo3o5252Y" />

    <!-- Google tags: both properties, single library load -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J3MCEF58PD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-J3MCEF58PD');
      gtag('config', 'G-GQQ630YX04');
    </script>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e);s.parentNode.insertBefore(t,s);
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2372900976550510');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2372900976550510&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>
<?= ak_icon_sprite() ?>

    <?php component('navbar'); ?>

    <!-- Flash Messages -->
    <?php $flash = getFlash(); if ($flash): ?>
    <div id="flash-message" style="position:fixed;top:96px;right:20px;z-index:120;max-width:360px">
        <div class="ak-msg ak-msg--<?= $flash['type'] === 'success' ? 'ok' : 'err' ?>" style="display:block;background:#fff;box-shadow:0 20px 40px -20px rgba(0,0,0,.35)">
            <p style="font-weight:600"><?= $flash['message'] ?></p>
        </div>
    </div>
    <script>setTimeout(function(){var f=document.getElementById('flash-message');if(f)f.remove();},5000);</script>
    <?php endif; ?>

    <main>
        <?= $pageContent ?? '' ?>
    </main>

    <?php component('footer'); ?>

    <?php component('whatsapp-float'); ?>

    <!-- Cookie consent -->
    <div id="cookie-popup" class="hidden" style="position:fixed;left:0;right:0;bottom:0;z-index:200;background:#fff;border-top:1px solid var(--line);padding:18px 24px">
        <div class="ak-container" style="display:flex;flex-wrap:wrap;gap:16px;align-items:center;justify-content:space-between">
            <p style="font-size:14px;color:#555;max-width:640px">
                We use cookies to improve your experience, run ads and analyse traffic. You can accept or reject tracking.
            </p>
            <div style="display:flex;gap:10px">
                <button id="cookie-accept" class="ak-btn ak-btn--dark ak-btn--sm">Accept</button>
                <button id="cookie-reject" class="ak-btn ak-btn--light ak-btn--sm">Reject</button>
            </div>
        </div>
    </div>

    <!-- Motion layer -->
    <script src="<?= asset('js/akestech.js') ?>" defer></script>
    <script src="<?= asset('js/app.js') ?>" defer></script>
</body>
</html>
