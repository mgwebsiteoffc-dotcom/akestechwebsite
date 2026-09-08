<?php
/**
 * AKESTECH icon system
 *
 * Replaces emoji across the site with a single SVG sprite. The sprite is
 * printed once per page (ak_icon_sprite()); each icon is then a tiny
 * <use> reference, so 200 icons cost one definition instead of 200 SVGs.
 *
 * Usage:  <?= ak_icon('arrow-up-right') ?>
 *         <?= ak_icon('target', 22, 'my-class') ?>
 */

if (!function_exists('ak_icons')) {
    /**
     * Icon definitions. Each entry is the inner markup of a 24x24 symbol.
     * Stroke icons inherit `currentColor`, so they follow text colour.
     */
    function ak_icons() {
        static $icons = null;
        if ($icons !== null) return $icons;

        $icons = [
            /* ---------- arrows ---------- */
            'arrow-right'       => '<path d="M5 12h14M12 5l7 7-7 7"/>',
            'arrow-left'        => '<path d="M19 12H5M12 19l-7-7 7-7"/>',
            'arrow-up'          => '<path d="M12 19V5M5 12l7-7 7 7"/>',
            'arrow-down'        => '<path d="M12 5v14M19 12l-7 7-7-7"/>',
            'arrow-up-right'    => '<path d="M7 17L17 7M8 7h9v9"/>',
            'corner-down-right' => '<path d="M15 10l5 5-5 5"/><path d="M4 4v7a4 4 0 0 0 4 4h12"/>',
            'chevron-down'      => '<path d="M6 9l6 6 6-6"/>',
            'chevron-right'     => '<path d="M9 18l6-6-6-6"/>',
            'rotate-ccw'        => '<path d="M1 4v6h6"/><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"/>',
            'refresh'           => '<path d="M23 4v6h-6M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/>',

            /* ---------- status ---------- */
            'check'             => '<path d="M20 6L9 17l-5-5"/>',
            'x'                 => '<path d="M18 6L6 18M6 6l12 12"/>',
            'plus'              => '<path d="M12 5v14M5 12h14"/>',
            'minus'             => '<path d="M5 12h14"/>',
            'check-circle'      => '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/>',
            'x-circle'          => '<circle cx="12" cy="12" r="10"/><path d="M15 9l-6 6M9 9l6 6"/>',
            'help-circle'       => '<circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/>',
            'info'              => '<circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>',

            /* ---------- growth / business ---------- */
            'target'            => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
            'trending-up'       => '<path d="M23 6l-9.5 9.5-5-5L1 18"/><path d="M17 6h6v6"/>',
            'bar-chart'         => '<path d="M12 20V10M18 20V4M6 20v-4"/>',
            'briefcase'         => '<path d="M20 7H4a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
            'award'             => '<circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/>',
            'wallet'            => '<path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"/><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"/><path d="M18 12a2 2 0 0 0 0 4h4v-4z"/>',
            'star'              => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
            'flame'             => '<path d="M12 22c4.4 0 8-3.1 8-7 0-4-3-7-8-13-5 6-8 9-8 13 0 3.9 3.6 7 8 7z"/><path d="M12 22c2.2 0 4-1.6 4-3.5 0-2-2-3.5-4-6.5-2 3-4 4.5-4 6.5 0 1.9 1.8 3.5 4 3.5z"/>',
            'zap'               => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',
            'sparkle'           => '<path d="M12 3l1.6 4.4L18 9l-4.4 1.6L12 15l-1.6-4.4L6 9l4.4-1.6L12 3z"/><path d="M18.5 15l.7 1.8 1.8.7-1.8.7-.7 1.8-.7-1.8-1.8-.7 1.8-.7.7-1.8z"/>',
            'rocket'            => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>',
            'lightbulb'         => '<path d="M9 18h6M10 22h4"/><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"/>',

            /* ---------- technology ---------- */
            'monitor'           => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
            'smartphone'        => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
            'settings'          => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>',
            'bot'               => '<rect x="3" y="8" width="18" height="12" rx="2"/><path d="M12 8V4a2 2 0 0 1 4 0v4M12 8V4a2 2 0 0 0-4 0v4"/><path d="M9 13h.01M15 13h.01M9.5 17h5"/>',
            'globe'             => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
            'link'              => '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>',
            'search'            => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>',
            'lock'              => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
            'shield'            => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
            'database'          => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',

            /* ---------- commerce ---------- */
            'shopping-bag'      => '<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/>',
            'package'           => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12"/>',
            'credit-card'       => '<rect x="1" y="4" width="22" height="16" rx="2"/><path d="M1 10h22"/>',
            'truck'             => '<path d="M1 3h15v13H1z"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
            'store'             => '<path d="M3 9l1.5-5h15L21 9"/><path d="M3 9h18v11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9z"/><path d="M9 21v-6h6v6"/>',

            /* ---------- content ---------- */
            'file-text'         => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>',
            'pen'               => '<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>',
            'camera'            => '<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>',
            'clipboard'         => '<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/>',
            'calculator'        => '<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>',
            'newspaper'         => '<path d="M4 22h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z"/><path d="M20 8h2v12a2 2 0 0 1-2 2"/><path d="M6 6h8M6 10h8M6 14h8M6 18h5"/>',
            'mail'              => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/>',
            'phone'             => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
            'user'              => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
            'users'             => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
            'message-circle'    => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>',
            'calendar'          => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
            'clock'             => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
            'map-pin'           => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
            'map'               => '<path d="M1 6l8-3 6 3 8-3v15l-8 3-6-3-8 3V6z"/><path d="M9 3v15M15 6v15"/>',
            'key'               => '<path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.78 7.78 5.5 5.5 0 0 1 7.78-7.78zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/>',
            'gift'              => '<path d="M20 12v10H4V12"/><path d="M2 7h20v5H2z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>',
            'building'          => '<path d="M4 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18"/><path d="M16 22V10h4a2 2 0 0 1 2 2v10M2 22h20"/><path d="M9 6h4M9 10h4M9 14h4M9 18h4"/>',
            'wrench'            => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
            'home'              => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/>',
            'utensils'          => '<path d="M6 2v7a3 3 0 0 0 6 0V2M9 9v13"/><path d="M17 2c-2 2-3 4.5-3 7 0 2 1 3.5 3 3.5V22"/>',
            'shirt'             => '<path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10a2 2 0 0 1-2 2 2 2 0 0 0 0 4h16a2 2 0 0 0 0-4 2 2 0 0 1-2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/>',
            'dumbbell'          => '<path d="M6 5v14M18 5v14M3 9v6M21 9v6M6 10h12M6 14h12"/>',
            'inbox'             => '<path d="M22 12h-6l-2 3h-4l-2-3H2"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/>',
            'download'          => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5M12 15V3"/>',
            'upload'            => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M17 8l-5-5-5 5M12 3v12"/>',
            'edit'              => '<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>',
            'trash'             => '<path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>',
            'layers'            => '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>',
            'grid'              => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/>',
        ];

        return $icons;
    }
}

if (!function_exists('ak_icon')) {
    /**
     * Render an icon as a sprite reference.
     *
     * @param string $name  key from ak_icons()
     * @param int    $size  pixel size (square)
     * @param string $class extra classes
     */
    function ak_icon($name, $size = 18, $class = '') {
        $icons = ak_icons();

        // Unknown icon: fall back to a neutral dot rather than printing nothing
        if (!isset($icons[$name])) $name = 'info';
        if (!isset($icons[$name])) return '';

        $size  = (int) $size;
        $class = trim('ak-ic ' . $class);

        return '<svg class="' . $class . '" width="' . $size . '" height="' . $size . '"'
             . ' viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"'
             . ' stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">'
             . '<use href="#ak-i-' . $name . '"/></svg>';
    }
}

if (!function_exists('ak_icon_sprite')) {
    /**
     * Print the sprite once per page (call right after <body>).
     */
    function ak_icon_sprite() {
        static $done = false;
        if ($done) return '';
        $done = true;

        $out = '<svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;width:0;height:0;overflow:hidden" aria-hidden="true" focusable="false">';
        foreach (ak_icons() as $name => $body) {
            $out .= '<symbol id="ak-i-' . $name . '" viewBox="0 0 24 24" fill="none"'
                  . ' stroke="currentColor" stroke-width="1.75" stroke-linecap="round"'
                  . ' stroke-linejoin="round">' . $body . '</symbol>';
        }
        return $out . '</svg>';
    }
}
