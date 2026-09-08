<?php
/**
 * Navbar Component — Agency-First, Sticky, Responsive
 * All URLs remain unchanged
 */
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 transition-shadow duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-[72px]">

 <a href="<?= url('/') ?>" class="flex items-center flex-shrink-0">
    <img 
        src="https://akestech.com/assets/images/akestech-logo-black.png" 
        alt="Akestech Infotech Logo"
        class="h-16 w-auto"
    >
</a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-1">

                <!-- Services Mega Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-sm font-medium <?= isActive('services') ?> transition-colors flex items-center gap-1 rounded-lg hover:bg-gray-50">
                        Services
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[540px] bg-white rounded-2xl shadow-2xl shadow-gray-200/50 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 p-3">
                        <div class="grid grid-cols-2 gap-1">
                            <a href="<?= url('services/performance-marketing') ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 bg-orange-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-orange-100 transition-colors">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Performance Marketing</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Meta Ads, Google Ads & full-funnel campaigns</p>
                                </div>
                            </a>

                            <a href="<?= url('services/shopify-growth') ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 bg-primary-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-primary-100 transition-colors">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Shopify Growth</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">CRO, store optimization & theme dev</p>
                                </div>
                            </a>

                            <a href="<?= url('services/shopify-operations') ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-blue-100 transition-colors">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Shopify Operations</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Inventory, fulfillment & RTO reduction</p>
                                </div>
                            </a>

                            <a href="<?= url('services/automation') ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 bg-purple-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-purple-100 transition-colors">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Automation Services</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">WhatsApp, email & workflow automation</p>
                                </div>
                            </a>

                            <a href="<?= url('services/technology') ?>" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item">
                                <div class="w-10 h-10 bg-cyan-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-cyan-100 transition-colors">
                                    <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Technology Development</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Web apps, mobile apps & AI solutions</p>
                                </div>
                            </a>

                            <!-- Quick CTA inside dropdown -->
                            <div class="p-3 bg-gray-50 rounded-xl flex items-center gap-3">
                                <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Not sure where to start?</p>
                                    <a href="<?= url('contact') ?>?type=audit" class="text-xs text-primary-600 font-medium hover:text-primary-700">Get a free growth audit →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-sm font-medium <?= isActive('products') ?> transition-colors flex items-center gap-1 rounded-lg hover:bg-gray-50">
                        Products
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-80 bg-white rounded-2xl shadow-2xl shadow-gray-200/50 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 p-3">
                        <a href="https://whatify.in/" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item" target="_new">
                            <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-green-100 transition-colors">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.611.611l4.458-1.495A11.96 11.96 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.347 0-4.535-.67-6.396-1.826l-.446-.267-3.14 1.053 1.053-3.14-.267-.446A9.96 9.96 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-semibold text-gray-900">Whatify</p>
                                </div>
                                <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Cart recovery, COD verification, broadcasts & chatbot</p>
                            </div>
                        </a>
                        
                      <a href="https://lead365.in/" class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group/item" target="_new">
                            <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-green-100 transition-colors">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28" viewBox="0 0 28 28">
  <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAE70lEQVR4AbyWe4hUVRzHP3ec2V1n8oVlvlY0tFwMLKnULLHQwo0y0QoJJIr1jwgzehBBZQ+LolCq/0z/UCRSyiIrykebYmqIUZlFu7q6K5vusq1rzuzOzrq37+/euXfvzI4YSV3O75zf65zvefzu75yY+z9/MYq+HYdh2TqXW1ZxSXT3aljzpcuZzkKAAkADmrcG1h502HuK/tQsXUAn83yxn9ml21YPT2x1GPMs/CpdABsCvv+Ny9p9DqkUpMpEsiRF9EKFk5fjfrdkBVw/Wrxs5pOSn0fmN8D3Tck3NRAyPXDne/LNF7n63JpaecvBJFeVUaYb5o2HWALS6midZwmo4y049DxsecglkwXzTcu3bFgbsXiWtCaiIbxiwE0tcEArNoUH2KMeR9vxVmJKR1VGe28Dfv00nH4dKodImYPF01zi5iDx3pvEqNjExs2pZeTCzYxZspEhA9P+LOTjFaE0tQlEgljVRcU3wc1VGk22y7TFs8eJkfcXh32dJD75Xp4qxpeNasTNJXASOSqubCV93sd0zRghDeFLXRGLN6TOYuUWF4syi9xNP2sHBLz9GKSehGmvwH3rHJLl6q9ROg7OpCcXo6t5NOdOjCcZBxvHiMgnV1+yw/c5f2bGWxANW6ZzfEOStrOrS61mnumAH06IV7GtR7bWI5OoX/8wDR8sIC2/3sgC5BaWEDATOWg7k7X3u9S9BnVv5+lVtQGZ3iiQrTXZyPwlW6CdLwEaAlroh9MQ89NJh4kj+FfUdhZs0rHi/dS4IaD4sCR1Vu9+Cy9vDVX/iLHQt7Odod/GFlACjxCwOGiSSgAvfg6WEC6Gdk7/4PKNMONNGHXdHoYMThMdL9o/BLQZBYZg6w20ZpODRWlgK24/OwSDHofNLcd55KlNXH1jHVMnN4ESRbGvySGgCQFFt6IiqSh9py9TBD7W1rfAPUry1dV7WPLgLsrLXbqzZYyZ1IhFrvkUU0nAYIXm7B28/rUZyv4GYLqALKhqql1qd9xK41mXbNaf6uWVf5DSRKPjBH1KAlo3o8ApZYJ+m5UfB5q+9sgphxum/uYp2umivXEEP+6a7uVUT1lUhYClDtlwnMg0O5Rfo/0toPbq6klN309nTqlJxoPfVbF7/2R6e8q9TCNVQQkBC7QCUelLOWZUqmo4A5boTTSwmvUOE+761ESPWk8Npu5oJXYtlUSTV2lAGaLFEvEVE+pombCPxKMwcDnUfNVK1dKPiA8/SYPureO5Tg7vvB0S0Z79+Vh/VURje5oXnUQ3Q6sOMXHJBsYu3sCkhVtwh7YzIKatS+Ro2zOb9pbhpOL5DhdoPEC736LJ27YjggXy6myYiJsdBHH9YCL3vH9b93SW8efO+bT8MoWUrc69AFJeHcu3zBoLXboJPFmdVMIztCj9K1tO67ZFdPxeRaZ5JN1NV9G+ey71Hy7l9LHx3rPEJuqRN0ikUoRPqXQ8RQj4zHzJei547wXZotEpCykFYUdnitYDM2neWU1j7RwfSHqzlQRSR3t6zLsGqvQ0kWibZQ3MvRZWL3JJZ/R+EXBad5xHypNeK9nLHt7S/T72wApsNnA/0kvDHlubH8v7qwlXKJ4V8x3vDly9wOW5Ofh0W7412Xgj4y9CL90B21eAPbaG+sdtEH0r9CRVlq4MeNUDcCn0wkJ/1zRkQSlYYYHlPxL+BgAA///GhSJ6AAAABklEQVQDAEIMR+cPM6ylAAAAAElFTkSuQmCC" x="0" y="0" width="28" height="28"/>
</svg>
                                        </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-semibold text-gray-900">Lead365</p>
                                </div>
                                <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Lead Automation CRM, Meta Lead Ads Sync, Workflow Automation</p>
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Direct links -->
                <a href="<?= url('real-estate-marketing-agency') ?>" class="px-3 py-2 text-sm font-medium <?= isActive('real-estate-marketing-agency') ?> transition-colors rounded-lg hover:bg-gray-50">
                    Real Estate
                </a>

                <a href="<?= url('case-studies') ?>" class="px-3 py-2 text-sm font-medium <?= isActive('case-studies') ?> transition-colors rounded-lg hover:bg-gray-50">
                    Case Studies
                </a>

                <a href="<?= url('blog') ?>" class="px-3 py-2 text-sm font-medium <?= isActive('blog') ?> transition-colors rounded-lg hover:bg-gray-50">
                    Blog
                </a>

                <!-- Company Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-sm font-medium transition-colors flex items-center gap-1 rounded-lg hover:bg-gray-50 <?= isActive('about') ?: isActive('contact') ?: isActive('resources') ?>">
                        Company
                        <svg class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full right-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl shadow-gray-200/50 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 p-2">
                        <a href="<?= url('about') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            <span class="text-sm font-medium text-gray-700">About Us</span>
                        </a>
                        <a href="<?= url('resources') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            <span class="text-sm font-medium text-gray-700">Resources</span>
                        </a>
                        <a href="<?= url('contact') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-sm font-medium text-gray-700">Contact</span>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- CTA Buttons (Desktop) -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="<?= url('contact') ?>?type=audit" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors rounded-lg hover:bg-gray-50">
                    Free Audit
                </a>
                <a href="<?= url('contact') ?>" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-all shadow-sm">
                    Get Started
                    <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-xl hover:bg-gray-100 transition-colors" aria-label="Toggle menu">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="menu-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- ============================
         MOBILE MENU
         ============================ -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 max-h-[80vh] overflow-y-auto">
        <div class="max-w-7xl mx-auto px-4 py-4">

            <!-- Services Section -->
            <div class="mb-4">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-3 mb-2">Services</p>
                <div class="space-y-0.5">
                    <a href="<?= url('services/performance-marketing') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="w-9 h-9 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Performance Marketing</p>
                            <p class="text-[11px] text-gray-500">Meta Ads, Google Ads & full-funnel</p>
                        </div>
                    </a>
                    <a href="<?= url('services/shopify-growth') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="w-9 h-9 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Shopify Growth</p>
                            <p class="text-[11px] text-gray-500">CRO, store optimization & themes</p>
                        </div>
                    </a>
                    <a href="<?= url('services/shopify-operations') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Shopify Operations</p>
                            <p class="text-[11px] text-gray-500">Inventory, fulfillment & RTO</p>
                        </div>
                    </a>
                    <a href="<?= url('services/automation') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="w-9 h-9 bg-purple-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Automation Services</p>
                            <p class="text-[11px] text-gray-500">WhatsApp, email & workflows</p>
                        </div>
                    </a>
                    <a href="<?= url('services/technology') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                        <div class="w-9 h-9 bg-cyan-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Technology Development</p>
                            <p class="text-[11px] text-gray-500">Web, mobile & AI solutions</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-100 my-3"></div>

            <!-- Product Section -->
            <div class="mb-4">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-3 mb-2">Product</p>
                <a href="<?= url('products/whatsapp-shopify') ?>" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition-colors">
                    <div class="w-9 h-9 bg-green-50 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <p class="text-sm font-medium text-gray-900">WhatsApp Automation</p>
                            <span class="text-[9px] font-semibold bg-green-100 text-green-700 px-1.5 py-0.5 rounded uppercase">App</span>
                        </div>
                        <p class="text-[11px] text-gray-500">Cart recovery, COD verify & more</p>
                    </div>
                </a>
            </div>

            <div class="border-t border-gray-100 my-3"></div>

            <!-- Other Links -->
            <div class="mb-4">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-3 mb-2">Explore</p>
                <div class="space-y-0.5">
                    <a href="<?= url('real-estate-marketing-agency') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">Real Estate</a>
                    <a href="<?= url('case-studies') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">Case Studies</a>
                    <a href="<?= url('blog') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">Blog</a>
                    <a href="<?= url('resources') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">Resources</a>
                    <a href="<?= url('about') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">About Us</a>
                    <a href="<?= url('contact') ?>" class="block px-3 py-2.5 text-sm font-medium text-gray-700 rounded-xl hover:bg-gray-50 transition-colors">Contact</a>
                </div>
            </div>

            <div class="border-t border-gray-100 my-3"></div>

            <!-- Mobile CTAs -->
            <div class="flex gap-3 px-3 pb-2">
                <a href="<?= url('contact') ?>?type=audit" class="flex-1 text-center py-3 text-sm font-semibold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition-colors">
                    Free Audit
                </a>
                <a href="<?= url('contact') ?>" class="flex-1 text-center py-3 text-sm font-semibold text-white bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Spacer for fixed header -->
<div class="h-16 lg:h-[72px]"></div>