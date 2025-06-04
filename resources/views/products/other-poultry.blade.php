@extends('app-layout')
@section('title', 'Other Poultry (Ducks, Turkeys) | DanBest Poultry Farm')
@section('description', 'Healthy ducks and turkeys for meat, eggs, and breeding. Perfect for diversifying your poultry farm in Turkana and beyond.')
@section('keywords', 'ducks, turkeys, other poultry, DanBest Poultry Farm, Lodwar')
@section('main')
    <div class="bg-gray-50 py-8">
        <div class="px-4">
            <!-- Breadcrumbs -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#f5d118]">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-[#f5d118] md:ml-2">Products</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-[#f5d118] md:ml-2">Other Poultry (Ducks, Turkeys)</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                        <h3 class="text-lg font-bold text-[#1b3c4d] mb-4 border-b-2 border-[#f5d118] pb-2">Our Products</h3>
                        <ul class="space-y-3">
                            <li><a href="/live-day-old-chicks" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Live day-old chicks</span></a></li>
                            <li><a href="/grower-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Grower chickens (4-6 weeks)</span></a></li>
                            <li><a href="/mature-laying-hens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Mature laying hens</span></a></li>
                            <li><a href="/breeding-stock" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Breeding cocks and hens</span></a></li>
                            <li><a href="/indigenous-kienyeji-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Indigenous (kienyeji) chickens</span></a></li>
                            <li><a href="/broiler-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Broiler chickens</span></a></li>
                            <li>
                                <a href="/other-poultry" class="flex items-center p-2 bg-[#f5d118] bg-opacity-20 rounded-lg group">
                                    <div class="w-8 h-8 bg-[#f5d118] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="font-medium text-[#1b3c4d] group-hover:text-black">Other poultry (ducks, turkeys)</span>
                                </a>
                            </li>
                            <li><a href="/fresh-table-eggs" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Fresh table eggs</span></a></li>
                            <li><a href="/fertile-hatching-eggs" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Fertile hatching eggs</span></a></li>
                            <li><a href="/fresh-chicken-meat" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Fresh chicken meat</span></a></li>
                            <li><a href="/chicken-manure" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group"><div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3"><svg class="w-3 h-3 text-[#1b3c4d]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg></div><span class="text-gray-700 group-hover:text-black">Chicken manure (organic fertilizer)</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main Product Content -->
                <div class="lg:w-3/4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <!-- Header -->
                        <div class="bg-[#1b3c4d] text-white p-6">
                            <h1 class="text-2xl md:text-3xl font-bold mb-2">Other Poultry (Ducks, Turkeys)</h1>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex items-center mb-2 md:mb-0">
                                    <svg class="w-5 h-5 text-[#f5d118] mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span class="font-medium">Diversify your poultry farm</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-[#f5d118] mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Healthy ducks & turkeys</span>
                                </div>
                            </div>
                        </div>

                        <!-- Main Section: Image + About -->
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row gap-8">
                                <!-- Image Gallery -->
                                <div class="lg:w-1/2">
                                    <div class="relative rounded-lg overflow-hidden mb-4 h-80 bg-gray-100 flex items-center justify-center">
                                        <img id="mainImage" src="https://www.horizonstructures.com/wp-content/uploads/2023/02/chickens-grazing-1024x533.jpg" alt="Ducks and turkeys" class="w-full h-full object-cover">
                                    </div>
                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://static1.squarespace.com/static/5c6f81f08155121249a4088c/5c74b73d085229b9004ecd15/5eead265ea41e438e4f81a6b/1711043895331/Keeping%2Ba%2Bmixed%2Bflock.jpg?format=1500w')">
                                            <img src="https://static1.squarespace.com/static/5c6f81f08155121249a4088c/5c74b73d085229b9004ecd15/5eead265ea41e438e4f81a6b/1711043895331/Keeping%2Ba%2Bmixed%2Bflock.jpg?format=1500w" alt="Duck thumbnail 1" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://images.squarespace-cdn.com/content/v1/5c6f81f08155121249a4088c/1632317410661-EP39VD9285I9COO3PJ0Y/raising+chickens+and+ducks+together')">
                                            <img src="https://images.squarespace-cdn.com/content/v1/5c6f81f08155121249a4088c/1632317410661-EP39VD9285I9COO3PJ0Y/raising+chickens+and+ducks+together" alt="Duck thumbnail 2" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://www.shutterstock.com/image-photo/various-free-range-chickens-ducks-600nw-2149619549.jpg')">
                                            <img src="https://www.shutterstock.com/image-photo/various-free-range-chickens-ducks-600nw-2149619549.jpg" alt="Duck thumbnail 3" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://atraditionallife.com/wp-content/uploads/2018/06/hopeforbetterliving.com409.jpg')">
                                            <img src="https://atraditionallife.com/wp-content/uploads/2018/06/hopeforbetterliving.com409.jpg" alt="Turkey thumbnail 4" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <!-- Fast Facts -->
                                    <div class="mt-6 bg-[#f5d118] bg-opacity-10 rounded-lg p-4">
                                        <h3 class="font-bold text-[#1b3c4d] mb-2">Ducks & Turkeys Fast Facts</h3>
                                        <ul class="list-disc pl-5 text-gray-700 text-sm">
                                            <li>Ducks: Great for eggs, meat, and pest control</li>
                                            <li>Turkeys: Excellent for festive meat and breeding</li>
                                            <li>All birds are vaccinated and healthy</li>
                                            <li>Adapted for local conditions</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- About & Creative Section -->
                                <div class="lg:w-1/2">
                                    <div class="mb-6">
                                        <h2 class="text-xl font-bold text-[#1b3c4d] mb-2">Why Add Ducks & Turkeys?</h2>
                                        <p class="text-gray-700 mb-4">
                                            Ducks and turkeys are a smart way to diversify your farm—ducks provide eggs and natural pest control, while turkeys are prized for their delicious meat. Both are hardy, easy to manage, and offer great returns for farmers!
                                        </p>
                                        <!-- Creative Infographic Block -->
                                        <div class="flex flex-col md:flex-row gap-3 mb-4">
                                            <div class="flex-1 bg-[#f5d118] bg-opacity-20 rounded p-3 text-center">
                                                <span class="block text-2xl font-bold text-[#1b3c4d]">Eggs & Meat</span>
                                                <span class="block text-xs text-gray-700">Year-round nutrition</span>
                                            </div>
                                            <div class="flex-1 bg-[#1b3c4d] bg-opacity-10 rounded p-3 text-center">
                                                <span class="block text-2xl font-bold text-white">Pest Control</span>
                                                <span class="block text-xs text-white">Ducks eat insects</span>
                                            </div>
                                            <div class="flex-1 bg-[#f5d118] bg-opacity-20 rounded p-3 text-center">
                                                <span class="block text-2xl font-bold text-[#1b3c4d]">Festive</span>
                                                <span class="block text-xs text-gray-700">Turkeys for holidays</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ask an Expert Callout -->
                                    <div class="bg-[#1b3c4d] bg-opacity-10 border-l-4 border-[#f5d118] p-4 rounded mb-6">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-5 h-5 text-[#f5d118] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 14h.01M16 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <span class="font-bold text-white">Ask a Poultry Expert!</span>
                                        </div>
                                        <p class="text-sm text-white">
                                            Curious about ducks or turkeys? <a href="https://wa.me/254721577451" class="underline text-white">Chat with us on WhatsApp</a> or call <a href="tel:0721577451" class="underline text-white">0721 577 451</a> for free advice.
                                        </p>
                                    </div>
                                    <!-- Features List -->
                                    <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                        <li>Ducks: Egg layers, pest controllers, and meat birds</li>
                                        <li>Turkeys: Fast growth, festive meat, and breeding stock</li>
                                        <li>Vaccinated, healthy, and adapted for Turkana</li>
                                        <li>Great for small and large farms</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs Section -->
                    <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="border-b border-gray-200">
                            <nav class="flex -mb-px" id="tabs">
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-[#f5d118] text-[#1b3c4d]" onclick="showTab('description')">
                                    Description
                                </button>
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" onclick="showTab('care')">
                                    Care & Feeding
                                </button>
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" onclick="showTab('testimonials')">
                                    Testimonials
                                </button>
                            </nav>
                        </div>
                        <div class="p-6">
                            <div id="tab-description">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">About Our Ducks & Turkeys</h3>
                                <p class="text-gray-700">
                                    We offer hardy, well-adapted ducks and turkeys for meat, eggs, and breeding. Our birds are raised with care and are perfect for farmers looking to diversify and boost farm productivity.
                                </p>
                            </div>
                            <div id="tab-care" style="display:none;">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">Care & Feeding Tips</h3>
                                <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                    <li>Provide clean water for drinking and (for ducks) swimming</li>
                                    <li>Feed a balanced diet with grains, greens, and protein</li>
                                    <li>House turkeys in dry, spacious, well-ventilated areas</li>
                                    <li>Protect from predators, especially at night</li>
                                </ul>
                                <div class="mt-4 bg-[#f5d118] bg-opacity-10 border-l-4 border-[#f5d118] p-3 rounded">
                                    <span class="font-bold text-[#1b3c4d]">Download:</span>
                                    <a href="#" class="underline text-[#1b3c4d]">Duck & Turkey Success Guide (PDF)</a>
                                </div>
                            </div>
                            <div id="tab-testimonials" style="display:none;">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">Testimonials</h3>
                                <blockquote class="border-l-4 border-[#f5d118] pl-4 italic text-gray-700 mb-2">
                                    "DanBest ducks keep my garden free of pests and the eggs are delicious!" <br> <span class="text-sm">— Esther, Lodwar</span>
                                </blockquote>
                                <blockquote class="border-l-4 border-[#f5d118] pl-4 italic text-gray-700">
                                    "Turkeys from DanBest are healthy and grow fast. They make every holiday special!" <br> <span class="text-sm">— Moses, Kakuma</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Contact & Location Sidebar -->
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-[#f5d118] bg-opacity-10 rounded-lg p-6">
                            <h3 class="text-lg font-bold text-[#1b3c4d] mb-3">Visit Us</h3>
                            <p class="text-gray-700 mb-2"><strong>Location:</strong> Namariat, Lodwar<br>Near Shell Petrol Station</p>
                            <p class="text-gray-700 mb-2"><strong>Working Hours:</strong><br>Mon-Fri: 8AM - 5PM<br>Sat: 9AM - 2PM</p>
                            <div class="mt-3">
                                <a href="https://goo.gl/maps/Z8bD8xwT2kK2" target="_blank" class="inline-block bg-[#1b3c4d] text-white px-4 py-2 rounded hover:bg-[#f5d118] hover:text-[#1b3c4d] transition">Get Directions</a>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow">
                            <h3 class="text-lg font-bold text-[#1b3c4d] mb-3">Contact</h3>
                            <p class="text-gray-700 mb-2"><strong>Call/WhatsApp:</strong> <a href="tel:0721577451" class="underline">0721 577 451</a></p>
                            <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:danbest.poultryfarm@gmail.com" class="underline">danbest.poultryfarm@gmail.com</a><br><a href="mailto:info@danbestpoultryfarm.co.ke" class="underline">info@danbestpoultryfarm.co.ke</a></p>
                            <div class="mt-3">
                                <a href="https://wa.me/254721577451" target="_blank" class="inline-block bg-[#f5d118] text-[#1b3c4d] px-4 py-2 rounded hover:bg-[#1b3c4d] hover:text-white transition">Chat on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
        function showTab(tab) {
            document.getElementById('tab-description').style.display = 'none';
            document.getElementById('tab-care').style.display = 'none';
            document.getElementById('tab-testimonials').style.display = 'none';
            document.getElementById('tab-' + tab).style.display = 'block';
        }
    </script>
@endsection
