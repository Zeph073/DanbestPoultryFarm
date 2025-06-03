<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="keywords" content="@yield('keywords', '')">
    <link rel="icon" href="{{ asset('images/logo.png') }}">


    <!-- Google tag (gtag.js) -->


    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#ffffff] text-paragraph font-PlayfairDisplayRegular">

{{--Navigation Bar--}}
<nav class="bg-black text-white shadow-lg py-2 md:py-4 relative top-0 z-50 border-b-4 border-[#f5d118]">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Labl-fashion Logo" class="h-18 md:h-20 lg:h-24 transition-all duration-300">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:ml-10 md:flex md:items-center md:space-x-8">
                <a href="/" class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                <a href="/about-us" class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                    <i class="fas fa-info-circle mr-2"></i> About Us
                </a>

                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                        <i class="fas fa-egg mr-2"></i> Products
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-64 origin-top-left rounded-md shadow-lg bg-black border border-[#f5d118] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <div class="py-1">
                            <a href="/products/live-chicks" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Live Day-Old Chicks
                            </a>
                            <a href="/products/grower-chickens" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Grower Chickens (4-6 weeks)
                            </a>
                            <a href="/products/laying-hens" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Mature Laying Hens
                            </a>
                            <a href="/products/breeding-stock" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Breeding Cocks & Hens
                            </a>
                            <a href="/products/kienyeji-chickens" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Indigenous (Kienyeji)
                            </a>
                            <a href="/products/broiler-chickens" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Broiler Chickens
                            </a>
                            <a href="/products/other-poultry" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Other Poultry (Ducks, Turkeys)
                            </a>
                            <a href="/products/fresh-eggs" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Fresh Table Eggs
                            </a>
                            <a href="/products/hatching-eggs" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Fertile Hatching Eggs
                            </a>
                            <a href="/products/chicken-meat" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Fresh Chicken Meat
                            </a>
                            <a href="/products/chicken-manure" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Chicken Manure
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                        <i class="fas fa-concierge-bell mr-2"></i> Services
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-72 origin-top-left rounded-md shadow-lg bg-black border border-[#f5d118] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <div class="py-1">
                            <a href="/services/poultry-housing" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Housing Construction
                            </a>
                            <a href="/services/vaccination" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Vaccination & Health Management
                            </a>
                            <a href="/services/training" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Farming Training
                            </a>
                            <a href="/services/bulk-supply" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Bulk Supply to Farmers
                            </a>
                            <a href="/services/delivery" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Delivery Services
                            </a>
                            <a href="/services/equipment" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Equipment
                            </a>
                            <a href="/services/feeds-supplements" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Starter Feeds & Supplements
                            </a>
                            <a href="/services/consulting" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Farming Consultancy
                            </a>
                        </div>
                    </div>
                </div>

                <a href="/blog" class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                    <i class="fas fa-blog mr-2"></i> Blog
                </a>
                <a href="/faqs" class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                    <i class="fas fa-question-circle mr-2"></i> FAQs
                </a>
                <a href="/contact-us" class="px-3 py-2 text-white hover:text-[#f5d118] transition-colors duration-300 flex items-center">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-[#f5d118] hover:text-white hover:bg-gray-700 focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 z-40 bg-black bg-opacity-95 h-screen w-full transform -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="relative w-full h-full overflow-y-auto">
            <div class="absolute top-4 left-4">
                <img src="{{ asset('images/logo.png') }}" alt="Danbest Poultry Farm" class="h-20 w-auto">
            </div>

            <div class="absolute top-4 right-4">
                <button id="mobile-menu-close" type="button" class="flex items-center justify-center p-2 rounded-md text-[#f5d118] hover:text-white focus:outline-none">
                    <span class="sr-only">Close menu</span>
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>


            <div class="h-full py-16 px-6 mt-18">
                <div class="flex flex-col space-y-6">
                    <a href="/" class="text-white hover:text-[#f5d118] text-xl font-medium flex items-center border-b border-gray-800 pb-4">
                        <i class="fas fa-home mr-3"></i> Home
                    </a>
                    <a href="/about-us" class="text-white hover:text-[#f5d118] text-xl font-medium flex items-center border-b border-gray-800 pb-4">
                        <i class="fas fa-info-circle mr-3"></i> About Us
                    </a>

                    <!-- Products Accordion -->
                    <div>
                        <button id="mobile-products-button" class="w-full flex justify-between items-center text-white hover:text-[#f5d118] text-xl font-medium border-b border-gray-800 pb-4">
                            <span class="flex items-center">
                                <i class="fas fa-egg mr-3"></i> Products
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div id="mobile-products-menu" class="hidden pl-10 pt-3 space-y-3">
                            <a href="/products/kienyeji-chicks" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Kienyeji Chicks
                            </a>
                            <a href="/products/kuroiler-chicks" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Kuroiler Chicks
                            </a>
                            <a href="/products/kari-improved" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> KARI Improved
                            </a>
                            <a href="/products/white-leghorn" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> White Leghorn
                            </a>
                            <a href="/products/duck-breeds" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Duck Breeds
                            </a>
                            <a href="/products/turkey-farming" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Turkey Farming
                            </a>
                            <a href="/products/hatching-eggs" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Hatching Eggs
                            </a>
                        </div>
                    </div>

                    <!-- Services Accordion -->
                    <div>
                        <button id="mobile-services-button" class="w-full flex justify-between items-center text-white hover:text-[#f5d118] text-xl font-medium border-b border-gray-800 pb-4">
                            <span class="flex items-center">
                                <i class="fas fa-concierge-bell mr-3"></i> Services
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div id="mobile-services-menu" class="hidden pl-10 pt-3 space-y-3">
                            <a href="/services/incubation" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Incubation Service
                            </a>
                            <a href="/services/training" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Farmers Training
                            </a>
                            <a href="/services/vaccination" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Vaccination Services
                            </a>
                            <a href="/services/farm-visit" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Farm Visit
                            </a>
                            <a href="/services/after-sale" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> After-sale Services
                            </a>
                            <a href="/services/consulting" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Consulting Services
                            </a>
                            <a href="/services/youth-mentorship" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Youth Mentorship
                            </a>
                            <a href="/services/chicks-delivery" class="block text-gray-300 hover:text-[#f5d118]">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i> Chicks Delivery
                            </a>
                        </div>
                    </div>

                    <a href="/blog" class="text-white hover:text-[#f5d118] text-xl font-medium flex items-center border-b border-gray-800 pb-4">
                        <i class="fas fa-blog mr-3"></i> Blog
                    </a>
                    <a href="/faqs" class="text-white hover:text-[#f5d118] text-xl font-medium flex items-center border-b border-gray-800 pb-4">
                        <i class="fas fa-question-circle mr-3"></i> FAQs
                    </a>
                    <a href="/contact-us" class="text-white hover:text-[#f5d118] text-xl font-medium flex items-center border-b border-gray-800 pb-4">
                        <i class="fas fa-envelope mr-3"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.remove('-translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        document.body.style.overflow = 'hidden';
    });

    mobileMenuClose.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
        mobileMenu.classList.remove('translate-x-0');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 300);
    });

    // Mobile dropdown functionality
    const mobileProductsButton = document.getElementById('mobile-products-button');
    const mobileProductsMenu = document.getElementById('mobile-products-menu');
    const mobileServicesButton = document.getElementById('mobile-services-button');
    const mobileServicesMenu = document.getElementById('mobile-services-menu');

    if (mobileProductsButton) {
        mobileProductsButton.addEventListener('click', () => {
            mobileProductsMenu.classList.toggle('hidden');
            const icon = mobileProductsButton.querySelector('.fa-chevron-down');
            icon.classList.toggle('transform');
            icon.classList.toggle('rotate-180');
        });
    }

    if (mobileServicesButton) {
        mobileServicesButton.addEventListener('click', () => {
            mobileServicesMenu.classList.toggle('hidden');
            const icon = mobileServicesButton.querySelector('.fa-chevron-down');
            icon.classList.toggle('transform');
            icon.classList.toggle('rotate-180');
        });
    }
</script>



<main class="min-h-screen">
    @yield('main')
</main>

{{--Footer element--}}
<footer class="bg-black text-yellow-50 pt-12 pb-6 px-8 border-t-4 border-[#f5d118]">
    <div class="max-w-8xl mx-auto">
        <!-- Footer Content Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-10">

            <!-- Brand Column -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Danbest Poultry Farm" class="h-20 md:h-24 w-auto">
                <p class="text-sm opacity-80">
                    At Danbest Poultry Farm, we are dedicated to raising high-quality live poultry and providing fresh poultry products that meet the needs of Kenyan farmers and households. Our farm specializes in indigenous (kienyeji) chickens, broilers, and layers, all raised under humane and sustainable conditions to ensure natural hardiness, rich flavor, and superior nutrition. We also offer expert poultry farming services to support your success in poultry rearing.
                </p>



                <h3 class="text-[#f5d118] font-semibold text-lg mt-6 ">Our Socials</h3>

                <div class="flex space-x-4">
                    <a href="#" target="_blank" class="text-gray-300 hover:text-[#f5d118] transition-colors text-xl">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="text-gray-300 hover:text-[#f5d118] transition-colors text-xl">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" target="_blank" class="text-gray-300 hover:text-[#f5d118] transition-colors text-xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="text-gray-300 hover:text-[#f5d118] transition-colors text-xl">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>




            <!-- Products Column -->
            <div>
                <h3 class="text-lg font-bold text-[#f5d118] mb-4 border-b border-[#f5d118] pb-2">Our Products</h3>
                <ul class="space-y-2">
                    <li><a href="/products/live-chicks" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Live day-old chicks</a></li>
                    <li><a href="/products/grower-chickens" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Grower chickens (4-6 weeks)</a></li>
                    <li><a href="/products/laying-hens" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Mature laying hens</a></li>
                    <li><a href="/products/breeding-stock" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Breeding cocks and hens</a></li>
                    <li><a href="/products/kienyeji-chickens" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Indigenous (kienyeji) chickens</a></li>
                    <li><a href="/products/broiler-chickens" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Broiler chickens</a></li>
                    <li><a href="/products/other-poultry" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Other poultry (ducks, turkeys)</a></li>
                    <li><a href="/products/fresh-eggs" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Fresh table eggs</a></li>
                    <li><a href="/products/hatching-eggs" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Fertile hatching eggs</a></li>
                    <li><a href="/products/chicken-meat" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Fresh chicken meat</a></li>
                    <li><a href="/products/chicken-manure" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Chicken manure (organic fertilizer)</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div>
                <h3 class="text-lg font-bold text-[#f5d118] mb-4 border-b border-[#f5d118] pb-2">Our Services</h3>
                <ul class="space-y-2">
                    <li><a href="/services/poultry-housing" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Poultry housing construction</a></li>
                    <li><a href="/services/vaccination" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Vaccination & health management</a></li>
                    <li><a href="/services/training" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Poultry farming training</a></li>
                    <li><a href="/services/bulk-supply" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Bulk supply to farmers & institutions</a></li>
                    <li><a href="/services/delivery" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Delivery services</a></li>
                    <li><a href="/services/equipment" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Poultry equipment & accessories</a></li>
                    <li><a href="/services/feeds-supplements" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Starter feeds & supplements</a></li>
                </ul>
            </div>

            <!-- Quick Links Column -->
            <div>
                <h3 class="text-lg font-bold text-[#f5d118] mb-4 border-b border-[#f5d118] pb-2">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Home</a></li>
                    <li><a href="/about-us" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            About Us</a></li>
                    <li><a href="/blog" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Blog</a></li>
                    <li><a href="/faqs" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            FAQs</a></li>
                    <li><a href="/contact-us" class="text-gray-300 hover:text-[#f5d118] hover:underline transition-colors text-sm flex items-center">
                            <svg class="w-3 h-3 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                            Contact Us</a></li>
                </ul>

            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-bold text-[#f5d118] mb-4 border-b border-[#f5d118] pb-2">Newsletter</h3>
                <p class="text-xs text-gray-300 mb-3">Subscribe for poultry tips & offers</p>
                <form method="POST" action="{{ route('newsletter.subscribe') }}" class="flex">
                    @csrf
                    <input
                        type="email"
                        name="email"
                        required
                        placeholder="Your email"
                        class="px-3 py-2 text-xs text-gray-900 bg-white w-full rounded-l focus:outline-none focus:ring-2 focus:ring-[#f5d118]"
                    >
                    <button
                        type="submit"
                        class="bg-[#f5d118] text-black px-4 py-2 text-xs font-bold rounded-r hover:bg-yellow-600 transition-colors focus:outline-none focus:ring-2 focus:ring-black"
                    >
                        Subscribe
                    </button>
                </form>

                @error('email')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror

                @if(session('success'))
                    <div class="text-green-600 text-xs mt-2">{{ session('success') }}</div>
                @endif

            </div>


        </div>

        <!-- Copyright Section -->
        <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-xs text-gray-400 mb-3 md:mb-0">
                Copyright © <span id="year"></span> Danbest Poultry Farm. All rights reserved.
            </p>
            <div class="flex space-x-4 mb-3 md:mb-0">
                <a href="/" class="text-xs text-gray-400 hover:text-[#f5d118] transition-colors">Privacy Policy</a>
                <a href="/" class="text-xs text-gray-400 hover:text-[#f5d118] transition-colors">Terms of Service</a>
                <a href="/sitemap.xml" class="text-xs text-gray-400 hover:text-[#f5d118] transition-colors">Sitemap</a>
            </div>
            <div class="text-xs text-gray-400">
                Powered By
                <a href="https://revoswifttech.co.ke" target="_blank" rel="noopener noreferrer" class="hover:text-[#f5d118] transition-colors font-semibold">
                    RevoSwift Technologies
                </a>
            </div>
        </div>

        <script>
            // Dynamically update the year
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>
    </div>
</footer>

@yield('js-scripts')
</body>
</html>

