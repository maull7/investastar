/**
 * InvestaStar - Interactive Enhancement Layer
 * Professional-grade JavaScript for premium UX
 * @version 1.0.0
 */

(function() {
    'use strict';

    // ============================================
    // Utility Functions
    // ============================================
    
    const debounce = (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };

    const throttle = (func, limit) => {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    };

    // ============================================
    // Mobile Menu Controller
    // ============================================
    
    const MobileMenuController = {
        menu: null,
        button: null,
        isOpen: false,

        init() {
            this.menu = document.getElementById('mobileMenu');
            this.button = document.querySelector('[onclick="toggleMobileMenu()"]');
            
            if (!this.menu || !this.button) return;
            
            // Handle clicks outside menu to close
            document.addEventListener('click', (e) => {
                if (this.isOpen && !this.menu.contains(e.target) && !this.button.contains(e.target)) {
                    this.close();
                }
            });
            
            // Close on escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.isOpen) {
                    this.close();
                }
            });
            
            // Close on navigation
            this.menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => this.close());
            });
        },

        toggle() {
            this.isOpen ? this.close() : this.open();
        },

        open() {
            this.menu.classList.add('active');
            this.button.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
            this.isOpen = true;
        },

        close() {
            this.menu.classList.remove('active');
            this.button.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            this.isOpen = false;
        }
    };

    // ============================================
    // Scroll Effects Manager
    // ============================================
    
    const ScrollEffects = {
        navbar: null,
        lastScroll: 0,
        scrollThreshold: 100,

        init() {
            this.navbar = document.querySelector('nav');
            if (!this.navbar) return;

            window.addEventListener('scroll', throttle(() => {
                this.handleScroll();
            }, 100));
            
            // Initial check
            this.handleScroll();
        },

        handleScroll() {
            const currentScroll = window.pageYOffset;
            
            // Add scrolled class for styling
            if (currentScroll > 50) {
                this.navbar.classList.add('scrolled');
            } else {
                this.navbar.classList.remove('scrolled');
            }
            
            // Hide navbar on scroll down, show on scroll up
            if (currentScroll > this.scrollThreshold) {
                if (currentScroll > this.lastScroll) {
                    // Scrolling down
                    this.navbar.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up
                    this.navbar.style.transform = 'translateY(0)';
                }
            }
            
            this.lastScroll = currentScroll;
        }
    };

    // ============================================
    // Intersection Observer for Reveal Animations
    // ============================================
    
    const RevealOnScroll = {
        observer: null,

        init() {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Once revealed, stop observing
                        this.observer.unobserve(entry.target);
                    }
                });
            }, options);

            // Observe all reveal elements
            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
                this.observer.observe(el);
            });
        }
    };

    // ============================================
    // Smooth Scroll to Anchor Links
    // ============================================
    
    const SmoothScroll = {
        init() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', (e) => {
                    const href = anchor.getAttribute('href');
                    
                    // Ignore empty anchors
                    if (href === '#' || !href) return;
                    
                    const target = document.querySelector(href);
                    if (!target) return;
                    
                    e.preventDefault();
                    
                    const navHeight = document.querySelector('nav')?.offsetHeight || 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = targetPosition - navHeight - 20;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Update URL without jumping
                    history.pushState(null, null, href);
                    
                    // Focus the target for accessibility
                    target.setAttribute('tabindex', '-1');
                    target.focus({ preventScroll: true });
                });
            });
        }
    };

    // ============================================
    // Card Interaction Effects
    // ============================================
    
    const CardInteractions = {
        init() {
            const cards = document.querySelectorAll('.card-hover');
            
            cards.forEach(card => {
                // Mouse move parallax effect
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * 5;
                    const rotateY = ((centerX - x) / centerX) * 5;
                    
                    card.style.transform = `
                        perspective(1000px)
                        rotateX(${rotateX}deg)
                        rotateY(${rotateY}deg)
                        translateY(-12px)
                        scale(1.01)
                    `;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = '';
                });
            });
        }
    };

    // ============================================
    // Lazy Loading Images
    // ============================================
    
    const LazyLoader = {
        observer: null,

        init() {
            const images = document.querySelectorAll('img[data-src]');
            if (images.length === 0) return;

            const options = {
                root: null,
                rootMargin: '50px',
                threshold: 0.01
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        img.classList.add('loaded');
                        this.observer.unobserve(img);
                    }
                });
            }, options);

            images.forEach(img => this.observer.observe(img));
        }
    };

    // ============================================
    // Performance Monitoring
    // ============================================
    
    const PerformanceMonitor = {
        init() {
            if ('PerformanceObserver' in window) {
                // Monitor Largest Contentful Paint
                try {
                    const lcpObserver = new PerformanceObserver((list) => {
                        const entries = list.getEntries();
                        const lastEntry = entries[entries.length - 1];
                        console.log('LCP:', lastEntry.renderTime || lastEntry.loadTime);
                    });
                    lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });
                } catch (e) {
                    // Silently fail if not supported
                }
            }
        }
    };

    // ============================================
    // Form Validation Enhancement
    // ============================================
    
    const FormEnhancer = {
        init() {
            const forms = document.querySelectorAll('form');
            
            forms.forEach(form => {
                const inputs = form.querySelectorAll('input, textarea');
                
                inputs.forEach(input => {
                    // Add floating label effect
                    input.addEventListener('focus', () => {
                        input.parentElement?.classList.add('focused');
                    });
                    
                    input.addEventListener('blur', () => {
                        if (!input.value) {
                            input.parentElement?.classList.remove('focused');
                        }
                    });
                    
                    // Real-time validation feedback
                    input.addEventListener('invalid', (e) => {
                        e.preventDefault();
                        input.classList.add('error');
                    });
                    
                    input.addEventListener('input', () => {
                        if (input.checkValidity()) {
                            input.classList.remove('error');
                            input.classList.add('valid');
                        }
                    });
                });
            });
        }
    };

    // ============================================
    // Initialize All Features
    // ============================================
    
    const init = () => {
        // Check if DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
            return;
        }

        // Initialize all features
        MobileMenuController.init();
        ScrollEffects.init();
        SmoothScroll.init();
        
        // Initialize with slight delay to ensure DOM is fully painted
        requestAnimationFrame(() => {
            RevealOnScroll.init();
            CardInteractions.init();
            LazyLoader.init();
            FormEnhancer.init();
            
            // Performance monitoring in development only
            if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
                PerformanceMonitor.init();
            }
        });

        // Add loaded class to body
        document.body.classList.add('loaded');
    };

    // ============================================
    // Global Toggle Function (for onclick)
    // ============================================
    
    window.toggleMobileMenu = () => {
        MobileMenuController.toggle();
    };

    // Start initialization
    init();

})();
