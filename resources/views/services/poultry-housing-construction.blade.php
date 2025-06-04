@extends('app-layout')
@section('title', 'Poultry Housing Construction | DanBest Poultry Farm')
@section('description', 'Professional poultry house construction services for optimal bird health and productivity')
@section('keywords', 'poultry housing, chicken coop construction, poultry farm design Kenya')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-[#1b3c4d] text-white overflow-hidden">
        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col justify-center items-center text-center">
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
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent opacity-20"></div>
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
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Modern poultry house" class="w-full h-full object-cover">
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
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a0b14?auto=format&fit=crop&w=600&q=80" alt="Deep Litter System" class="w-full h-full object-cover">
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
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Battery Cage System" class="w-full h-full object-cover">
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
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Free-Range Design" class="w-full h-full object-cover">
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
            <section class="py-8 bg-white">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Our Construction Process</h2>
                    <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                </div>
                <div class="space-y-16 md:space-y-0 md:relative">
                    <div class="hidden md:block absolute left-1/2 h-full w-0.5 bg-[#f5d118] transform -translate-x-1/2"></div>
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-8 md:mb-0">
                        <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">1. Site Assessment</h3>
                            <p class="text-gray-700 mt-2">
                                We evaluate your land for topography, drainage, wind direction, and accessibility to design the optimal housing solution.
                            </p>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            1
                        </div>
                        <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0 w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Site Assessment" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-8 md:mb-0">
                        <div class="md:w-1/2 md:pr-12 order-last md:order-first w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=600&q=80" alt="Custom Design" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            2
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0 text-left">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">2. Custom Design</h3>
                            <p class="text-gray-700 mt-2">
                                Our team creates a tailored housing plan, considering your bird type, farm goals, and budget for maximum results.
                            </p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start">
                        <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">3. Construction & Handover</h3>
                            <p class="text-gray-700 mt-2">
                                We build your poultry house with quality materials, keeping you updated every step, and hand over a ready-to-use facility.
                            </p>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            3
                        </div>
                        <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0 w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=600&q=80" alt="Construction" class="w-full h-full object-cover">
                            </div>
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
                            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Expertise" class="w-20 h-20 object-cover rounded-full mb-4">
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Proven Expertise</h3>
                            <p class="text-gray-700 text-sm">Years of experience in poultry housing and farm management across Kenya.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Quality" class="w-20 h-20 object-cover rounded-full mb-4">
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Quality Materials</h3>
                            <p class="text-gray-700 text-sm">We use only durable, weather-resistant materials for long-lasting structures.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Support" class="w-20 h-20 object-cover rounded-full mb-4">
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
