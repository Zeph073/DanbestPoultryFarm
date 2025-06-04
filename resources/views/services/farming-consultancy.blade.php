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
                <a href="#contact" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-8 rounded-lg text-center transition duration-300 transform hover:scale-105">
                    Request Consultancy
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent opacity-20"></div>
    </section>

    <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-8 py-8">
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
                            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Farm consultancy" class="w-full h-full object-cover">
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
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Our Consultancy Services</h2>
                    <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=400&q=80" alt="Farm visit" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">On-Site Farm Visits</h3>
                        <p class="text-gray-700 text-sm">We visit your farm, diagnose challenges, and give actionable recommendations.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a0b14?auto=format&fit=crop&w=400&q=80" alt="Business planning" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">Business Planning</h3>
                        <p class="text-gray-700 text-sm">Get help with budgets, business plans, and feasibility studies for funding or scaling.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Technical support" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">Technical Support</h3>
                        <p class="text-gray-700 text-sm">Solve problems in poultry health, nutrition, housing, and management with our experts.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Market linkage" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">Market Linkage</h3>
                        <p class="text-gray-700 text-sm">Connect with buyers, processors, and value addition partners for your products.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=400&q=80" alt="Group training" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">Group Training</h3>
                        <p class="text-gray-700 text-sm">Workshops and custom training for farmer groups, schools, and NGOs.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-lg transition">
                        <img src="https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80" alt="Follow-up support" class="w-20 h-20 object-cover rounded-full mb-4">
                        <h3 class="font-bold text-[#1b3c4d] mb-2">Follow-Up Support</h3>
                        <p class="text-gray-700 text-sm">We check in after every consultancy to ensure you succeed and grow.</p>
                    </div>
                </div>
            </section>

            <!-- Consultancy Process Timeline -->
            <section class="py-8 bg-white">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Our Consultancy Process</h2>
                    <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                </div>
                <div class="space-y-16 md:space-y-0 md:relative">
                    <div class="hidden md:block absolute left-1/2 h-full w-0.5 bg-[#f5d118] transform -translate-x-1/2"></div>
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-8 md:mb-0">
                        <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">1. Book a Consultation</h3>
                            <p class="text-gray-700 mt-2">
                                Reach out via phone, WhatsApp, or our website. Tell us your goals or challenges.
                            </p>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            1
                        </div>
                        <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0 w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=600&q=80" alt="Book consultancy" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-8 md:mb-0">
                        <div class="md:w-1/2 md:pr-12 order-last md:order-first w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="On-site visit" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            2
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0 text-left">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">2. Assessment & Planning</h3>
                            <p class="text-gray-700 mt-2">
                                We visit your farm or meet virtually, assess your needs, and develop a tailored action plan.
                            </p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start">
                        <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                            <h3 class="text-xl font-bold text-[#1b3c4d]">3. Implementation & Follow-Up</h3>
                            <p class="text-gray-700 mt-2">
                                We guide you through solutions, provide resources, and check in to ensure your success.
                            </p>
                        </div>
                        <div class="flex-shrink-0 w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10 mx-auto md:mx-0">
                            3
                        </div>
                        <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0 w-full">
                            <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Consultancy follow-up" class="w-full h-full object-cover">
                            </div>
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
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a0b14?auto=format&fit=crop&w=400&q=80" alt="Local expertise" class="w-20 h-20 object-cover rounded-full mb-4">
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Local Expertise</h3>
                            <p class="text-gray-700 text-sm">We know Kenya’s farming realities and tailor advice to your context.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=400&q=80" alt="Practical solutions" class="w-20 h-20 object-cover rounded-full mb-4">
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Practical Solutions</h3>
                            <p class="text-gray-700 text-sm">We focus on what works—no theory, just real, actionable steps.</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Ongoing support" class="w-20 h-20 object-cover rounded-full mb-4">
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Ongoing Support</h3>
                            <p class="text-gray-700 text-sm">We’re here for you after the visit—call, WhatsApp, or email anytime.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-12 bg-[#f5d118]">
                <div class="container mx-auto px-6 text-center">
                    <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Ready to Transform Your Farm?</h2>
                    <p class="text-[#1b3c4d] mb-6">
                        Book a consultancy or farm visit and get the expert support you deserve!
                    </p>
                    <a href="#contact" class="bg-white text-[#1b3c4d] font-bold py-3 px-8 rounded-lg shadow hover:bg-[#1b3c4d] hover:text-white transition duration-300">
                        Request Consultancy
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
