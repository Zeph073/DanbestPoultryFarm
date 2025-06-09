@extends('app-layout')
@section('title', 'Vaccination & Health Management | DanBest Poultry Farm')
@section('description', 'Comprehensive poultry vaccination and health management services to keep your flock healthy, productive, and protected.')
@section('keywords', 'poultry vaccination, poultry health, disease prevention, DanBest Poultry Farm, Turkana, Kenya')
@section('main')
    <!-- Hero Section -->
    <section class="relative text-white overflow-hidden h-full">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0 brightness-50">
            <source src="https://videos.pexels.com/video-files/3117818/3117818-hd_1920_1080_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container mx-auto px-6 py-24 md:py-32 flex flex-col justify-center items-center text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-[#f5d118]">Vaccination &amp; Health</span> Management
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Protect your flock, maximize productivity, and prevent costly disease outbreaks with expert vaccination and health services.
            </p>
            <div class="mt-8">
                <a href="/contact-us" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-8 rounded-lg text-center transition duration-300 transform hover:scale-105">
                    Book a Health Visit
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
                        <a href="/poultry-housing-construction" class="flex items-center px-2 py-2 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-[#f5d118] font-medium">
                            <i class="fas fa-chevron-right mr-2 text-xs"></i> Poultry Housing Construction
                        </a>
                    </li>
                    <li>
                        <a href="/vaccination-health" class="flex items-center px-2 py-2 rounded-lg text-white bg-[#f5d118] bg-opacity-10 font-bold">
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
                            <img src="{{ asset('images/poultry-vaccination.png') }}" alt="Poultry health check" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full mt-8 md:mt-0">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-6">Comprehensive Poultry Health Services</h2>
                        <p class="text-gray-700 mb-6">
                            Our veterinary-led team provides scheduled vaccinations, health checks, and expert disease management for all poultry breeds. We help you prevent outbreaks, reduce losses, and keep your farm thriving.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Routine and emergency vaccinations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Disease diagnosis & outbreak response</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">Biosecurity and farm hygiene training</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-700">On-farm health audits and reporting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Vaccination Timeline -->
            <section class="py-16 text-[#1b3c4d] bg-gradient-to-b from-white to-gray-50">
                <div class="max-w-5xl mx-auto px-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
                        Our <span class="text-[#f5d118]">Vaccination & Health Management Process</span>
                    </h2>

                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute h-full w-1 bg-[#f5d118] left-4 md:left-1/2 md:-translate-x-1/2 rounded"></div>

                        <!-- Step 1 -->
                        <div class="flex flex-col md:flex-row items-center mb-16 relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 1</h3>
                                <h4 class="text-xl font-bold mt-1">Initial Health Assessment</h4>
                                <p class="mt-2 max-w-md mx-auto md:mx-0">
                                    We visit your farm, assess flock health, and create a tailored vaccination and health plan for your birds.
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
                                <h4 class="text-xl font-bold mt-1">Vaccination & Biosecurity</h4>
                                <p class="mt-2">
                                    Our team administers vaccines and trains your staff on best biosecurity practices to keep diseases out.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col md:flex-row items-center relative">
                            <!-- Left Content -->
                            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0 pl-12 md:pl-0 max-w-md mx-auto md:mx-0">
                                <h3 class="text-sm font-semibold text-[#f5d118]">Step 3</h3>
                                <h4 class="text-xl font-bold mt-1">Ongoing Health Monitoring</h4>
                                <p class="mt-2">
                                    We provide regular follow-ups, health audits, and emergency support to ensure your flock stays healthy and productive.
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
            <section class="py-12 bg-white">
                <div class="container mx-auto px-6 max-w-5xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Why Choose DanBest for Health Services?</h2>
                        <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-gray-50 rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-user-md text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Vet-Led Team</h3>
                            <p class="text-gray-700 text-sm">Qualified poultry vets and animal health experts.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-ambulance text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Rapid Disease Response</h3>
                            <p class="text-gray-700 text-sm">Fast, on-call support for emergencies and outbreaks.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl shadow-md p-6 flex flex-col items-center text-center">
                            <i class="fas fa-chalkboard-teacher text-[#f5d118] text-6xl mb-4"></i>
                            <h3 class="font-bold text-[#1b3c4d] mb-2">Farmer Training</h3>
                            <p class="text-gray-700 text-sm">We empower you with knowledge for long-term flock health.</p>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>


    <!-- Call to Action -->
    <section class="py-12 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Protect Your Flock Today!</h2>
            <p class="text-[#1b3c4d] mb-6">
                Schedule a vaccination, book a health check, or get emergency support from our expert team.
            </p>
            <a href="/contact-us" class="bg-white text-[#1b3c4d] font-bold py-3 px-8 rounded-lg shadow hover:bg-[#1b3c4d] hover:text-white transition duration-300">
                Book a Health Visit
            </a>
        </div>
    </section>
@endsection
