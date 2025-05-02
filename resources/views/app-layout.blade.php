<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="keywords" content="@yield('keywords', '')">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">


    <!-- Google tag (gtag.js) -->


    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#ffffff] text-paragraph font-PlayfairDisplayRegular">

{{--Navigation Bar--}}



<main class="min-h-screen">
    @yield('main')
</main>

{{--Footer element--}}
<footer class="bg-[#010101] text-[#e2d9ce] pt-12 pb-8">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Footer Grid -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">

            <!-- Company Info -->
            <div class="space-y-4">
                <img src="{{ asset('images/logo.png') }}" alt="Urban Drive" class="h-10 w-auto">
                <p class="text-sm leading-relaxed">Urban Drive Motors - Your premier destination for quality vehicles and exceptional service since 2010.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-[#e86e25] hover:text-white transition">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-[#e86e25] hover:text-white transition">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-[#e86e25] hover:text-white transition">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-[#e86e25] hover:text-white transition">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-[#e86e25] mb-4 border-b border-[#e86e25] pb-2">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#e86e25] transition">Home</a></li>
                    <li><a href="#" class="hover:text-[#e86e25] transition">Inventory</a></li>
                    <li><a href="#" class="hover:text-[#e86e25] transition">Financing</a></li>
                    <li><a href="#" class="hover:text-[#e86e25] transition">Trade-In</a></li>
                    <li><a href="#" class="hover:text-[#e86e25] transition">Testimonials</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold text-[#e86e25] mb-4 border-b border-[#e86e25] pb-2">Contact Us</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-[#e86e25]"></i>
                        <span>123 Auto Mall Blvd, Motor City, MC 12345</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-3 text-[#e86e25]"></i>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-[#e86e25]"></i>
                        <span>info@urbandrive.com</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock mr-3 text-[#e86e25]"></i>
                        <span>Mon-Sat: 9AM - 7PM</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold text-[#e86e25] mb-4 border-b border-[#e86e25] pb-2">Newsletter</h3>
                <p class="mb-4 text-sm">Subscribe to get updates on new arrivals and special offers.</p>
                <form class="space-y-3">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded bg-[#333] border border-[#555] focus:outline-none focus:border-[#e86e25]">
                    <button type="submit" class="bg-[#e86e25] hover:bg-[#d1621f] text-white font-medium py-2 px-6 rounded transition duration-300">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-[#333] pt-6">
            <div class="flex flex-col md:flex-row items-center md:items-center justify-between w-full">
                <!-- Left: Copyright -->
                <div class="flex-1 flex justify-start mb-2 md:mb-0">
                    <p class="text-sm">&copy; <span id="year"></span> Urban Drive Motors. All rights reserved.</p>
                </div>
                <!-- Center: Policy, Terms, Sitemap -->
                <div class="flex-1 flex justify-center space-x-6 mb-2 md:mb-0">
                    <a href="#" class="text-sm hover:text-[#e86e25] transition">Privacy Policy</a>
                    <a href="#" class="text-sm hover:text-[#e86e25] transition">Terms of Service</a>
                    <a href="#" class="text-sm hover:text-[#e86e25] transition">Sitemap</a>
                </div>
                <!-- Right: Powered By -->
                <div class="flex-1 flex justify-end">
      <span class="text-sm">
        Powered by
        <a href="https://www.revoswifttech.co.ke/" target="_blank" class="hover:text-[#e86e25] underline transition">
          RevoSwift Technologies
        </a>
      </span>
                </div>
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

