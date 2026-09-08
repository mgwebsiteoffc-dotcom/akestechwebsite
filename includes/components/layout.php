<?php
/**
 * Main Layout Wrapper — Updated with Entry/Exit Popups
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= SEO::renderMeta() ?>

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eef2ff', 100: '#e0e7ff', 200: '#c7d2fe',
                            300: '#a5b4fc', 400: '#818cf8', 500: '#6366f1',
                            600: '#4f46e5', 700: '#4338ca', 800: '#3730a3',
                            900: '#312e81'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">

    <!-- Organization Schema -->
    <script type="application/ld+json"><?= SEO::organizationSchema() ?></script>

    <?php if (!empty($schemas)): ?>
        <?php foreach ($schemas as $schema): ?>
            <script type="application/ld+json"><?= $schema ?></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <link rel="icon" type="image/svg+xml" href="<?= asset('images/favicon.svg') ?>">
    
    <meta name="google-site-verification" content="_TWkROr8bVLwANXVRTwFc2mIFxNdruJbwkVo3o5252Y" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J3MCEF58PD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J3MCEF58PD');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GQQ630YX04"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GQQ630YX04');
</script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2372900976550510');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2372900976550510&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body class="font-sans antialiased text-gray-900 bg-white">

    <?php component('navbar'); ?>

    <!-- Flash Messages -->
    <?php $flash = getFlash(); if ($flash): ?>
    <div id="flash-message" class="fixed top-20 right-4 z-[90] max-w-sm animate-fade-in">
        <div class="px-5 py-4 rounded-xl shadow-lg <?= $flash['type'] === 'success' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200' ?>">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-2">
                    <?php if ($flash['type'] === 'success'): ?>
                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <?php else: ?>
                    <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <?php endif; ?>
                    <p class="text-sm font-medium"><?= $flash['message'] ?></p>
                </div>
                <button onclick="this.closest('#flash-message').remove()" class="text-lg leading-none opacity-50 hover:opacity-100">&times;</button>
            </div>
        </div>
    </div>
    <script>setTimeout(() => { document.getElementById('flash-message')?.remove(); }, 5000);</script>
    <?php endif; ?>

    <main>
        <?= $pageContent ?? '' ?>
    </main>

    <?php component('footer'); ?>
    
    <div id="cookie-popup" class="fixed inset-0 z-[200] hidden">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Modal -->
    <div class="absolute inset-0 flex items-end sm:items-center justify-center p-4">
        
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-6 animate-popup-in">

            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                🍪 We use cookies
            </h3>

            <p class="text-sm text-gray-500 mb-5 leading-relaxed">
                We use cookies to improve your experience, run ads, and analyze traffic. 
                You can accept or reject tracking.
            </p>

            <div class="flex gap-3">
                <button id="cookie-accept"
                    class="flex-1 bg-gray-900 text-white py-2.5 rounded-xl text-sm font-semibold hover:bg-gray-800">
                    Accept
                </button>

                <button id="cookie-reject"
                    class="flex-1 bg-gray-100 text-gray-700 py-2.5 rounded-xl text-sm font-semibold hover:bg-gray-200">
                    Reject
                </button>
            </div>

        </div>
    </div>
</div>
    <?php component('whatsapp-float'); ?>

    <!-- Entry Popup -->
    <?php component('entry-popup'); ?>

    <!-- Exit Intent Popup -->
    <?php component('exit-popup'); ?>

    <!-- Core JS -->
    <script src="<?= asset('js/app.js') ?>" defer></script>
    <script>
(function () {

    function setConsent(value) {
        localStorage.setItem('cookie_consent', value);
    }

    function getConsent() {
        return localStorage.getItem('cookie_consent');
    }

    function showPopup() {
        document.getElementById('cookie-popup').classList.remove('hidden');
    }

    function hidePopup() {
        document.getElementById('cookie-popup').classList.add('hidden');
    }

    function loadTracking() {
        // 👉 Put your GA / Meta here

        console.log("Tracking enabled");

        // Example:
        // gtag / pixel load
    }

    // Show popup only if not set
    if (!getConsent()) {
        setTimeout(showPopup, 1000);
    }

    // Accept
    document.getElementById('cookie-accept').onclick = function () {
        setConsent('accepted');
        hidePopup();
        loadTracking();
    };

    // Reject
    document.getElementById('cookie-reject').onclick = function () {
        setConsent('rejected');
        hidePopup();
    };

    // Auto load if already accepted
    if (getConsent() === 'accepted') {
        loadTracking();
    }

})();
</script>
</body>
</html>