@extends('app-layout')
@section('title', 'Poultry Housing Construction | DanBest Poultry Farm')
@section('description', 'Professional poultry house construction services for optimal bird health and productivity')
@section('keywords', 'poultry housing, chicken coop construction, poultry farm design Kenya')
@section('main')
    <!-- Hero Section -->
    <section class="relative text-white overflow-hidden h-full">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0 brightness-50">
            <source src="https://videos.pexels.com/video-files/10998151/10998151-uhd_2560_1440_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col justify-center items-center text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-[#f5d118]">Poultry Housing</span> Construction
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Custom-designed poultry houses for optimal bird health, productivity, and farm efficiency
            </p>
            <div class="mt-8">
                <a href="/contact-us" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-8 rounded-lg text-center transition duration-300 transform hover:scale-105">
                    Request Consultation
                </a>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent opacity-20 z-10"></div>
    </section>


    <div class="mx-auto px-4 flex flex-col lg:flex-row gap-8 py-8">
        <!-- Side Navbar: Explore Our Other Services -->
        <aside class="lg:w-1/4 w-full mb-8 lg:mb-0">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4 border-b-2 border-[#f5d118] pb-2">Explore Our Other Services</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/poultry-housing-construction" class="flex items-center px-2 py-2 rounded-lg text-white bg-[#f5d118] bg-opacity-10 font-bold">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Housing Construction
                        </a>
                    </li>
                    <li>
                        <a href="/vaccination-health" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Vaccination & Health Management
                        </a>
                    </li>
                    <li>
                        <a href="/poultry-training" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Farming Training
                        </a>
                    </li>
                    <li>
                        <a href="/bulk-supply" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Bulk Supply to Farmers
                        </a>
                    </li>
                    <li>
                        <a href="/delivery-services" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Delivery Services
                        </a>
                    </li>
                    <li>
                        <a href="/farming-consultancy" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Farming Consultancy
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="lg:w-3/4 w-full">
            <!-- Service Intro -->
            <section class="py-8 bg-white">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2 w-full">
                        <div class="bg-gray-100 rounded-xl overflow-hidden h-80 flex items-center justify-center">
                            <img src="{{ asset('images/poultry-housing.png') }}" alt="Modern poultry house" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full mt-8 md:mt-0">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-6">Expert Poultry House Construction</h2>
                        <p class="text-gray-700 mb-6">
                            At DanBest Poultry Farm, we design and build poultry houses that maximize bird welfare, operational efficiency, and long-term durability. Our constructions are tailored to Kenya's climate and your specific farming needs.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Custom designs for broilers, layers, or kienyeji chickens</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Optimal ventilation and temperature control systems</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Durable materials suited for local weather conditions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Design Options -->
            <section class="py-8 bg-gray-50">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Our Housing Design Options</h2>
                    <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Option 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <img src="https://kukufarm.com/wp-content/uploads/2023/08/Deep-litter-poultry-housing-system.webp" alt="Deep Litter System" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">Deep Litter System</h3>
                            <p class="text-gray-700 mb-4">
                                Ideal for small to medium-scale farms with natural ventilation and easy waste management.
                            </p>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Capacity: 500-5,000 birds</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Low maintenance design</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Natural ventilation system</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Option 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <img src="https://chickenscage.com/uploads/images/battery-cage-system.jpg" alt="Battery Cage System" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">Battery Cage System</h3>
                            <p class="text-gray-700 mb-4">
                                High-density housing for commercial egg production with automated feeding systems.
                            </p>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Capacity: 1,000-20,000 birds</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Automated feeding options</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Egg collection efficiency</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Option 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <img src="https://www.plamondon.com/wp/wp-content/uploads/2016/05/grass-fed-hens.jpg" alt="Free-Range Design" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">Free-Range Design</h3>
                            <p class="text-gray-700 mb-4">
                                For premium kienyeji chicken production with access to outdoor areas.
                            </p>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Capacity: 100-2,000 birds</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Predator-proof fencing</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-[#f5d118] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Natural foraging areas</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Construction Process -->
            <section class="py-16 text-[#1b3c4d] bg-gradient-to-b from-white to-gray-50">
                <div class="max-w-5xl mx-auto px-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
                        Our <span class="text-[#f5d118]">Construction Process</span>
                    </h2>

                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute h-full w-1 bg-[#f5d118] left-4 md:left-1/2 md:-translate-x-1/2 rounded"></div>

                        <!-- Step 1 -->
                        <div class="flex flex-col md:flex-row items-center mb-16 relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 1</h3>
                                <h4 class="text-xl font-bold mt-1">Site Assessment</h4>
                                <p class="mt-2 max-w-md mx-auto md:mx-0">
                                    We evaluate your land for topography, drainage, wind direction, and accessibility to design the optimal housing solution.
                                </p>
                            </div>
                            <!-- Dot -->
                            <div class="absolute left-0 md:static w-8 h-8 rounded-full bg-[#f5d118] border-4 border-white shadow-md z-10 flex items-center justify-center text-white font-bold">
                                1
                            </div>
                            <!-- Empty Right -->
                            <div class="md:w-1/2 md:pl-12"></div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex flex-col md:flex-row items-center mb-16 relative">
                            <!-- Empty Left -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0"></div>
                            <!-- Dot -->
                            <div class="absolute left-0 md:static w-8 h-8 rounded-full bg-[#f5d118] border-4 border-white shadow-md z-10 flex items-center justify-center text-white font-bold">
                                2
                            </div>
                            <!-- Right Content -->
                            <div class="md:w-1/2 md:pl-12 pl-12 md:pl-0 max-w-md mx-auto md:mx-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 2</h3>
                                <h4 class="text-xl font-bold mt-1">Custom Design</h4>
                                <p class="mt-2">
                                    Our team creates a tailored housing plan, considering your bird type, farm goals, and budget for maximum results.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col md:flex-row items-center relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0 max-w-md mx-auto md:mx-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 3</h3>
                                <h4 class="text-xl font-bold mt-1">Construction & Handover</h4>
                                <p class="mt-2">
                                    We build your poultry house with quality materials, keeping you updated every step, and hand over a ready-to-use facility.
                                </p>
                            </div>
                            <!-- Dot -->
                            <div class="absolute left-0 md:static w-8 h-8 rounded-full bg-[#f5d118] border-4 border-white shadow-md z-10 flex items-center justify-center text-white font-bold">
                                3
                            </div>
                            <!-- Empty Right -->
                            <div class="md:w-1/2 md:pl-12"></div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Why Choose Us -->
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto px-6 max-w-5xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Why Choose DanBest for Your Construction?</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-hard-hat text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Proven Expertise</h3>
                            <p class="text-gray-700 text-sm">Years of experience in poultry housing and farm management across Kenya.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-tools text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Quality Materials</h3>
                            <p class="text-gray-700 text-sm">We use only durable, weather-resistant materials for long-lasting structures.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-headset text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Ongoing Support</h3>
                            <p class="text-gray-700 text-sm">We guide you from planning to post-construction, ensuring your project’s success.</p>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>

    <!-- Call to Action -->
    <section class="py-12 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Ready to Build Your Poultry House?</h2>
            <p class="text-[#1b3c4d] mb-6">
                Get expert advice and a free quote for your next poultry housing project. Let’s help you maximize your farm’s potential!
            </p>
            <a href="/contact-us" class="bg-white text-[#1b3c4d] font-bold py-3 px-8 rounded-lg shadow hover:bg-[#1b3c4d] hover:text-white transition duration-300">
                Request Consultation
            </a>
        </div>
    </section>
@endsection
