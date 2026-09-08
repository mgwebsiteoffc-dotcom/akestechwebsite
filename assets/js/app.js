/**
 * GrowthScale — Core JavaScript
 * Includes: Navigation, Animations, FAQ, Entry/Exit Popups
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initNavbarScroll();
    initScrollAnimations();
    initFaqAccordions();
    initEntryPopup();
    initExitPopup();
    initSmoothScroll();
});

/* =============================================
   MOBILE MENU
   ============================================= */
function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-open');
    const closeIcon = document.getElementById('menu-close');

    if (!btn || !menu) return;

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
}

/* =============================================
   NAVBAR SCROLL SHADOW
   ============================================= */
function initNavbarScroll() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    const update = () => {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 10);
    };

    window.addEventListener('scroll', update, { passive: true });
    update();
}

/* =============================================
   SCROLL ANIMATIONS
   ============================================= */
function initScrollAnimations() {
    const els = document.querySelectorAll('.animate-on-scroll');
    if (!els.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    els.forEach(el => observer.observe(el));
}

/* =============================================
   FAQ ACCORDION
   ============================================= */
function initFaqAccordions() {
    document.querySelectorAll('[data-faq-toggle]').forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('[data-faq-icon]');
            const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

            const group = btn.closest('[data-faq-group]');
            if (group) {
                group.querySelectorAll('[data-faq-toggle]').forEach(otherBtn => {
                    if (otherBtn !== btn) {
                        otherBtn.nextElementSibling.style.maxHeight = '0px';
                        otherBtn.querySelector('[data-faq-icon]')?.classList.remove('rotate-180');
                    }
                });
            }

            if (isOpen) {
                content.style.maxHeight = '0px';
                icon?.classList.remove('rotate-180');
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon?.classList.add('rotate-180');
            }
        });
    });
}

/* =============================================
   SMOOTH SCROLL
   ============================================= */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}

/* =============================================
   ENTRY POPUP
   Shows after 8 seconds for first-time visitors
   ============================================= */
function initEntryPopup() {
    const popup = document.getElementById('entry-popup');
    if (!popup) return;

    // Check if already shown in this session
    if (sessionStorage.getItem('entry_popup_shown')) return;

    // Check if already submitted (localStorage persists)
    if (localStorage.getItem('gs_lead_submitted')) return;

    // Don't show on contact or admin pages
    const path = window.location.pathname;
    if (path.includes('/contact') || path.includes('/admin')) return;

    // Show after delay
    const delay = 8000; // 8 seconds
    let timer = setTimeout(() => {
        showPopup('entry');
    }, delay);

    // If user scrolls 50%+ down, show sooner
    let scrollTriggered = false;
    window.addEventListener('scroll', () => {
        if (scrollTriggered) return;
        const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
        if (scrollPercent > 50) {
            scrollTriggered = true;
            clearTimeout(timer);
            showPopup('entry');
        }
    }, { passive: true });

    // Close handlers
    document.getElementById('entry-popup-close')?.addEventListener('click', () => closePopup('entry'));
    document.getElementById('entry-popup-overlay')?.addEventListener('click', () => closePopup('entry'));

    // Form submit
    document.getElementById('entry-popup-form')?.addEventListener('submit', () => {
        localStorage.setItem('gs_lead_submitted', 'true');
        sessionStorage.setItem('entry_popup_shown', 'true');
    });
}

/* =============================================
   EXIT INTENT POPUP
   Shows when user moves mouse to leave page
   ============================================= */
function initExitPopup() {
    const popup = document.getElementById('exit-popup');
    if (!popup) return;

    // Check if already shown
    if (sessionStorage.getItem('exit_popup_shown')) return;
    if (localStorage.getItem('gs_lead_submitted')) return;

    // Don't show on contact or admin pages
    const path = window.location.pathname;
    if (path.includes('/contact') || path.includes('/admin')) return;

    // Only on desktop (exit intent doesn't work on mobile)
    if (window.innerWidth < 1024) return;

    let exitTriggered = false;

    // Detect mouse leaving viewport from top
    document.addEventListener('mouseout', (e) => {
        if (exitTriggered) return;

        // Only trigger when mouse leaves from top
        if (e.clientY > 10) return;

        // Don't trigger if entry popup is visible
        const entryPopup = document.getElementById('entry-popup');
        if (entryPopup && !entryPopup.classList.contains('hidden')) return;

        // Minimum time on page (15 seconds)
        if (performance.now() < 15000) return;

        exitTriggered = true;
        showPopup('exit');
    });

    // Mobile: show on back button / scroll up fast
    if (window.innerWidth < 1024) {
        let lastScrollY = window.scrollY;
        let fastScrollCount = 0;

        window.addEventListener('scroll', () => {
            if (exitTriggered) return;

            const currentScrollY = window.scrollY;
            const diff = lastScrollY - currentScrollY;

            if (diff > 100) {
                fastScrollCount++;
                if (fastScrollCount >= 3 && performance.now() > 20000) {
                    exitTriggered = true;
                    showPopup('exit');
                }
            }

            lastScrollY = currentScrollY;
        }, { passive: true });
    }

    // Close handlers
    document.getElementById('exit-popup-close')?.addEventListener('click', () => closePopup('exit'));
    document.getElementById('exit-popup-overlay')?.addEventListener('click', () => closePopup('exit'));
    document.getElementById('exit-popup-dismiss')?.addEventListener('click', () => closePopup('exit'));

    // Form submit
    document.getElementById('exit-popup-form')?.addEventListener('submit', () => {
        localStorage.setItem('gs_lead_submitted', 'true');
        sessionStorage.setItem('exit_popup_shown', 'true');
    });
}

/* =============================================
   POPUP UTILITIES
   ============================================= */
function showPopup(type) {
    const popup = document.getElementById(type + '-popup');
    if (!popup) return;

    // Don't show if another popup is visible
    const otherType = type === 'entry' ? 'exit' : 'entry';
    const otherPopup = document.getElementById(otherType + '-popup');
    if (otherPopup && !otherPopup.classList.contains('hidden')) return;

    popup.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    sessionStorage.setItem(type + '_popup_shown', 'true');

    // Trap focus
    const firstInput = popup.querySelector('input[type="text"], input[type="email"]');
    if (firstInput) setTimeout(() => firstInput.focus(), 300);
}

function closePopup(type) {
    const popup = document.getElementById(type + '-popup');
    if (!popup) return;

    const modal = document.getElementById(type + '-popup-modal');
    if (modal) {
        modal.classList.remove('animate-popup-in');
        modal.classList.add('animate-popup-out');
    }

    setTimeout(() => {
        popup.classList.add('hidden');
        document.body.style.overflow = '';
        if (modal) {
            modal.classList.remove('animate-popup-out');
            modal.classList.add('animate-popup-in');
        }
    }, 200);
}

// Close popup on Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closePopup('entry');
        closePopup('exit');
    }
});

// Prevent popup re-show after form submit
document.querySelectorAll('#entry-popup-form, #exit-popup-form').forEach(form => {
    form?.addEventListener('submit', function() {
        localStorage.setItem('gs_lead_submitted', 'true');
    });
});