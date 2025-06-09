@extends('app-layout')
@section('title', 'Bulk Supply to Farmers | DanBest Poultry Farm')
@section('description', 'Bulk supply of day-old chicks, growers, feed, and poultry products direct to farmers, institutions, and agrovets.')
@section('keywords', 'bulk poultry supply, chicks in bulk, poultry feed supply, DanBest Poultry Farm, Turkana')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-[#1b3c4d] text-white overflow-hidden">
        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col justify-center items-center text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-[#f5d118]">Bulk Supply</span> to Farmers
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Reliable, timely, and affordable delivery of chicks, growers, feed, and poultry products to your farm, group, or institution.
            </p>
            <div class="mt-8">
                <a href="/contact-us" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-8 rounded-lg text-center transition duration-300 transform hover:scale-105">
                    Request Bulk Quote
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
                        <a href="/poultry-housing-construction" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
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
                        <a href="/bulk-supply" class="flex items-center px-2 py-2 rounded-lg text-white bg-[#f5d118] bg-opacity-10 font-bold">
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
            <!-- Bulk Supply Intro -->
            <section class="py-8 bg-white">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2 w-full">
                        <div class="bg-gray-100 rounded-xl overflow-hidden h-80 flex items-center justify-center">
                            <img src="https://images.pexels.com/photos/20515756/pexels-photo-20515756/free-photo-of-farmers-in-india.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Bulk chicks delivery" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full mt-8 md:mt-0">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-6">Your Reliable Bulk Poultry Partner</h2>
                        <p class="text-gray-700 mb-6">
                            We supply large quantities of day-old chicks, growers, mature birds, eggs, and feed to farmer groups, agrovets, schools, NGOs, and commercial farms across Turkana and beyond. We guarantee quality, traceability, and safe delivery.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Bulk day-old chicks and growers (any breed)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Quality feeds and supplements in bulk</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Eggs, meat, and manure for institutions</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Safe, timely delivery to your location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bulk Supply Options -->
            <section class="py-8 bg-gray-50">
                <div class="container mx-auto px-6 max-w-5xl">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">What Can You Order in Bulk?</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-dove text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Chicks & Growers</h3>
                            <p class="text-gray-700 text-sm">
                                Day-old chicks and growers (broiler, layers, kienyeji, rainbow, kuroiler) delivered in large numbers—vaccinated and healthy.
                            </p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-seedling text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Feeds & Supplements</h3>
                            <p class="text-gray-700 text-sm">
                                Quality feeds, minerals, and supplements in bags or tons. Get the best prices for your group or agrovet.
                            </p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-drumstick-bite text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Eggs, Meat & Manure</h3>
                            <p class="text-gray-700 text-sm">
                                Fresh eggs, chicken meat, and organic manure for schools, hotels, and projects—delivered in bulk.
                            </p>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Bulk Ordering Process (Creative Timeline) -->
            <section class="py-16 text-[#1b3c4d] bg-gradient-to-b from-white to-gray-50">
                <div class="max-w-5xl mx-auto px-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
                        How <span class="text-[#f5d118]">Bulk Orders</span> Work
                    </h2>

                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute h-full w-1 bg-[#f5d118] left-4 md:left-1/2 md:-translate-x-1/2 rounded"></div>

                        <!-- Step 1 -->
                        <div class="flex flex-col md:flex-row items-center mb-16 relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 1</h3>
                                <h4 class="text-xl font-bold mt-1">Place Your Order</h4>
                                <p class="mt-2 max-w-md mx-auto md:mx-0">
                                    Contact us with your needs (type, quantity, delivery date). We’ll confirm availability and pricing.
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
                                <h4 class="text-xl font-bold mt-1">Confirmation & Preparation</h4>
                                <p class="mt-2">
                                    We prepare your order, ensure quality checks, and organize safe, temperature-controlled transport.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col md:flex-row items-center relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0 max-w-md mx-auto md:mx-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 3</h3>
                                <h4 class="text-xl font-bold mt-1">Delivery & Support</h4>
                                <p class="mt-2">
                                    We deliver to your farm, agrovet, or institution—on time and with after-sales support for your success.
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
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Why Order Bulk From DanBest?</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-truck-loading text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Reliable & Timely</h3>
                            <p class="text-gray-700 text-sm">We deliver what you order, when you need it, anywhere in Turkana and beyond.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-check-circle text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Quality Assured</h3>
                            <p class="text-gray-700 text-sm">All chicks, feed, and products are quality-checked and traceable.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-headset text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">After-Sales Support</h3>
                            <p class="text-gray-700 text-sm">Get technical advice, health support, and training for your group or project.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


    <!-- Call to Action -->
    <section class="py-12 bg-[#f5d118]">
        <div class="mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Ready for Bulk Supply?</h2>
            <p class="text-[#1b3c4d] mb-6">
                Contact us today for a quote or to discuss your group, school, or project needs!
            </p>
            <a href="/contact-us" class="bg-white text-[#1b3c4d] font-bold py-3 px-8 rounded-lg shadow hover:bg-[#1b3c4d] hover:text-white transition duration-300">
                Request Bulk Quote
            </a>
        </div>
    </section>
@endsection
