<?php
SEO::set('meta_title', 'Free ROAS Calculator: Break-Even & Target ROAS | ' . SITE_NAME);
SEO::set('meta_description', 'Calculate actual ROAS, break-even ROAS, target ROAS, allowable CPA, contribution margin, and ad profitability for your ecommerce store.');
SEO::set('canonical_url', url('resources/roas-calculator'));
SEO::set('og_title', 'Free Ecommerce ROAS & Profitability Calculator');
SEO::set('og_description', 'Know the ROAS your store really needs after product, shipping, payment, and advertising costs.');
$faqs = [
    ['question' => 'How is ROAS calculated?', 'answer' => 'ROAS equals revenue attributed to advertising divided by advertising spend. If ads generate ₹400,000 from ₹100,000 of spend, ROAS is 4.0x or 400%.'],
    ['question' => 'What is break-even ROAS?', 'answer' => 'Break-even ROAS is the revenue-to-ad-spend ratio at which contribution profit after product, fulfillment, payment, and advertising costs is zero. It is calculated as 1 divided by contribution margin rate.'],
    ['question' => 'What is a good ROAS for ecommerce?', 'answer' => 'A good ROAS is one that exceeds your break-even ROAS and leaves your required profit. The right number depends on gross margin, average order value, returns, overhead, and customer lifetime value.'],
    ['question' => 'Does this calculator include GST and returns?', 'answer' => 'Not automatically. Enter revenue net of taxes and refunds, or include expected return and tax impact in your costs for a more conservative result.'],
];
$schemas = [SEO::breadcrumbSchema([['name'=>'Home','url'=>url('/')],['name'=>'Resources','url'=>url('resources')],['name'=>'ROAS Calculator','url'=>url('resources/roas-calculator')]]), SEO::faqSchema($faqs), json_encode(['@context'=>'https://schema.org','@type'=>'WebApplication','name'=>'Ecommerce ROAS Calculator','applicationCategory'=>'BusinessApplication','operatingSystem'=>'Any','url'=>url('resources/roas-calculator'),'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'INR']], JSON_UNESCAPED_SLASHES)];
ob_start();
?>
<section class="bg-gradient-to-br from-orange-50 via-white to-amber-50 py-16 lg:py-20 border-b border-orange-100"><div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <a href="<?= url('resources') ?>" class="text-sm font-medium text-orange-700">&larr; Back to resources</a><p class="mt-6 text-xs font-bold uppercase tracking-[.2em] text-orange-600">Free profitability tool</p>
    <h1 class="mt-3 text-4xl lg:text-5xl font-extrabold text-gray-900">ROAS Calculator</h1><p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto">Calculate your actual, break-even, and target ROAS—then see the real profit behind your ad revenue.</p>
</div></section>

<main class="bg-gray-50 py-12 lg:py-20"><div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-5 gap-7 items-start">
    <section class="lg:col-span-3 bg-white border border-gray-200 rounded-2xl p-6 lg:p-8 shadow-sm" aria-labelledby="calculator-heading">
        <div class="flex items-center justify-between gap-4 mb-7"><div><p class="text-xs font-bold uppercase tracking-wider text-orange-600">Your numbers</p><h2 id="calculator-heading" class="text-2xl font-bold text-gray-900 mt-1">Campaign and unit economics</h2></div><button id="reset-roas" type="button" class="text-sm text-gray-500 hover:text-gray-900">Reset</button></div>
        <div class="grid sm:grid-cols-2 gap-5">
            <?php foreach ([
                ['revenue','Attributed revenue','₹','400000','Revenue after discounts and refunds'],
                ['spend','Ad spend','₹','100000','Total media spend for the period'],
                ['aov','Average order value','₹','2000','Revenue divided by number of orders'],
                ['cogs','Product cost per order','₹','700','Landed cost of products sold'],
                ['fulfilment','Shipping & fulfilment/order','₹','180','Packing, shipping, and handling'],
                ['fees','Payment fee','%','2','Gateway fee as a percentage of revenue'],
                ['targetMargin','Target net margin','%','10','Profit desired after advertising'],
            ] as $field): ?>
            <label class="block <?= $field[0] === 'targetMargin' ? 'sm:col-span-2' : '' ?>"><span class="text-sm font-semibold text-gray-800"><?= $field[1] ?></span><span class="mt-2 flex rounded-xl border border-gray-200 focus-within:ring-2 focus-within:ring-orange-400 overflow-hidden"><span class="px-3 py-3 bg-gray-50 text-gray-500 border-r border-gray-200"><?= $field[2] ?></span><input id="<?= $field[0] ?>" type="number" min="0" step="any" value="<?= $field[3] ?>" class="w-full px-3 py-3 outline-none" aria-describedby="<?= $field[0] ?>-help"></span><span id="<?= $field[0] ?>-help" class="block mt-1.5 text-xs text-gray-500"><?= $field[4] ?></span></label>
            <?php endforeach; ?>
        </div>
        <div id="calc-warning" class="hidden mt-5 p-4 text-sm text-red-700 bg-red-50 border border-red-100 rounded-xl" role="alert"></div>
    </section>

    <aside class="lg:col-span-2 space-y-5 lg:sticky lg:top-24" aria-live="polite">
        <div class="bg-slate-950 text-white rounded-2xl p-6 shadow-xl"><p class="text-sm text-slate-400">Estimated campaign profit</p><p id="profit" class="text-4xl font-extrabold mt-2">₹0</p><p id="profit-note" class="text-sm text-slate-400 mt-2">after variable costs and ad spend</p></div>
        <div class="grid grid-cols-2 gap-4">
            <?php foreach ([['actualRoas','Actual ROAS'],['breakEvenRoas','Break-even ROAS'],['targetRoas','Target ROAS'],['maxCpa','Max CPA at target']] as $result): ?><div class="bg-white border border-gray-200 rounded-2xl p-5"><p class="text-xs text-gray-500 leading-tight"><?= $result[1] ?></p><p id="<?= $result[0] ?>" class="text-2xl font-extrabold text-gray-900 mt-2">—</p></div><?php endforeach; ?>
        </div>
        <div class="bg-white border border-gray-200 rounded-2xl p-5"><div class="flex justify-between text-sm mb-2"><span class="text-gray-600">Contribution margin</span><strong id="marginText">0%</strong></div><div class="h-2.5 bg-gray-100 rounded-full overflow-hidden"><div id="marginBar" class="h-full bg-orange-500 rounded-full" style="width:0%"></div></div><div class="grid grid-cols-2 gap-3 mt-4 pt-4 border-t border-gray-100 text-sm"><div><span class="block text-gray-500">Orders</span><strong id="orders">0</strong></div><div><span class="block text-gray-500">Profit margin</span><strong id="profitMargin">0%</strong></div></div></div>
    </aside>
</div>

<section class="mt-16 grid lg:grid-cols-2 gap-7"><div class="bg-white border border-gray-200 rounded-2xl p-7"><h2 class="text-2xl font-bold text-gray-900 mb-4">How to read your result</h2><div class="space-y-4 text-gray-600 leading-relaxed"><p><strong class="text-gray-900">Actual ROAS</strong> reports past performance. It does not show whether that performance was profitable.</p><p><strong class="text-gray-900">Break-even ROAS</strong> is your minimum before overhead. A campaign below it loses contribution profit on the first order.</p><p><strong class="text-gray-900">Target ROAS</strong> includes your chosen net margin, giving your media team a more useful operating target.</p></div></div>
<div class="bg-orange-50 border border-orange-100 rounded-2xl p-7"><h2 class="text-2xl font-bold text-gray-900 mb-4">ROAS formulas</h2><div class="space-y-3 text-sm text-gray-700"><p><code class="bg-white px-2 py-1 rounded">ROAS = ad revenue ÷ ad spend</code></p><p><code class="bg-white px-2 py-1 rounded">Break-even ROAS = 1 ÷ contribution margin rate</code></p><p><code class="bg-white px-2 py-1 rounded">Max CPA = contribution/order − target profit/order</code></p></div><p class="mt-4 text-xs text-gray-500">For business decisions, also account for salaries, tools, warehousing, taxes, returns, and repeat purchase value.</p></div></section>

<section class="mt-16 max-w-3xl mx-auto"><h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">ROAS calculator FAQs</h2><div class="space-y-4"><?php foreach($faqs as $faq): ?><details class="bg-white border border-gray-200 rounded-xl"><summary class="p-5 font-semibold cursor-pointer"><?= clean($faq['question']) ?></summary><p class="px-5 pb-5 text-gray-600 leading-relaxed"><?= clean($faq['answer']) ?></p></details><?php endforeach; ?></div></section>
</div></main>

<section class="bg-primary-700 py-14"><div class="max-w-3xl mx-auto px-4 text-center"><h2 class="text-3xl font-extrabold text-white">Need to improve the number?</h2><p class="text-primary-100 mt-3 mb-7">Our performance team connects media efficiency with store conversion and contribution margin.</p><a href="<?= url('services/performance-marketing') ?>" class="inline-flex px-7 py-3.5 bg-white text-primary-700 font-semibold rounded-xl">Explore performance marketing</a></div></section>

<script>
(function(){
 const ids=['revenue','spend','aov','cogs','fulfilment','fees','targetMargin'];
 const defaults=[400000,100000,2000,700,180,2,10];
 const money=n=>'₹'+Math.round(n).toLocaleString('en-IN');
 const num=id=>Math.max(0,parseFloat(document.getElementById(id).value)||0);
 function calculate(){
  const revenue=num('revenue'),spend=num('spend'),aov=num('aov'),cogs=num('cogs'),fulfilment=num('fulfilment'),fees=num('fees')/100,target=num('targetMargin')/100;
  const warning=document.getElementById('calc-warning');
  if(!aov){warning.textContent='Average order value must be greater than zero.';warning.classList.remove('hidden');return} warning.classList.add('hidden');
  const orders=revenue/aov, contributionPerOrder=aov-cogs-fulfilment-(aov*fees), contributionRate=contributionPerOrder/aov;
  const actual=spend?revenue/spend:0, breakEven=contributionRate>0?1/contributionRate:0, targetRoas=contributionRate>target?1/(contributionRate-target):0;
  const maxCpa=Math.max(0,contributionPerOrder-(aov*target)),profit=(orders*contributionPerOrder)-spend,profitMargin=revenue?profit/revenue:0;
  document.getElementById('actualRoas').textContent=actual?actual.toFixed(2)+'x':'—';
  document.getElementById('breakEvenRoas').textContent=breakEven?breakEven.toFixed(2)+'x':'Not viable';
  document.getElementById('targetRoas').textContent=targetRoas?targetRoas.toFixed(2)+'x':'Not viable';document.getElementById('maxCpa').textContent=money(maxCpa);
  document.getElementById('profit').textContent=(profit<0?'−':'')+money(Math.abs(profit));document.getElementById('profit').className='text-4xl font-extrabold mt-2 '+(profit>=0?'text-green-400':'text-red-400');
  document.getElementById('orders').textContent=Math.round(orders).toLocaleString('en-IN');document.getElementById('profitMargin').textContent=(profitMargin*100).toFixed(1)+'%';
  document.getElementById('marginText').textContent=(contributionRate*100).toFixed(1)+'%';document.getElementById('marginBar').style.width=Math.min(100,Math.max(0,contributionRate*100))+'%';
 }
 ids.forEach(id=>document.getElementById(id).addEventListener('input',calculate));document.getElementById('reset-roas').addEventListener('click',()=>{ids.forEach((id,i)=>document.getElementById(id).value=defaults[i]);calculate()});calculate();
})();
</script>
<?php $pageContent=ob_get_clean(); SEO::renderSchemas($schemas); include __DIR__.'/../../includes/components/layout.php';
