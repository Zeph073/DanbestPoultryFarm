@extends('app-layout')
@section('title', 'Farming Consultancy | DanBest Poultry Farm')
@section('description', 'Professional poultry and agribusiness consultancy for farmers, groups, and institutions. Get expert advice, farm visits, and tailored solutions.')
@section('keywords', 'farming consultancy, poultry expert advice, agribusiness consulting, DanBest Poultry Farm, Kenya')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-[#1b3c4d] text-white overflow-hidden">
        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col justify-center items-center text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-[#f5d118]">Farming</span> Consultancy
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Unlock your farm’s potential with expert advice, hands-on support, and tailored solutions from DanBest’s agribusiness consultants.
            </p>
            <div class="mt-8">
                <a href="/contact-us" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-8 rounded-lg text-center transition duration-300 transform hover:scale-105">
                    Request Consultancy
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
                        <a href="/farming-consultancy" class="flex items-center px-2 py-2 rounded-lg text-white bg-[#f5d118] bg-opacity-10 font-bold">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Farming Consultancy
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="lg:w-3/4 w-full">
            <!-- Consultancy Intro -->
            <section class="py-8 bg-white">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2 w-full">
                        <div class="bg-gray-100 rounded-xl overflow-hidden h-80 flex items-center justify-center">
                            <img src="{{ asset('images/farm-training.png') }}" alt="Farm consultancy" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full mt-8 md:mt-0">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-6">Expert Poultry & Agribusiness Advice</h2>
                        <p class="text-gray-700 mb-6">
                            DanBest’s consultants help you plan, launch, and grow your poultry or agribusiness project. Whether you’re a new farmer, a school, a group, or an NGO, we provide practical, actionable solutions for real success.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Farm visits & project assessments</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Business planning & feasibility studies</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Technical support for poultry, feed, and housing</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Market linkage & value addition strategies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Consultancy Services -->
            <section class="py-8 bg-gray-50">
                <div class="container mx-auto px-6 max-w-5xl">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Our Consultancy Services</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-tractor text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">On-Site Farm Visits</h3>
                            <p class="text-gray-700 text-sm">We visit your farm, diagnose challenges, and give actionable recommendations.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-file-alt text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Business Planning</h3>
                            <p class="text-gray-700 text-sm">Get help with budgets, business plans, and feasibility studies for funding or scaling.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-tools text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Technical Support</h3>
                            <p class="text-gray-700 text-sm">Solve problems in poultry health, nutrition, housing, and management with our experts.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-handshake text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Market Linkage</h3>
                            <p class="text-gray-700 text-sm">Connect with buyers, processors, and value addition partners for your products.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-users text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Group Training</h3>
                            <p class="text-gray-700 text-sm">Workshops and custom training for farmer groups, schools, and NGOs.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-phone-volume text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Follow-Up Support</h3>
                            <p class="text-gray-700 text-sm">We check in after every consultancy to ensure you succeed and grow.</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Consultancy Process Timeline -->
            <section class="py-16 text-[#1b3c4d] bg-gradient-to-b from-white to-gray-50">
                <div class="max-w-5xl mx-auto px-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
                        Our <span class="text-[#f5d118]">Consultancy Process</span>
                    </h2>

                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute h-full w-1 bg-[#f5d118] left-4 md:left-1/2 md:-translate-x-1/2 rounded"></div>

                        <!-- Step 1 -->
                        <div class="flex flex-col md:flex-row items-center mb-16 relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 1</h3>
                                <h4 class="text-xl font-bold mt-1">Book a Consultation</h4>
                                <p class="mt-2 max-w-md mx-auto md:mx-0">
                                    Reach out via phone, WhatsApp, or our website. Tell us your goals or challenges.
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
                                <h4 class="text-xl font-bold mt-1">Assessment & Planning</h4>
                                <p class="mt-2">
                                    We visit your farm or meet virtually, assess your needs, and develop a tailored action plan.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col md:flex-row items-center relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0 max-w-md mx-auto md:mx-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 3</h3>
                                <h4 class="text-xl font-bold mt-1">Implementation & Follow-Up</h4>
                                <p class="mt-2">
                                    We guide you through solutions, provide resources, and check in to ensure your success.
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
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Why Consult With DanBest?</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-tractor text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Local Expertise</h3>
                            <p class="text-gray-700 text-sm">We know Kenya’s farming realities and tailor advice to your context.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-lightbulb text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Practical Solutions</h3>
                            <p class="text-gray-700 text-sm">We focus on what works—no theory, just real, actionable steps.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                            <i class="fas fa-headset text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Ongoing Support</h3>
                            <p class="text-gray-700 text-sm">We’re here for you after the visit—call, WhatsApp, or email anytime.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- Call to Action -->
    <section class="py-12 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Ready to Transform Your Farm?</h2>
            <p class="text-[#1b3c4d] mb-6">
                Book a consultancy or farm visit and get the expert support you deserve!
            </p>
            <a href="/contact-us" class="bg-white text-[#1b3c4d] font-bold py-3 px-8 rounded-lg shadow hover:bg-[#1b3c4d] hover:text-white transition duration-300">
                Request Consultancy
            </a>
        </div>
    </section>
@endsection
