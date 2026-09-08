<?php
/**
 * Admin: Local Pages (city x service landing pages)
 *
 * Create location-based service pages such as
 *   digital-marketing-company-in-lucknow
 *   digital-marketing-company-in-kanpur
 *
 * Two ways to grow the site:
 *   1. Add a city  -> every service template gets a page for that city
 *   2. Add a service -> every city gets a page for that service
 *
 * Entries are stored in data/local-pages.json and merged with the built-in
 * definitions by includes/local-pages.php. Existing slugs are never renamed
 * or removed unless explicitly switched off here.
 */
$pageTitle = 'Local Pages';

require_once __DIR__ . '/../includes/local-pages.php';

if (!function_exists('lp_csrf_ok')) {
    /**
     * The shared verifyCsrf() only reads $_POST; the enable/disable/remove
     * actions here are GET links, so accept either.
     */
    function lp_csrf_ok() {
        $token = $_POST['csrf_token'] ?? ($_GET['csrf_token'] ?? '');
        if (!$token || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
            die('Invalid CSRF token');
        }
    }
}

$store    = lp_read();
$pageFile = basename(__FILE__);
$self     = '/admin/?page=local-pages';

/* ------------------------------------------------------------------ */
/* Actions                                                             */
/* ------------------------------------------------------------------ */

// Add a city
if (isset($_POST['action']) && $_POST['action'] === 'add_city') {
    lp_csrf_ok();
    $name   = trim($_POST['city_name'] ?? '');
    $region = trim($_POST['city_region'] ?? '');
    $postal = trim($_POST['city_postal'] ?? '');
    $nearby = trim($_POST['city_nearby'] ?? '');
    $areas  = array_filter(array_map('trim', explode(',', (string) ($_POST['city_areas'] ?? ''))));

    if ($name === '') {
        setFlash('error', 'City name is required.');
    } else {
        $key     = lp_slugify($name);
        $bit     = 'in-' . $key;
        $store   = lp_read();
        $store['cities'][$key] = [
            'city'    => $name,
            'region'  => $region !== '' ? $region : $name,
            'postal'  => $postal !== '' ? $postal : '226001',
            'slugbit' => $bit,
            'areas'   => $areas ? array_values($areas) : [$name],
            'nearby'  => $nearby !== '' ? $nearby : ('across ' . ($region !== '' ? $region : $name)),
        ];
        if (lp_write($store)) {
            $svcCount = count(lp_services());
            setFlash('success', "City \"{$name}\" added — {$svcCount} local pages are now live.");
        } else {
            setFlash('error', 'Could not write data/local-pages.json. Make the data/ folder writable (chmod 775).');
        }
    }
    header('Location: ' . $self);
    exit;
}

// Add a service type
if (isset($_POST['action']) && $_POST['action'] === 'add_service') {
    lp_csrf_ok();
    $name = trim($_POST['svc_name'] ?? '');
    $cta  = trim($_POST['svc_cta'] ?? '');
    $acc  = trim($_POST['svc_accent'] ?? '');

    if ($name === '') {
        setFlash('error', 'Service name is required.');
    } else {
        $key   = lp_slugify($name);
        $store = lp_read();
        $store['services'][$key] = [
            'eyebrow'     => $name . ' in {city}',
            'keyword'     => $name . ' in {city}',
            'h1'          => $name . ' in {city} for Measurable Growth',
            'intro'       => trim((string) ($_POST['svc_intro'] ?? '')) ?:
                            "AKESTECH is a {$name} partner for {city} businesses. We combine strategy, execution and tracking so growth is measurable — not guesswork.",
            'answer'      => trim((string) ($_POST['svc_answer'] ?? '')) ?:
                            "A {$name} in {city} should understand the local market, set clear targets and report against one set of numbers. AKESTECH delivers strategy, execution, tracking and optimisation as one team for {city} and {nearby}.",
            'serviceName' => $name . ' Services in {city}',
            'cta'         => $cta !== '' ? $cta : 'Get Free Consultation',
            'accent'      => $acc !== '' ? $acc : $name,
            'metrics'     => [
                ['value' => '360', 'label' => 'Growth stack'],
                ['value' => '{city}', 'label' => 'Local focus'],
                ['value' => '100%', 'label' => 'Enquiries tracked'],
                ['value' => 'Weekly', 'label' => 'Reporting cadence'],
            ],
            'services'    => [
                ['title' => 'Strategy & Audit', 'copy' => 'We review what is working today and where {city} demand is being lost.'],
                ['title' => 'Execution', 'copy' => 'Campaigns, pages, creatives and automations shipped by one team.'],
                ['title' => 'Tracking & Reporting', 'copy' => 'Every enquiry tracked from source to sale, reported weekly.'],
                ['title' => 'Optimisation', 'copy' => 'Continuous testing so cost per result keeps improving.'],
            ],
            'faqs'        => [
                ['question' => 'Do you work with businesses outside {city}?', 'answer' => 'Yes. {city} is a focus area, but we work with clients {nearby} and across India.'],
                ['question' => 'How quickly can we start?', 'answer' => 'Most engagements start within one to two weeks of the first audit.'],
                ['question' => 'What does reporting look like?', 'answer' => 'One dashboard covering spend, enquiries, cost per result and revenue, reviewed weekly.'],
                ['question' => 'Is there a long-term contract?', 'answer' => 'No. Engagements run month to month after an initial 90-day build phase.'],
                ['question' => 'Who owns the data and accounts?', 'answer' => 'You do. All ad accounts, analytics and creative assets stay in your name.'],
            ],
            'related'     => [
                ['title' => 'Case Studies', 'copy' => 'See results from teams we work with.', 'link' => 'case-studies'],
                ['title' => 'Contact', 'copy' => 'Book a free strategy call.', 'link' => 'contact'],
            ],
        ];
        if (lp_write($store)) {
            $cityCount = count(lp_cities());
            setFlash('success', "Service \"{$name}\" added — {$cityCount} local pages are now live.");
        } else {
            setFlash('error', 'Could not write data/local-pages.json. Make the data/ folder writable (chmod 775).');
        }
    }
    header('Location: ' . $self);
    exit;
}

// Switch a page off / back on
if (isset($_GET['toggle']) && lp_slugify($_GET['toggle']) !== '') {
    lp_csrf_ok();
    $slug    = $_GET['toggle'];
    $store   = lp_read();
    $current = array_values(array_filter((array) $store['disabled'], function ($s) { return is_string($s); }));
    if (in_array($slug, $current, true)) {
        $current = array_values(array_diff($current, [$slug]));
        setFlash('success', "{$slug} is live again.");
    } else {
        $current[] = $slug;
        setFlash('success', "{$slug} switched off (now 404).");
    }
    $store['disabled'] = $current;
    lp_write($store);
    header('Location: ' . $self);
    exit;
}

// Remove a city or service created here (built-ins are protected)
if (isset($_GET['remove'])) {
    lp_csrf_ok();
    $what  = $_GET['remove'];
    $store = lp_read();
    $builtinCities   = array_keys(lp_builtin_cities());
    $builtinServices = array_keys(lp_builtin_services());

    if (strpos($what, 'city:') === 0) {
        $key = substr($what, 5);
        if (in_array($key, $builtinCities, true)) {
            setFlash('error', 'That is a built-in city and cannot be deleted. You can switch its pages off instead.');
        } elseif (isset($store['cities'][$key])) {
            unset($store['cities'][$key]);
            lp_write($store);
            setFlash('success', 'City removed.');
        }
    } elseif (strpos($what, 'service:') === 0) {
        $key = substr($what, 8);
        if (in_array($key, $builtinServices, true)) {
            setFlash('error', 'That is a built-in service and cannot be deleted. You can switch its pages off instead.');
        } elseif (isset($store['services'][$key])) {
            unset($store['services'][$key]);
            lp_write($store);
            setFlash('success', 'Service removed.');
        }
    }
    header('Location: ' . $self);
    exit;
}

/* ------------------------------------------------------------------ */
/* View data                                                           */
/* ------------------------------------------------------------------ */
$allSlugs   = lp_slugs();
$cities     = lp_cities();
$services   = lp_services();
$disabled   = array_flip(lp_disabled());
$storeC     = array_keys((array) ($store['cities'] ?? []));
$storeS     = array_keys((array) ($store['services'] ?? []));
$dataWritable = is_dir(lp_data_dir()) ? is_writable(lp_data_dir()) : is_writable(dirname(lp_data_dir()));

ob_start();
?>
<?php if (!$dataWritable): ?>
    <div class="mb-6 p-4 rounded-xl bg-amber-50 border border-amber-200 text-sm text-amber-800">
        <strong>data/ is not writable.</strong> Creating pages will fail until the folder is writable.
        Run <code class="px-1.5 py-0.5 bg-white rounded border">chmod 775 data</code> on the server.
    </div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

    <!-- Add city -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <h2 class="text-base font-semibold text-gray-900 mb-1">Add a city</h2>
        <p class="text-sm text-gray-500 mb-5">Creates a page for every service type, e.g.
            <code class="text-xs bg-gray-100 px-1 py-0.5 rounded">digital-marketing-company-in-kanpur</code>
        </p>
        <form method="post" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
            <input type="hidden" name="action" value="add_city">
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">City name *</label>
                <input name="city_name" required placeholder="Kanpur"
                       class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1.5">State / region</label>
                    <input name="city_region" placeholder="Uttar Pradesh"
                           class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1.5">PIN code</label>
                    <input name="city_postal" placeholder="208001"
                           class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">Local areas (comma separated)</label>
                <input name="city_areas" placeholder="Swaroop Nagar, Kakadeo, Civil Lines"
                       class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">Surrounding areas phrase</label>
                <input name="city_nearby" placeholder="across Uttar Pradesh"
                       class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
            <button class="w-full bg-primary-600 text-white text-sm font-medium py-2.5 rounded-lg hover:bg-primary-700 transition-colors">
                Add city &amp; generate pages
            </button>
        </form>
    </div>

    <!-- Add service -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <h2 class="text-base font-semibold text-gray-900 mb-1">Add a service type</h2>
        <p class="text-sm text-gray-500 mb-5">Creates that page for every city, e.g.
            <code class="text-xs bg-gray-100 px-1 py-0.5 rounded">seo-company-in-lucknow</code>
        </p>
        <form method="post" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
            <input type="hidden" name="action" value="add_service">
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">Service name *</label>
                <input name="svc_name" required placeholder="SEO Company"
                       class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1.5">Button label</label>
                    <input name="svc_cta" placeholder="Get Free Audit"
                           class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1.5">Accent / tag</label>
                    <input name="svc_accent" placeholder="SEO + Content"
                           class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">Intro paragraph</label>
                <textarea name="svc_intro" rows="3" placeholder="Optional — a default using {city} and {nearby} is generated if left blank."
                          class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500"></textarea>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1.5">Short answer / AEO snippet</label>
                <textarea name="svc_answer" rows="3" placeholder="Optional — a default using {city} and {nearby} is generated if left blank."
                          class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500"></textarea>
            </div>
            <p class="text-xs text-gray-400">Use <code>{city}</code> and <code>{nearby}</code> as placeholders — they are replaced per location.</p>
            <button class="w-full bg-gray-900 text-white text-sm font-medium py-2.5 rounded-lg hover:bg-gray-800 transition-colors">
                Add service &amp; generate pages
            </button>
        </form>
    </div>
</div>

<!-- Cities & services -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100">
            <h2 class="text-sm font-semibold text-gray-900">Cities (<?= count($cities) ?>)</h2>
        </div>
        <ul class="divide-y divide-gray-100">
            <?php foreach ($cities as $key => $c): ?>
                <li class="px-6 py-3 flex items-center justify-between text-sm">
                    <span>
                        <span class="font-medium text-gray-900"><?= htmlspecialchars($c['city']) ?></span>
                        <span class="text-gray-400 text-xs ml-2"><?= htmlspecialchars($c['slugbit']) ?></span>
                    </span>
                    <?php if (in_array($key, $storeC, true)): ?>
                        <a href="<?= $self ?>&remove=<?= urlencode('city:' . $key) ?>&csrf_token=<?= csrfToken() ?>"
                           data-confirm="Remove this city and all of its local pages?"
                           class="text-xs text-red-600 hover:underline">Remove</a>
                    <?php else: ?>
                        <span class="text-xs text-gray-400">built-in</span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100">
            <h2 class="text-sm font-semibold text-gray-900">Service types (<?= count($services) ?>)</h2>
        </div>
        <ul class="divide-y divide-gray-100">
            <?php foreach ($services as $key => $def): ?>
                <li class="px-6 py-3 flex items-center justify-between text-sm">
                    <span>
                        <span class="font-medium text-gray-900"><?= htmlspecialchars($def['serviceName'] ?? $key) ?></span>
                        <span class="text-gray-400 text-xs ml-2"><?= htmlspecialchars($key) ?></span>
                    </span>
                    <?php if (in_array($key, $storeS, true)): ?>
                        <a href="<?= $self ?>&remove=<?= urlencode('service:' . $key) ?>&csrf_token=<?= csrfToken() ?>"
                           data-confirm="Remove this service and all of its local pages?"
                           class="text-xs text-red-600 hover:underline">Remove</a>
                    <?php else: ?>
                        <span class="text-xs text-gray-400">built-in</span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Generated pages -->
<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
        <h2 class="text-sm font-semibold text-gray-900">Generated pages (<?= count($allSlugs) ?>)</h2>
        <span class="text-xs text-gray-400">Live slugs — indexed automatically in sitemap.xml</span>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-3 text-left font-medium">Slug</th>
                    <th class="px-6 py-3 text-left font-medium">City</th>
                    <th class="px-6 py-3 text-left font-medium">Status</th>
                    <th class="px-6 py-3 text-right font-medium">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php foreach ($allSlugs as $slug => $city): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3">
                            <a href="<?= url($slug) ?>" target="_blank" class="text-primary-600 hover:underline font-medium"><?= htmlspecialchars($slug) ?></a>
                        </td>
                        <td class="px-6 py-3 text-gray-600"><?= htmlspecialchars($city) ?></td>
                        <td class="px-6 py-3">
                            <span class="inline-flex px-2 py-0.5 rounded-full text-xs bg-green-50 text-green-700">Live</span>
                        </td>
                        <td class="px-6 py-3 text-right">
                            <a href="<?= $self ?>&toggle=<?= urlencode($slug) ?>&csrf_token=<?= csrfToken() ?>"
                               class="text-xs text-gray-500 hover:text-gray-900">Switch off</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php if (!empty($disabled)): ?>
        <div class="px-6 py-4 border-t border-gray-100">
            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Switched off</p>
            <div class="flex flex-wrap gap-2">
                <?php foreach (array_keys($disabled) as $off): ?>
                    <a href="<?= $self ?>&toggle=<?= urlencode($off) ?>&csrf_token=<?= csrfToken() ?>"
                       class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg border border-gray-200 text-xs text-gray-600 hover:bg-gray-50">
                        <?= htmlspecialchars($off) ?>
                        <span class="text-primary-600">Turn on</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
$adminContent = ob_get_clean();
include __DIR__ . '/includes/admin-layout.php';
