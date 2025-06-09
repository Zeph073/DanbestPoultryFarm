@extends('app-layout')
@section('title', 'Home | Danbest Poultry Farm')
@section('description', 'Your trusted source for fresh, healthy, and locally raised chicken products in Kenya')
@section('keywords', 'poultry farm, chicken Kenya, fresh eggs, quality chicken Nairobi')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-black text-white overflow-hidden">
        <div class="px-6 py-24 md:py-32 flex flex-col md:flex-row items-center">
            <!-- Text Content -->
            <div class="md:w-1/2 z-10">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                    Welcome to <span class="text-[#f5d118]">Danbest</span> Poultry Farm
                </h1>
                <p class="text-xl md:text-2xl mb-8">
                    Your trusted source for fresh, healthy, and locally raised chicken products in Kenya
                </p>
                <p class="mb-8 text-gray-300">
                    At Danbest Poultry Farm, we are dedicated to providing fresh, healthy, and high-quality poultry products raised with care and commitment to sustainable farming. Whether you are a family seeking nutritious meals or a business requiring reliable bulk supplies, we bring farm-fresh live birds, eggs, and poultry products directly to your doorstep. Experience the natural taste and superior quality that comes from our well-managed farm, where every bird is nurtured for excellence.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/products" class="bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-6 rounded-lg text-center transition duration-300 transform hover:scale-105">
                        Shop Now
                    </a>
                    <a href="/about-us" class="bg-transparent border-2 border-[#f5d118] hover:bg-[#f5d118] hover:text-[#1b3c4d] text-[#f5d118] font-bold py-3 px-6 rounded-lg text-center transition duration-300 transform hover:scale-105">
                        Learn More About Us
                    </a>
                </div>
            </div>

            <!-- Image Placeholder - Replace with actual chicken/farm image -->
            <div class="md:w-1/2 mt-10 md:mt-0 z-10">
                <div class="relative">
                    <div class="w-full h-80 md:h-96 bg-gray-700 rounded-lg overflow-hidden">
                        <!-- Replace placeholder with actual image -->
                        <img
                            src="{{ asset('images/heros-image.png') }}"
                            alt="Farm/Chicken Image"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div class="absolute -bottom-5 -right-5 w-32 h-32 bg-[#f5d118] rounded-full opacity-20"></div>
                </div>

            </div>

            <!-- Decorative elements -->
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-[#f5d118] rounded-full opacity-10"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-[#f5d118] rounded-full opacity-5"></div>
        </div>
    </section>

    <!-- Featured Products & Services Section -->
    <section class="py-20">
        <div class="px-6 max-w-8xl">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-[#1b3c4d] mb-3">What We Offer</h2>
                <div class="w-24 h-1 bg-[#f5d118] mx-auto mb-4 rounded"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    From live poultry to expert farm services, we provide everything you need for quality and sustainable poultry farming.
                </p>
            </div>

            <!-- Featured Products -->
            <div>
                <h3 class="text-2xl font-bold text-[#1b3c4d] mb-8 text-center">Featured Products</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                    <!-- Product 1 -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="h-64 bg-gray-200 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/day-old.png') }}" alt="Day-Old Chicks" class="w-full h-full object-cover"/>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-[#1b3c4d] mb-2">Day-Old Chicks</h4>
                            <p class="text-gray-600 mb-4">Healthy and vigorous chicks ready to grow on your farm.</p>
                            <span class="inline-block bg-[#f5d118] text-[#1b3c4d] font-semibold rounded-full px-5 py-1 text-sm">Starter Stock</span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="h-64 bg-gray-200 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/indigenous-kienyeji.png') }}" alt="Indigenous Kienyeji Chickens" class="w-full h-full object-cover"/>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-[#1b3c4d] mb-2">Indigenous Kienyeji Chickens</h4>
                            <p class="text-gray-600 mb-4">Resilient and flavorful, perfect for free-range farming.</p>
                            <span class="inline-block bg-[#1b3c4d] text-white font-semibold rounded-full px-5 py-1 text-sm">Farm Favorite</span>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="h-64 bg-gray-200 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/eggs.png') }}" alt="Free-Range Eggs" class="w-full h-full object-cover"/>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-[#1b3c4d] mb-2">Free-Range Eggs</h4>
                            <p class="text-gray-600 mb-4">Nutritious, fresh eggs collected daily from healthy hens.</p>
                            <span class="inline-block bg-[#f5d118] text-[#1b3c4d] font-semibold rounded-full px-5 py-1 text-sm">Daily Fresh</span>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="h-64 bg-gray-200 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/chicken-manure.png') }}" alt="Chicken Manure" class="w-full h-full object-cover"/>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-[#1b3c4d] mb-2">Chicken Manure</h4>
                            <p class="text-gray-600 mb-4">Organic fertilizer to enrich your soil naturally.</p>
                            <span class="inline-block bg-[#1b3c4d] text-white font-semibold rounded-full px-5 py-1 text-sm">Organic</span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/products" class="inline-block bg-[#f5d118] hover:bg-[#e6c515] text-[#1b3c4d] font-bold py-3 px-10 rounded-xl transition duration-300 transform hover:scale-105 shadow-lg">
                        Explore All Products
                    </a>
                </div>
            </div>

            <!-- Featured Services -->
            <div class="mt-20">
                <h3 class="text-2xl font-bold text-[#1b3c4d] mb-8 text-center">Featured Services</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                    <!-- Service 1 -->
                    <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="mb-6 flex justify-center">
                            <img src="{{ asset('images/poultry-housing.png') }}" alt="Poultry Housing Construction" class="h-full w-full rounded-lg object-cover"/>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b3c4d] mb-3 text-center">Poultry Housing Construction</h4>
                        <p class="text-gray-600 text-center">Custom-built coops and brooders designed for comfort and productivity.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="mb-6 flex justify-center">
                            <img src="{{ asset('images/poultry-vaccination.png') }}" alt="Vaccination & Health Management" class="h-full w-full rounded-lg object-cover"/>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b3c4d] mb-3 text-center">Vaccination & Health Management</h4>
                        <p class="text-gray-600 text-center">Expert care to keep your flock healthy and disease-free.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white rounded-3xl shadow-lg p-8 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">
                        <div class="mb-6 flex justify-center">
                            <img src="{{ asset('images/farm-training.png') }}" alt="Farm Training & Consultancy" class="w-full h-full rounded-lg object-cover"/>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b3c4d] mb-3 text-center">Farm Training & Consultancy</h4>
                        <p class="text-gray-600 text-center">Hands-on training and advice to boost your poultry farming success.</p>
                    </div>

                </div>

                <div class="text-center mt-12">
                    <a href="/services" class="inline-block bg-[#1b3c4d] hover:bg-[#0f2a38] text-white font-bold py-3 px-10 rounded-xl transition duration-300 transform hover:scale-105 shadow-lg">
                        Learn More About Our Services
                    </a>
                </div>
            </div>

        </div>
    </section>



    <!-- Why Choose Us Section -->
    <section class="py-16 bg-[#1b3c4d] text-white">
        <div class="mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Kenyans Love Danbest Poultry</h2>
                <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm border border-white border-opacity-20 transition-transform duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-[#f5d118] rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1b3c4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">100% Fresh, Local Chicken</h3>
                    <p class="text-black text-center">Our chickens are raised locally and delivered fresh to your doorstep, never frozen.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm border border-white border-opacity-20 transition-transform duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-[#f5d118] rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1b3c4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Healthy & Ethically Raised</h3>
                    <p class="text-black text-center">We prioritize animal welfare and use no harmful additives in our farming process.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm border border-white border-opacity-20 transition-transform duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-[#f5d118] rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1b3c4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Great Prices for Every Budget</h3>
                    <p class="text-black text-center">Quality poultry products at competitive prices that work for families and businesses alike.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm border border-white border-opacity-20 transition-transform duration-300 hover:scale-105">
                    <div class="w-16 h-16 bg-[#f5d118] rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1b3c4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Delivery Services Available</h3>
                    <p class="text-black text-center">Convenient delivery to Nairobi and surrounding areas for your fresh poultry needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">What Our Customers Say</h2>
                <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div>
                            <h4 class="font-bold text-[#1b3c4d]">Leah Ekinyate</h4>
                            <div class="flex text-[#f5d118]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The quality of Danbest's chicken is unmatched in Nairobi. My family can taste the difference, and the delivery is always on time!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div>
                            <h4 class="font-bold text-[#1b3c4d]">Dorah Ereng</h4>
                            <div class="flex text-[#f5d118]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"As a restaurant owner, I rely on Danbest for consistent quality. Their marinated wings are a customer favorite!"</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div>
                            <h4 class="font-bold text-[#1b3c4d]">Jastus Ekiranibong</h4>
                            <div class="flex text-[#f5d118]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The free-range eggs from Danbest have the richest yolks I've ever seen. My baking has never been better!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-[#f5d118]">
        <div class="mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">Get in Touch</h2>
            <p class="text-xl text-[#1b3c4d] mb-8 max-w-8xl mx-auto">
                Have questions or want to learn more about our poultry farm? Reach out to us today!
            </p>

            <a href="/contact-us"
               class="inline-block bg-[#1b3c4d] text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 hover:bg-[#0f2a38] hover:scale-105">
                Contact Us
            </a>
        </div>
    </section>



@endsection
