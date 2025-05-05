@extends('app-layout')
@section('title', 'About Us | DanBest Poultry Farm')
@section('description', 'Learn about DanBest Poultry Farm - our mission, vision, values, and commitment to quality poultry farming in Kenya')
@section('keywords', 'about poultry farm, chicken farming Kenya, sustainable poultry practices')
@section('main')
    <!-- Hero Section with Animated Background -->
    <section class="relative bg-black text-white overflow-hidden h-96 flex items-center">
        <!-- Animated chicken wire background -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBkPSJNMCAwaDQwdjQwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTAgMjBoNDBNMjAgMHY0MCIgc3Ryb2tlPSJyZ2JhKDI1NSwyMTMsMCwwLjA1KSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+')] opacity-20"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent z-0"></div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <span class="text-[#f5d118]">Our</span> Story
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Committed to excellence in poultry farming since our founding
            </p>
        </div>

        <!-- Decorative chicken illustration -->
        <div class="absolute bottom-0 right-0 w-64 h-64 opacity-10">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#f5d118" d="M40,-65.5C50.7,-57.1,58,-44.3,65.3,-30.8C72.6,-17.3,79.9,-3.1,77.4,9.1C74.9,21.3,62.5,31.5,50.3,41.8C38.1,52.1,26.1,62.5,11.5,69.5C-3.1,76.5,-20.3,80.1,-33.9,74.1C-47.5,68.1,-57.5,52.5,-65.7,36.2C-73.9,19.9,-80.3,2.9,-77.4,-12.3C-74.5,-27.5,-62.4,-40.9,-48.7,-48.7C-35,-56.5,-19.7,-58.7,-3.7,-54.4C12.3,-50.1,24.6,-39.3,40,-65.5Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>

    <!-- Our Purpose Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-8xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">Who We Are</h2>
                <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
            </div>

            <div class="bg-[#f5d118] bg-opacity-10 p-8 md:p-10 rounded-xl border-l-4 border-[#f5d118]">
                <p class="text-lg md:text-xl text-gray-800 text-center">
                    At DanBest Poultry Farm, we are committed to raising healthy, high-quality chicks and delivering trusted poultry services. We empower farmers, support food security, and promote sustainable agricultural practices through innovation and care.
                </p>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center border-t-4 border-[#f5d118]">
                    <div class="text-4xl font-bold text-[#1b3c4d] mb-2">5+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center border-t-4 border-[#f5d118]">
                    <div class="text-4xl font-bold text-[#1b3c4d] mb-2">10K+</div>
                    <div class="text-gray-600">Chicks Supplied</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center border-t-4 border-[#f5d118]">
                    <div class="text-4xl font-bold text-[#1b3c4d] mb-2">50+</div>
                    <div class="text-gray-600">Farmers Empowered</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center border-t-4 border-[#f5d118]">
                    <div class="text-4xl font-bold text-[#1b3c4d] mb-2">100%</div>
                    <div class="text-gray-600">Quality Commitment</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-8xl">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-[#f5d118] rounded-full opacity-10 z-0"></div>
                    <div class="bg-white p-8 rounded-xl shadow-lg relative z-10 h-full">
                        <div class="w-16 h-16 bg-[#f5d118] rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1b3c4d] mb-4 text-center">Our Mission</h3>
                        <p class="text-gray-700 text-center">
                            To provide reliable, affordable, and innovative poultry solutions—from incubation to vaccination—that enhance livelihoods and improve poultry farming standards.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="relative">
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-[#f5d118] rounded-full opacity-10 z-0"></div>
                    <div class="bg-white p-8 rounded-xl shadow-lg relative z-10 h-full">
                        <div class="w-16 h-16 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1b3c4d] mb-4 text-center">Our Vision</h3>
                        <p class="text-gray-700 text-center">
                            To be the leading poultry farm in the region, known for quality chicks, trusted services, and transforming communities through sustainable poultry practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-8xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">Our Core Values</h2>
                <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Integrity -->
                <div class="bg-[#f5d118] bg-opacity-10 p-6 rounded-xl border-l-4 border-[#1b3c4d] hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1b3c4d] mb-2">Integrity</h3>
                    <p class="text-gray-700">We do what's right, always.</p>
                </div>

                <!-- Quality -->
                <div class="bg-[#f5d118] bg-opacity-10 p-6 rounded-xl border-l-4 border-[#1b3c4d] hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1b3c4d] mb-2">Quality</h3>
                    <p class="text-gray-700">We deliver healthy chicks and dependable services.</p>
                </div>

                <!-- Innovation -->
                <div class="bg-[#f5d118] bg-opacity-10 p-6 rounded-xl border-l-4 border-[#1b3c4d] hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1b3c4d] mb-2">Innovation</h3>
                    <p class="text-gray-700">We embrace modern farming technologies.</p>
                </div>

                <!-- Service -->
                <div class="bg-[#f5d118] bg-opacity-10 p-6 rounded-xl border-l-4 border-[#1b3c4d] hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1b3c4d] mb-2">Service</h3>
                    <p class="text-gray-700">We exist to empower farmers and serve communities.</p>
                </div>

                <!-- Sustainability -->
                <div class="bg-[#f5d118] bg-opacity-10 p-6 rounded-xl border-l-4 border-[#1b3c4d] hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#1b3c4d] rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1b3c4d] mb-2">Sustainability</h3>
                    <p class="text-gray-700">We care for animals, people, and the environment.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="py-16 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">Ready to Partner With Us?</h2>
            <p class="text-xl text-[#1b3c4d] mb-8 max-w-8xl mx-auto">
                Whether you're looking for quality chicks, farming advice, or partnership opportunities, we're here to help.
            </p>

            <div class="flex flex-row justify-center gap-6 max-w-md mx-auto">
                <a href="/contact"
                   class="inline-block bg-[#1b3c4d] text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 hover:bg-[#0f2a38] hover:scale-105">
                    Contact Us
                </a>
            </div>
        </div>
    </section>


@endsection
