@extends('app-layout')
@section('title', 'Poultry Farming Blog | DanBest Poultry Farm')
@section('description', 'Expert poultry farming tips, guides, and insights from DanBest Poultry Farm')
@section('keywords', 'poultry farming blog, chicken care tips, incubation guide, poultry vaccination')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-[#f5d118] text-black overflow-hidden py-16 md:py-24">
        <div class="container mx-auto px-6 text-center z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Poultry <span class="text-white bg-black px-4 py-1 rounded-lg">Insights</span>
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">
                Expert advice, farming tips, and industry updates from DanBest
            </p>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-40 h-40 bg-black rounded-full opacity-10"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-black rounded-full opacity-5"></div>
    </section>

    <!-- Blog Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Featured Post -->
                    <div class="mb-12">
                        <div class="relative rounded-xl overflow-hidden h-80 mb-6">
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Featured Blog Post Image</span>
                            </div>
                            <div class="absolute bottom-0 left-0 bg-[#f5d118] text-black font-bold py-2 px-4 rounded-tr-xl">
                                Featured
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 mb-3">
                            <span class="text-sm">May 3, 2025</span>
                            <span class="mx-2">•</span>
                            <span class="text-sm">5 min read</span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-[#1b3c4d] mb-4">Start Small, Start Now</h2>
                        <p class="text-gray-700 mb-4">
                            It's never too late to begin your poultry journey. Many successful farmers started with just a few chicks and a dream. Use what you have, learn as you go, and watch your small beginning grow into something great. Start now—the best time is today.
                        </p>
                        <a href="/blog/start-small-start-now" class="inline-flex items-center text-[#1b3c4d] font-medium hover:text-[#f5d118] transition">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>

                    <!-- Blog Posts Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Post 1 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Blog Post Image</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-500 mb-3">
                                    <span class="text-sm">April 15, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-sm">4 min read</span>
                                </div>
                                <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">How to Prepare for Incubation Season</h3>
                                <p class="text-gray-600 mb-4">
                                    Getting ready for a successful hatch starts with preparation. From selecting quality eggs to setting the right conditions, here's your step-by-step guide.
                                </p>
                                <a href="/blog/incubation-season-prep" class="inline-flex items-center text-[#1b3c4d] font-medium hover:text-[#f5d118] transition">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Blog Post Image</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-500 mb-3">
                                    <span class="text-sm">April 2, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-sm">6 min read</span>
                                </div>
                                <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">5 Common Chick Care Mistakes</h3>
                                <p class="text-gray-600 mb-4">
                                    Raising chicks requires more than just feeding. Learn the top mistakes new farmers make and how to prevent losses early on.
                                </p>
                                <a href="/blog/chick-care-mistakes" class="inline-flex items-center text-[#1b3c4d] font-medium hover:text-[#f5d118] transition">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Blog Post Image</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-500 mb-3">
                                    <span class="text-sm">March 20, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-sm">7 min read</span>
                                </div>
                                <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">The Importance of Poultry Vaccination</h3>
                                <p class="text-gray-600 mb-4">
                                    Vaccination protects your flock from deadly diseases. Discover why timely vaccination is essential and how to follow a simple schedule.
                                </p>
                                <a href="/blog/poultry-vaccination" class="inline-flex items-center text-[#1b3c4d] font-medium hover:text-[#f5d118] transition">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Post 4 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Blog Post Image</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-500 mb-3">
                                    <span class="text-sm">March 5, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span class="text-sm">5 min read</span>
                                </div>
                                <h3 class="text-xl font-bold text-[#1b3c4d] mb-3">Inside Danbest: A Day on the Farm</h3>
                                <p class="text-gray-600 mb-4">
                                    Ever wondered what goes on behind the scenes? Take a virtual tour of our incubation, hatching, and delivery process at Danbest Poultry Farm.
                                </p>
                                <a href="/blog/day-on-the-farm" class="inline-flex items-center text-[#1b3c4d] font-medium hover:text-[#f5d118] transition">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-[#f5d118] hover:text-black hover:border-[#f5d118] transition">
                                &laquo; Previous
                            </a>
                            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg bg-[#f5d118] text-black border-[#f5d118] font-medium">
                                1
                            </a>
                            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-[#f5d118] hover:text-black hover:border-[#f5d118] transition">
                                2
                            </a>
                            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-[#f5d118] hover:text-black hover:border-[#f5d118] transition">
                                3
                            </a>
                            <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-[#f5d118] hover:text-black hover:border-[#f5d118] transition">
                                Next &raquo;
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- About Widget -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                        <div class="bg-[#1b3c4d] text-white p-4">
                            <h3 class="text-xl font-bold">About Our Blog</h3>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-700 mb-4">
                                Welcome to the DanBest Poultry Farm blog, where we share expert insights, practical tips, and the latest in poultry farming practices.
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-[#f5d118] rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1b3c4d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#1b3c4d]">DanBest Team</h4>
                                    <p class="text-sm text-gray-600">Poultry Farming Experts</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Posts -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                        <div class="bg-[#1b3c4d] text-white p-4">
                            <h3 class="text-xl font-bold">Popular Posts</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <a href="/blog/farmer-spotlight" class="group flex items-start">
                                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-lg overflow-hidden mr-4">
                                        <div class="w-full h-full flex items-center justify-center">
                                            <span class="text-xs text-gray-500">Image</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-[#1b3c4d] group-hover:text-[#f5d118] transition">Farmer Spotlight: Peter's Success Story</h4>
                                        <p class="text-sm text-gray-500">February 18, 2025</p>
                                    </div>
                                </a>
                                <a href="/blog/chick-care-mistakes" class="group flex items-start">
                                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-lg overflow-hidden mr-4">
                                        <div class="w-full h-full flex items-center justify-center">
                                            <span class="text-xs text-gray-500">Image</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-[#1b3c4d] group-hover:text-[#f5d118] transition">5 Common Chick Care Mistakes</h4>
                                        <p class="text-sm text-gray-500">April 2, 2025</p>
                                    </div>
                                </a>
                                <a href="/blog/poultry-vaccination" class="group flex items-start">
                                    <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-lg overflow-hidden mr-4">
                                        <div class="w-full h-full flex items-center justify-center">
                                            <span class="text-xs text-gray-500">Image</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-[#1b3c4d] group-hover:text-[#f5d118] transition">The Importance of Poultry Vaccination</h4>
                                        <p class="text-sm text-gray-500">March 20, 2025</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-[#1b3c4d] text-white p-4">
                            <h3 class="text-xl font-bold">Categories</h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/blog/category/chick-care" class="flex justify-between items-center text-[#1b3c4d] hover:text-[#f5d118] transition">
                                        <span>Chick Care</span>
                                        <span class="bg-[#f5d118] text-[#1b3c4d] text-xs font-bold px-2 py-1 rounded-full">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/incubation" class="flex justify-between items-center text-[#1b3c4d] hover:text-[#f5d118] transition">
                                        <span>Incubation</span>
                                        <span class="bg-[#f5d118] text-[#1b3c4d] text-xs font-bold px-2 py-1 rounded-full">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/health" class="flex justify-between items-center text-[#1b3c4d] hover:text-[#f5d118] transition">
                                        <span>Health & Vaccination</span>
                                        <span class="bg-[#f5d118] text-[#1b3c4d] text-xs font-bold px-2 py-1 rounded-full">15</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/business" class="flex justify-between items-center text-[#1b3c4d] hover:text-[#f5d118] transition">
                                        <span>Poultry Business</span>
                                        <span class="bg-[#f5d118] text-[#1b3c4d] text-xs font-bold px-2 py-1 rounded-full">6</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog/category/success-stories" class="flex justify-between items-center text-[#1b3c4d] hover:text-[#f5d118] transition">
                                        <span>Success Stories</span>
                                        <span class="bg-[#f5d118] text-[#1b3c4d] text-xs font-bold px-2 py-1 rounded-full">4</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Stay Updated</h2>
            <p class="text-xl text-[#1b3c4d] mb-8">Subscribe to our newsletter for the latest poultry farming tips and updates</p>

            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1b3c4d]">
                <button type="submit" class="bg-[#1b3c4d] hover:bg-black text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

@endsection
