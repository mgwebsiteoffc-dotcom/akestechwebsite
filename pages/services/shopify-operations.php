<?php
/**
 * Service: Shopify Operations — Inventory, Fulfillment, RTO
 */
SEO::load('shopify-operations');
$schemas = [];
$schemas[] = SEO::breadcrumbSchema([
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Services', 'url' => url('services/shopify-operations')],
    ['name' => 'Shopify Operations', 'url' => url('services/shopify-operations')]
]);

ob_start();
?>

<!-- HERO -->
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 lg:pt-28 lg:pb-24">
        <div class="max-w-3xl animate-on-scroll">
            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider bg-blue-50 px-3 py-1.5 rounded-full">Shopify Operations</span>
            <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mt-5 mb-6 leading-tight">
                Your Backend Should Run Like
                <span class="text-blue-600">Clockwork</span>
            </h1>
            <p class="text-lg text-gray-500 leading-relaxed mb-8">
                Operations chaos kills D2C brands silently. High RTO, manual order processing, stockouts, shipping delays — they eat your margins before you even notice. We systemize, automate, and optimize every operational layer of your Shopify store.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-lg shadow-gray-900/20">Get Ops Audit →</a>
                <a href="#services" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-all">What We Fix</a>
            </div>
            <div class="flex flex-wrap gap-6">
                <div><p class="text-2xl font-extrabold text-gray-900">40<span class="text-blue-600">%</span></p><p class="text-xs text-gray-500 mt-0.5">Avg. RTO Reduction</p></div>
                <div class="w-px bg-gray-200"></div>
                <div><p class="text-2xl font-extrabold text-gray-900">20<span class="text-blue-600">+</span> hrs</p><p class="text-xs text-gray-500 mt-0.5">Saved Per Week</p></div>
                <div class="w-px bg-gray-200"></div>
                <div><p class="text-2xl font-extrabold text-gray-900">15<span class="text-blue-600">%</span></p><p class="text-xs text-gray-500 mt-0.5">Avg. Margin Improvement</p></div>
            </div>
        </div>
    </div>
</section>


<!-- PROBLEM -->
<section class="bg-gray-950 py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">The Hidden Profit Killers in Your Operations</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 animate-on-scroll">
            <?php
            $killers = [
                ['metric' => '35%', 'label' => 'COD Return Rate', 'desc' => 'Every returned order costs ₹200-500 in shipping alone'],
                ['metric' => '₹0', 'label' => 'Automation Savings', 'desc' => 'Manual processes eating 20+ hours every week'],
                ['metric' => '3-5 days', 'label' => 'Order Processing', 'desc' => 'Slow fulfillment causing customer complaints'],
                ['metric' => '0', 'label' => 'Real-time Dashboards', 'desc' => 'Flying blind on inventory, costs, and KPIs'],
            ];
            foreach ($killers as $k): ?>
            <div class="bg-white/5 border border-white/10 rounded-xl p-5 text-center">
                <p class="text-2xl font-extrabold text-red-400 mb-1"><?= $k['metric'] ?></p>
                <p class="text-sm text-white font-medium mb-2"><?= $k['label'] ?></p>
                <p class="text-xs text-gray-400"><?= $k['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- SERVICES -->
<section class="bg-white py-16 lg:py-24" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 animate-on-scroll">
            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">What We Manage</span>
            <h2 class="text-2xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">End-to-End Operations Services</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $opsServices = [
                ['icon' => '📦', 'title' => 'Inventory Management', 'desc' => 'Multi-location sync, demand forecasting, low-stock alerts, and dead inventory identification. Never miss a sale due to stockouts.', 'color' => 'bg-blue-50 text-blue-600'],
                ['icon' => '🚚', 'title' => 'Fulfillment Optimization', 'desc' => 'Shipping partner integration, automated label generation, fastest route selection, and SLA monitoring for on-time delivery.', 'color' => 'bg-green-50 text-green-600'],
                ['icon' => '🛡️', 'title' => 'COD & RTO Reduction', 'desc' => 'WhatsApp COD verification, prepaid conversion nudges, NDR management, and fake order detection. Reduce RTO by 40%.', 'color' => 'bg-orange-50 text-orange-600'],
                ['icon' => '↩️', 'title' => 'Returns & Exchange Management', 'desc' => 'Automated self-serve returns portal, exchange-first flows, refund processing, and returns analytics.', 'color' => 'bg-purple-50 text-purple-600'],
                ['icon' => '📋', 'title' => 'Order Management', 'desc' => 'Centralized dashboard, auto-tagging, fraud detection, priority routing, and conditional fulfillment rules.', 'color' => 'bg-cyan-50 text-cyan-600'],
                ['icon' => '📊', 'title' => 'Operations Analytics', 'desc' => 'Real-time dashboards for shipping costs, delivery TAT, RTO rates, inventory turns, and all operational KPIs.', 'color' => 'bg-primary-50 text-primary-600'],
            ];
            foreach ($opsServices as $s): ?>
            <div class="animate-on-scroll bg-white border border-gray-100 rounded-2xl p-6 hover:shadow-lg hover:border-gray-200 transition-all">
                <div class="w-12 h-12 <?= $s['color'] ?> rounded-xl flex items-center justify-center mb-4">
                    <span class="text-xl"><?= $s['icon'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $s['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PROCESS -->
<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Our Operations Playbook</h2>
        </div>
        <div class="grid md:grid-cols-4 gap-6 animate-on-scroll">
            <?php
            $steps = [
                ['num' => '01', 'title' => 'Ops Audit', 'desc' => 'Map every workflow, identify bottlenecks, calculate hidden costs, and benchmark against industry standards.', 'color' => 'bg-blue-600'],
                ['num' => '02', 'title' => 'Systemize', 'desc' => 'Design SOPs, automate repetitive tasks, integrate tools, and create decision frameworks.', 'color' => 'bg-purple-600'],
                ['num' => '03', 'title' => 'Implement', 'desc' => 'Set up automation, connect shipping partners, build dashboards, and train your team.', 'color' => 'bg-green-600'],
                ['num' => '04', 'title' => 'Optimize', 'desc' => 'Monitor KPIs, reduce costs continuously, improve delivery times, and scale operations.', 'color' => 'bg-orange-600'],
            ];
            foreach ($steps as $step): ?>
            <div class="bg-white border border-gray-100 rounded-2xl p-6">
                <div class="w-10 h-10 <?= $step['color'] ?> rounded-xl flex items-center justify-center mb-4">
                    <span class="text-sm font-bold text-white"><?= $step['num'] ?></span>
                </div>
                <h3 class="text-base font-semibold text-gray-900 mb-2"><?= $step['title'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="bg-gray-950 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5">Stop Losing Money to Operational Chaos</h2>
        <p class="text-lg text-gray-400 mb-10">Get an ops audit and discover how much margin you're losing to inefficient operations.</p>
        <a href="<?= url('contact') ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-gray-900 bg-white rounded-xl hover:bg-gray-100 transition-all shadow-lg">Get Operations Audit →</a>
    </div>
</section>

<!-- FAQs -->
<?php component('faq-section', ['pageSlug' => 'shopify-operations']); ?>

<?php
$pageContent = ob_get_clean();
include __DIR__ . '/../../includes/components/layout.php';