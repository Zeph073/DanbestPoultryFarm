@extends('app-layout')
@section('title', 'Live Day-Old Chicks | DanBest Poultry Farm')
@section('description', 'Premium quality live day-old chicks for your poultry farming needs. Vaccinated, healthy, and ready for your farm.')
@section('keywords', 'day-old chicks, poultry chicks, chicken farming, kienyeji chicks, broiler chicks')
@section('main')
    <div class="bg-gray-50 py-8">
        <div class=" px-4">
            <!-- Breadcrumbs -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#f5d118]">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-[#f5d118] md:ml-2">Products</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-[#f5d118] md:ml-2">Live Day-Old Chicks</span>
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
                            <li>
                                <a href="/live-day-old-chicks" class="flex items-center p-2 bg-[#f5d118] bg-opacity-20 rounded-lg group">
                                    <div class="w-8 h-8 bg-[#f5d118] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="font-medium text-[#1b3c4d] group-hover:text-black">Live day-old chicks</span>
                                </a>
                            </li>
                            <li>
                                <a href="/grower-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Grower chickens (4-6 weeks)</span>
                                </a>
                            </li>
                            <li>
                                <a href="/mature-laying-hens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Mature laying hens</span>
                                </a>
                            </li>
                            <li>
                                <a href="/breeding-stock" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Breeding cocks and hens</span>
                                </a>
                            </li>
                            <li>
                                <a href="/indigenous-kienyeji-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Indigenous (kienyeji) chickens</span>
                                </a>
                            </li>
                            <li>
                                <a href="/broiler-chickens" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Broiler chickens</span>
                                </a>
                            </li>
                            <li>
                                <a href="/other-poultry" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Other poultry (ducks, turkeys)</span>
                                </a>
                            </li>
                            <li>
                                <a href="/fresh-table-eggs" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Fresh table eggs</span>
                                </a>
                            </li>
                            <li>
                                <a href="/fertile-hatching-eggs" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Fertile hatching eggs</span>
                                </a>
                            </li>
                            <li>
                                <a href="/fresh-chicken-meat" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Fresh chicken meat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/chicken-manure" class="flex items-center p-2 hover:bg-[#f5d118] hover:bg-opacity-10 rounded-lg group">
                                    <div class="w-8 h-8 border border-[#1b3c4d] rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-3 h-3 text-[#1b3c4d] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                    </div>
                                    <span class="text-gray-700 group-hover:text-black">Chicken manure (organic fertilizer)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Product Content -->
                <div class="lg:w-3/4 mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <!-- Header -->
                        <div class="bg-[#1b3c4d] text-white p-6">
                            <h1 class="text-2xl md:text-3xl font-bold mb-2">Live Day-Old Chicks at <span class="text-[#f5d118]">DANBEST Poultry Farm</span></h1>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex items-center mb-2 md:mb-0">
                                    <svg class="w-5 h-5 text-[#f5d118] mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span class="font-medium">Trusted by hundreds of farmers</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-[#f5d118] mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Serving Turkana Since 2018</span>
                                </div>
                            </div>
                        </div>

                        <!-- Main Section: Image + About -->
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row gap-8">
                                <!-- Image Gallery -->
                                <div class="lg:w-1/2">
                                    <div class="relative rounded-lg overflow-hidden mb-4 h-80 bg-gray-100 flex items-center justify-center">
                                        <img id="mainImage" src="https://www.idealpoultry.com/assets/breedimages/breed_1423_s.jpg" alt="Poultry farming" class="w-full h-full object-cover">
                                    </div>
                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://www.idealpoultry.com/assets/breedimages/breed_1425_s.jpg')">
                                            <img src="https://www.idealpoultry.com/assets/breedimages/breed_1425_s.jpg" alt="Chicks thumbnail 1" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://www.idealpoultry.com/assets/breedimages/breed_1427_s.jpg')">
                                            <img src="https://www.idealpoultry.com/assets/breedimages/breed_1427_s.jpg" alt="Chicks thumbnail 2" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://www.idealpoultry.com/assets/breedimages/breed_1495_s.jpg')">
                                            <img src="https://www.idealpoultry.com/assets/breedimages/breed_1495_s.jpg" alt="Chicks thumbnail 3" class="w-full h-full object-cover">
                                        </div>
                                        <div class="h-40 bg-gray-200 rounded-md overflow-hidden cursor-pointer border-2 border-transparent hover:border-[#f5d118]" onclick="changeImage('https://www.idealpoultry.com/assets/breedimages/breed_1431_s.jpg')">
                                            <img src="https://www.idealpoultry.com/assets/breedimages/breed_1431_s.jpg" alt="Chicks thumbnail 4" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                </div>


                                <!-- About & Services -->
                                <div class="lg:w-1/2">
                                    <div class="mb-6">
                                        <h2 class="text-xl font-bold text-[#1b3c4d] mb-2">Empowering Farmers, Nurturing Chicks</h2>
                                        <p class="text-gray-700 mb-4">
                                            At Danbest Poultry Farm, we believe in more than just raising chickens—we build community, share knowledge, and help you grow. Whether you're a first-time farmer or a seasoned poultry keeper, our resources, training, and healthy chicks are here to support your journey.
                                        </p>
                                        <div class="bg-[#f5d118] bg-opacity-10 border-l-4 border-[#f5d118] p-3 mb-4">
                                            <p class="text-sm text-gray-700">
                                                <span class="font-bold">Did you know?</span> Poultry farming can transform livelihoods and improve food security in Turkana and beyond!
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="font-bold text-[#1b3c4d] mb-3">What We Offer</h3>
                                        <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                            <li>Educational farm visits and hands-on training</li>
                                            <li>Expert advice on poultry health and nutrition</li>
                                            <li>Community outreach and youth empowerment programs</li>
                                            <li>Reliable supply of quality chicks (Kienyeji, Kuroiler, Rainbow Rooster, Broiler)</li>
                                        </ul>
                                    </div>

                                    <div class="border-t border-gray-200 pt-4">
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <svg class="w-4 h-4 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Vaccination and biosecurity guidance
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500 mb-2">
                                            <svg class="w-4 h-4 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Feed formulation tips for local conditions
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg class="w-4 h-4 mr-2 text-[#f5d118]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Ongoing support—just call or WhatsApp us!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs Section -->
                    <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="border-b border-gray-200">
                            <nav class="flex -mb-px" id="tabs">
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-[#f5d118] text-[#1b3c4d]" onclick="showTab('description')">
                                    Our Story
                                </button>
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" onclick="showTab('specs')">
                                    Tips & Resources
                                </button>
                                <button class="w-1/3 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" onclick="showTab('reviews')">
                                    Community Voices
                                </button>
                            </nav>
                        </div>
                        <div class="p-6">
                            <div id="tab-description">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">Our Story</h3>
                                <p class="text-gray-700">
                                    Founded in the heart of Namariat, Lodwar, Danbest Poultry Farm started with a vision: to empower local farmers and provide high-quality poultry for Turkana and beyond. From humble beginnings near the Shell Petrol Station, we've grown into a trusted hub for poultry knowledge, healthy chicks, and community support.
                                </p>
                                <p class="text-gray-700 mt-2">
                                    <span class="font-bold">Visit us:</span> We welcome visitors, students, and aspiring farmers to tour our farm and learn first-hand about best practices in poultry keeping.
                                </p>
                            </div>
                            <div id="tab-specs" style="display:none;">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">Tips & Resources</h3>
                                <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                    <li>Keep your poultry house clean and well-ventilated to prevent disease.</li>
                                    <li>Start with strong, healthy chicks and provide proper brooding.</li>
                                    <li>Monitor water and feed daily—consistency is key to growth.</li>
                                    <li>Connect with local farmers for support and knowledge sharing.</li>
                                </ul>
                                <div class="mt-4 bg-[#f5d118] bg-opacity-10 border-l-4 border-[#f5d118] p-3">
                                    <p class="text-sm text-gray-700">
                                        <span class="font-bold">Download:</span> <a href="#" class="underline text-[#1b3c4d]">Our Poultry Starter Guide (PDF)</a>
                                    </p>
                                </div>
                            </div>
                            <div id="tab-reviews" style="display:none;">
                                <h3 class="text-lg font-bold text-[#1b3c4d] mb-4">Community Voices</h3>
                                <blockquote class="border-l-4 border-[#f5d118] pl-4 italic text-gray-700 mb-2">
                                    "Danbest Poultry Farm gave me the confidence and support to start my own flock. Their team is always ready to help!" <br> <span class="text-sm">— Amina, Lodwar</span>
                                </blockquote>
                                <blockquote class="border-l-4 border-[#f5d118] pl-4 italic text-gray-700">
                                    "The farm is a real asset to our community. Great advice and healthy chicks every time." <br> <span class="text-sm">— Peter, Namariat</span>
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
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow">
                            <h3 class="text-lg font-bold text-[#1b3c4d] mb-3">Contact</h3>
                            <p class="text-gray-700 mb-2"><strong>Call/WhatsApp:</strong> <a href="tel:0721577451" class="underline">0721 577 451</a></p>
                            <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:danbest.poultryfarm@gmail.com" class="underline">danbest.poultryfarm@gmail.com</a><br><a href="mailto:info@danbestpoultryfarm.co.ke" class="underline">info@danbestpoultryfarm.co.ke</a></p>
                        </div>
                    </div>
                </div>

                <script>
                    function changeImage(src) {
                        document.getElementById('mainImage').src = src;
                    }
                    function showTab(tab) {
                        document.getElementById('tab-description').style.display = 'none';
                        document.getElementById('tab-specs').style.display = 'none';
                        document.getElementById('tab-reviews').style.display = 'none';
                        document.getElementById('tab-' + tab).style.display = 'block';
                    }
                </script>


            </div>
        </div>
    </div>
@endsection
