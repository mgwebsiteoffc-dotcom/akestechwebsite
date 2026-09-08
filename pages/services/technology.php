<?php
/**
 * Service: Technology Development — Web, Mobile, AI
 */
SEO::load('technology');
$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/technology')],
    ['name' => 'Technology Development', 'url' => url('services/technology')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="max-w-3xl animate-on-scroll">
            <span class="text-xs font-semibold text-cyan-600 uppercase tracking-wider bg-cyan-50 px-3 py-1.5 rounded-full">Technology Development</span>
            <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mt-5 mb-6 leading-tight">
                We Build the Tech That
                <span class="text-cyan-600">Powers Growth</span>
            </h1>
            <p class="text-lg text-gray-500 leading-relaxed mb-8">
                From custom Shopify development to full-stack web apps, mobile applications, and AI-powered solutions — we build technology products that give your business an unfair competitive advantage.
            </p>
            <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">
                Discuss Your Project →
            </a>
        </div>
    </div>
</section>


<!-- SERVICES — 4 PILLARS -->
<section class="bg-gray-50 py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mb-4">Technology Solutions We Build</h2>
            <p class="text-gray-500">End-to-end development from concept to production-ready deployment.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <?php
            $techServices = [
                [
                    'icon' => '🌐',
                    'title' => 'Web Development',
                    'desc' => 'High-performance websites, Shopify stores, landing pages, and web portals. Performance-optimized, mobile-first, and conversion-focused.',
                    'stack' => ['Shopify 2.0 Themes', 'Headless Commerce (Hydrogen)', 'Custom Landing Pages', 'WordPress / CMS Sites', 'Performance Optimization'],
                    'color' => 'bg-blue-50 border-blue-100'
                ],
                [
                    'icon' => '⚡',
                    'title' => 'Web Application Development',
                    'desc' => 'Full-stack web applications for SaaS products, internal tools, dashboards, admin panels, and Shopify apps built for scale.',
                    'stack' => ['SaaS Product Development', 'Shopify App Development', 'Admin Dashboards & Portals', 'API Development & Integration', 'Real-time Applications'],
                    'color' => 'bg-purple-50 border-purple-100'
                ],
                [
                    'icon' => '📱',
                    'title' => 'Mobile App Development',
                    'desc' => 'Native and cross-platform mobile apps for iOS and Android. From e-commerce storefronts to internal operations tools.',
                    'stack' => ['React Native / Flutter', 'Shopify Mobile Storefronts', 'PWA Development', 'Push Notification Systems', 'App Store Optimization'],
                    'color' => 'bg-green-50 border-green-100'
                ],
                [
                    'icon' => '🧠',
                    'title' => 'AI Application Development',
                    'desc' => 'AI-powered products for recommendations, chatbots, content generation, demand forecasting, and intelligent automation.',
                    'stack' => ['GPT-Powered Chatbots', 'Product Recommendation Engines', 'Demand Forecasting Models', 'Content Generation Tools', 'Computer Vision Solutions'],
                    'color' => 'bg-orange-50 border-orange-100'
                ],
            ];
            foreach ($techServices as $s): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 lg:p-8 hover:shadow-lg transition-all">
                <div class="flex items-center gap-4 mb-5">
                    <div class="w-14 h-14 <?= $s['color'] ?> rounded-2xl flex items-center justify-center border">
                        <span class="text-2xl"><?= $s['icon'] ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900"><?= $s['title'] ?></h3>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed mb-5"><?= $s['desc'] ?></p>
                <div class="space-y-2">
                    <?php foreach ($s['stack'] as $item): ?>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <?= $item ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PROCESS -->
<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Development Process</h2>
            <p class="text-gray-500 mt-2">Agile sprints with weekly demos. You see progress every single week.</p>
        </div>
        <div class="grid md:grid-cols-5 gap-5 animate-on-scroll">
            <?php
            $devSteps = [
                ['num' => '01', 'title' => 'Discovery', 'desc' => 'Requirements, user stories, and tech stack selection', 'color' => 'bg-cyan-600'],
                ['num' => '02', 'title' => 'Design', 'desc' => 'UI/UX wireframes, prototypes, and architecture', 'color' => 'bg-blue-600'],
                ['num' => '03', 'title' => 'Develop', 'desc' => '2-week agile sprints with weekly demos', 'color' => 'bg-purple-600'],
                ['num' => '04', 'title' => 'Test', 'desc' => 'QA, performance, security, and UAT', 'color' => 'bg-green-600'],
                ['num' => '05', 'title' => 'Launch', 'desc' => 'Deployment, monitoring, and post-launch support', 'color' => 'bg-orange-600'],
            ];
            foreach ($devSteps as $step): ?>
            <div class="bg-gray-50 border border-gray-100 rounded-2xl p-5 text-center">
                <div class="w-10 h-10 <?= $step['color'] ?> rounded-xl flex items-center justify-center mx-auto mb-3">
                    <span class="text-xs font-bold text-white"><?= $step['num'] ?></span>
                </div>
                <h3 class="text-sm font-semibold text-gray-900 mb-1"><?= $step['title'] ?></h3>
                <p class="text-xs text-gray-500"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- TECH STACK -->
<section class="bg-gray-50 py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-3">Our Tech Stack</h2>
            <p class="text-gray-500">We pick the right tools for each project. No one-size-fits-all approach.</p>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-8 gap-4 animate-on-scroll">
            <?php
            $stack = ['React', 'Next.js', 'Node.js', 'PHP', 'Python', 'Flutter', 'Shopify', 'AWS', 'PostgreSQL', 'MongoDB', 'Redis', 'Docker', 'OpenAI', 'Stripe', 'Tailwind', 'Figma'];
            foreach ($stack as $tech): ?>
            <div class="bg-white border border-gray-100 rounded-xl p-3 text-center hover:shadow-sm hover:border-gray-200 transition-all">
                <p class="text-xs font-medium text-gray-700"><?= $tech ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5">Have a Technology Project in Mind?</h2>
        <p class="text-lg text-gray-400 mb-10">From concept to launch — we build products that scale. Let's talk about your vision.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">Start a Project →</a>
            <a href="<?= url('case-studies') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white border border-gray-700 rounded-xl hover:bg-gray-800 transition-all">View Our Work</a>
        </div>
    </div>
</section>

<!-- FAQs -->
<?php component('faq-section', ['pageSlug' => 'technology']); ?>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';