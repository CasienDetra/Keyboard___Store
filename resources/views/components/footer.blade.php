<footer class="footer-container bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white relative overflow-hidden" 
        role="contentinfo" 
        aria-label="Site footer"
        x-data="footerComponent()">
    
    <!-- Background Effects -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Main Footer Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        
        <!-- Top Section: Company Info & Newsletter -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            
            <!-- Company Information -->
            <div class="lg:col-span-1 space-y-6">
                <div class="footer-brand">
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Art-Store
                    </h2>
                    <p class="mt-4 text-gray-300 leading-relaxed max-w-md">
                    Discover Various Keyboard and Laptop that gain trust by official brand
                    </p>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info space-y-3" role="group" aria-label="Contact information">
                    <div class="flex items-center space-x-3 text-gray-300 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>137k Street, Krang Knong District, Phnom Penh</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-300 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+66123456789" class="hover:text-blue-400 transition-colors duration-300">+855 (0) 123-456-789</a>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-300 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:nuk385916@gmail.com" class="hover:text-blue-400 transition-colors duration-300">nuk385916@gmail.com</a>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="lg:col-span-1">
                <div class="grid grid-cols-2 gap-8">
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 text-white">Quick Links</h3>
                        <nav class="space-y-3" role="navigation" aria-label="Footer quick links">
                            <a href="/" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Home
                            </a>
                            <a href="/categories" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Categories
                            </a>
                            <a href="/products" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Products
                            </a>
                            <a href="/about" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                About Us
                            </a>
                            <a href="/contact" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Contact
                            </a>
                        </nav>
                    </div>

                    <!-- Support -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 text-white">Support</h3>
                        <nav class="space-y-3" role="navigation" aria-label="Footer support links">
                            <a href="/help" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Help Center
                            </a>
                            <a href="/faq" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                FAQ
                            </a>
                            <a href="/shipping" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Shipping Info
                            </a>
                            <a href="/returns" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Returns
                            </a>
                            <a href="/support" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300 transform hover:translate-x-1">
                                Support
                            </a>
                        </nav>
                    </div>
                </div>


                <div class="lg:hidden mt-8 space-y-4">
                   
                    <div class="border-t border-gray-700 pt-4">
                        <button @click="toggleSection('legal')" 
                                class="flex items-center justify-between w-full text-left text-lg font-semibold text-white"
                                :aria-expanded="sections.legal"
                                aria-controls="legal-links">
                            <span>Legal</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" 
                                 :class="{ 'rotate-180': sections.legal }" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="sections.legal" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100 transform translate-y-0"
                             x-transition:leave-end="opacity-0 transform -translate-y-2"
                             id="legal-links"
                             class="mt-3 space-y-3">
                            <a href="/privacy" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300">Privacy Policy</a>
                            <a href="/terms" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300">Terms of Service</a>
                            <a href="/cookies" class="footer-link block text-gray-300 hover:text-blue-400 transition-all duration-300">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Signup -->
            <div class="lg:col-span-1">
                <div class="newsletter-section">
                    <h3 class="text-lg font-semibold mb-4 text-white">Stay Updated</h3>
                    <p class="text-gray-300 mb-6">Subscribe to our newsletter for the latest art trends, exclusive offers, and creative inspiration.</p>
                    
                    <form @submit.prevent="submitNewsletter" class="newsletter-form space-y-4">
                        <div class="relative">
                            <label for="newsletter-email" class="sr-only">Email address</label>
                            <input type="email" 
                                   id="newsletter-email"
                                   x-model="email"
                                   placeholder="Enter your email"
                                   required
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-black placeholder-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 backdrop-blur-sm"
                                   :class="{ 'border-red-500': emailError, 'border-green-500': emailSuccess }"
                                   aria-describedby="email-error email-success">
                            
                            
                            <div x-show="emailError" 
                                 x-transition
                                 id="email-error"
                                 class="absolute -bottom-6 left-0 text-red-400 text-sm"
                                 role="alert"
                                 aria-live="polite">
                                <span x-text="emailError"></span>
                            </div>
                            <div x-show="emailSuccess" 
                                 x-transition
                                 id="email-success"
                                 class="absolute -bottom-6 left-0 text-green-400 text-sm"
                                 role="status"
                                 aria-live="polite">
                                <span x-text="emailSuccess"></span>
                            </div>
                        </div>
                        
                        <button type="submit" 
                                :disabled="isSubmitting"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none"
                                :class="{ 'animate-pulse': isSubmitting }">
                            <span x-show="!isSubmitting">Subscribe Now</span>
                            <span x-show="isSubmitting" class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Subscribing...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="border-t border-gray-700 pt-8 mb-8">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                
                <!-- Social Media  -->
                <div class="social-media">
                    <h4 class="text-sm font-semibold text-gray-400 mb-4 text-center lg:text-left">Follow Us</h4>
                    <div class="flex space-x-4 justify-center lg:justify-start" role="group" aria-label="Social media links">
                        <a href="https://facebook.com/" 
                           class="social-icon group bg-gray-800 hover:bg-blue-600 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                           aria-label="Follow us on Facebook"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/" 
                           class="social-icon group bg-gray-800 hover:bg-blue-400 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                           aria-label="Follow us on Twitter"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/" 
                           class="social-icon group bg-gray-800 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                           aria-label="Follow us on Instagram"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"/>
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/" 
                           class="social-icon group bg-gray-800 hover:bg-blue-700 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                           aria-label="Follow us on LinkedIn"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/" 
                           class="social-icon group bg-gray-800 hover:bg-red-600 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:shadow-lg"
                           aria-label="Subscribe to our YouTube channel"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <nav class="flex space-x-6" role="navigation" aria-label="Footer legal links">
                        <a href="/privacy" class="text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a>
                        <a href="/terms" class="text-gray-400 hover:text-white transition-colors duration-300">Terms of Service</a>
                        <a href="/cookies" class="text-gray-400 hover:text-white transition-colors duration-300">Cookie Policy</a>
                    </nav>
                </div>
                <!-- Theme Toggle -->
                <div class="theme-toggle">
                    <button @click="toggleTheme" 
                            class="flex items-center space-x-2 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105"
                            :aria-label="isDark ? 'Switch to light theme' : 'Switch to dark theme'">
                        <svg x-show="isDark" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <svg x-show="!isDark" class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        <span class="text-sm text-gray-300" x-text="isDark ? 'Light' : 'Dark'"></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Bottom Section: Copyright -->
        <div class="border-t border-gray-700 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="copyright text-gray-400 text-sm text-center md:text-left">
                    <p>&copy; <span x-text="currentYear"></span> Art-Store. All rights reserved. Crafted with ❤️ by Yanouk.</p>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button -->
    <button @click="scrollToTop" 
            x-show="showScrollTop"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-2"
            class="fixed bottom-6 right-6 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 z-20"
            aria-label="Scroll to top">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>
</footer>

<script>
function footerComponent() {
    return {
        // Data 
        email: '',
        emailError: '',
        emailSuccess: '',
        isSubmitting: false,
        currentYear: new Date().getFullYear(),
        isDark: true,
        showScrollTop: false,
        sections: {
            legal: false
        },
        init() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                this.isDark = savedTheme === 'dark';
            }
            this.applyTheme();
            window.addEventListener('scroll', () => {
                this.showScrollTop = window.pageYOffset > 300;
            });
        },
        async submitNewsletter() {
            if (!this.validateEmail(this.email)) {
                this.emailError = 'Please enter a valid email address';
                this.emailSuccess = '';
                return;
            }

            this.isSubmitting = true;
            this.emailError = '';
            this.emailSuccess = '';
            try {
                await new Promise(resolve => setTimeout(resolve, 2000));
                this.emailSuccess = 'Thank you for subscribing!';
                this.email = '';
                setTimeout(() => {
                    this.emailSuccess = '';
                }, 5000);
                
            } catch (error) {
                this.emailError = 'Something went wrong. Please try again.';
            } finally {
                this.isSubmitting = false;
            }
        },
        // Email validation
        validateEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        },
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        },

        // Toggle mobile sections
        toggleSection(section) {
            this.sections[section] = !this.sections[section];
        }
    }
}
</script>
