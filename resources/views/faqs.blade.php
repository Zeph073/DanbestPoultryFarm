@extends('app-layout')
@section('title', 'FAQs | DanBest Poultry Farm')
@section('description', 'Frequently asked questions about poultry farming, chick care, and disease prevention')
@section('keywords', 'poultry farming FAQ, chick care questions, chicken vaccination guide')
@section('main')
    <!-- Hero Section -->
    <section class="relative bg-[#f5d118] text-black overflow-hidden py-16 md:py-24">
        <div class="container mx-auto px-6 text-center z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Poultry Farming <span class="text-white bg-black px-4 py-1 rounded-lg">FAQs</span>
            </h1>
            <p class="text-xl max-w-3xl mx-auto">
                Expert answers to your most common poultry farming questions
            </p>
            <div class="mt-8 flex justify-center">
                <div class="w-24 h-2 bg-black rounded-full"></div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-black rounded-full opacity-10"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-black rounded-full opacity-5"></div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#1b3c4d] mb-4">Browse by Category</h2>
                <div class="w-20 h-1 bg-[#f5d118] mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 max-w-4xl mx-auto">
                <a href="#brooding" class="bg-white hover:bg-[#f5d118] text-[#1b3c4d] font-medium py-3 px-4 rounded-lg shadow-sm text-center transition duration-300 transform hover:scale-105">
                    <i class="fas fa-fire text-xl mb-2 block"></i>
                    Brooding
                </a>
                <a href="#feeding" class="bg-white hover:bg-[#f5d118] text-[#1b3c4d] font-medium py-3 px-4 rounded-lg shadow-sm text-center transition duration-300 transform hover:scale-105">
                    <i class="fas fa-utensils text-xl mb-2 block"></i>
                    Feeding
                </a>
                <a href="#health" class="bg-white hover:bg-[#f5d118] text-[#1b3c4d] font-medium py-3 px-4 rounded-lg shadow-sm text-center transition duration-300 transform hover:scale-105">
                    <i class="fas fa-heartbeat text-xl mb-2 block"></i>
                    Health
                </a>
                <a href="#vaccination" class="bg-white hover:bg-[#f5d118] text-[#1b3c4d] font-medium py-3 px-4 rounded-lg shadow-sm text-center transition duration-300 transform hover:scale-105">
                    <i class="fas fa-syringe text-xl mb-2 block"></i>
                    Vaccination
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">
            <!-- Brooding Section -->
            <div id="brooding" class="mb-16 scroll-mt-20">
                <h2 class="text-2xl font-bold text-[#1b3c4d] mb-6 pb-2 border-b-2 border-[#f5d118] flex items-center">
                    <i class="fas fa-fire text-[#f5d118] mr-3"></i>
                    Brooding Questions
                </h2>

                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(1)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">How should I prepare for the arrival of day-old chicks?</h3>
                            <svg id="faq-icon-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-1" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Ensure your brooder is clean, warm (32-35°C), and draft-free. Provide clean bedding, fresh water, and chick starter feed before the chicks arrive.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(4)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">What temperature should I maintain in the brooder?</h3>
                            <svg id="faq-icon-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-4" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Start with 32–35°C for the first week, and reduce by 2–3°C weekly until the chicks are feathered. Watch their behavior to adjust: huddling = too cold, spreading = too hot.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(6)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">How do I keep the brooder clean?</h3>
                            <svg id="faq-icon-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-6" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Replace bedding regularly, clean feeders and drinkers daily, and ensure there's no moisture buildup to prevent diseases.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feeding Section -->
            <div id="feeding" class="mb-16 scroll-mt-20">
                <h2 class="text-2xl font-bold text-[#1b3c4d] mb-6 pb-2 border-b-2 border-[#f5d118] flex items-center">
                    <i class="fas fa-utensils text-[#f5d118] mr-3"></i>
                    Feeding Questions
                </h2>

                <div class="space-y-6">
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(2)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">What should I feed my chicks?</h3>
                            <svg id="faq-icon-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-2" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Feed them with a balanced chick starter mash with at least 18–20% protein. Ensure the feed is fresh, dry, and free from mold.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(3)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">How often should I give water to the chicks?</h3>
                            <svg id="faq-icon-3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-3" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Clean, fresh water should be available at all times. You can add glucose or vitamins during the first few days to help reduce stress.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health Section -->
            <div id="health" class="mb-16 scroll-mt-20">
                <h2 class="text-2xl font-bold text-[#1b3c4d] mb-6 pb-2 border-b-2 border-[#f5d118] flex items-center">
                    <i class="fas fa-heartbeat text-[#f5d118] mr-3"></i>
                    Health Questions
                </h2>

                <div class="space-y-6">
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(7)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">How can I tell if a chick is unwell?</h3>
                            <svg id="faq-icon-7" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-7" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Watch for signs like drooping wings, closed eyes, slow movement, or diarrhea. Isolate sick chicks and consult a vet or contact us for advice.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(8)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">What are the most common diseases that affect chicks?</h3>
                            <svg id="faq-icon-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-8" class="px-5 pb-5 hidden">
                            <div class="text-gray-700 space-y-2">
                                <p>Some common chick diseases include:</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li><strong>Newcastle Disease</strong> – causes respiratory distress and nervous symptoms.</li>
                                    <li><strong>Gumboro (IBD)</strong> – affects the immune system of young chicks.</li>
                                    <li><strong>Coccidiosis</strong> – causes bloody diarrhea and weakness.</li>
                                    <li><strong>Infectious Bronchitis</strong> – affects breathing and egg production later on.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 9 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(9)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">How can I prevent chick diseases?</h3>
                            <svg id="faq-icon-9" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-9" class="px-5 pb-5 hidden">
                            <div class="text-gray-700 space-y-2">
                                <p>Prevention is better than cure. Follow these tips:</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Keep the brooder clean and dry at all times.</li>
                                    <li>Isolate sick chicks immediately to prevent spread.</li>
                                    <li>Use clean feeders and drinkers and avoid overcrowding.</li>
                                    <li>Limit visitor access to your poultry area.</li>
                                    <li>Follow a proper vaccination schedule.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 12 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(12)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">What are signs that my chicks may need medical attention?</h3>
                            <svg id="faq-icon-12" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-12" class="px-5 pb-5 hidden">
                            <div class="text-gray-700 space-y-2">
                                <p>Watch out for:</p>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Drooping heads or wings</li>
                                    <li>Refusing to eat or drink</li>
                                    <li>Coughing, sneezing, or nasal discharge</li>
                                    <li>Blood in stool or abnormal droppings</li>
                                    <li>Sudden deaths or chicks separating from the group</li>
                                </ul>
                                <p>In such cases, isolate the affected chicks and contact a vet immediately.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vaccination Section -->
            <div id="vaccination" class="mb-16 scroll-mt-20">
                <h2 class="text-2xl font-bold text-[#1b3c4d] mb-6 pb-2 border-b-2 border-[#f5d118] flex items-center">
                    <i class="fas fa-syringe text-[#f5d118] mr-3"></i>
                    Vaccination Questions
                </h2>

                <div class="space-y-6">
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(5)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">When should I vaccinate my chicks?</h3>
                            <svg id="faq-icon-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-5" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Vaccination schedules vary, but typically start at day 1 or day 7. We provide guidance and services to help you follow the correct schedule.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(10)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">Why is chick vaccination important?</h3>
                            <svg id="faq-icon-10" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-10" class="px-5 pb-5 hidden">
                            <p class="text-gray-700">Vaccination helps build immunity against deadly diseases like Newcastle and Gumboro. It reduces the risk of mass deaths and promotes healthy growth.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 11 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                        <button class="flex justify-between items-center w-full p-5 text-left" onclick="toggleFAQ(11)">
                            <h3 class="font-bold text-lg text-[#1b3c4d]">What is a typical chick vaccination schedule?</h3>
                            <svg id="faq-icon-11" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f5d118]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="faq-content-11" class="px-5 pb-5 hidden">
                            <div class="text-gray-700 space-y-3">
                                <p>Here's a basic example:</p>
                                <ul class="list-disc pl-5 space-y-2">
                                    <li><strong>Day 1:</strong> Marek's Disease (if not already vaccinated at hatchery)</li>
                                    <li><strong>Day 7:</strong> Newcastle + Infectious Bronchitis (oral or nasal drop)</li>
                                    <li><strong>Day 14:</strong> Gumboro (IBD) Vaccine</li>
                                    <li><strong>Day 21:</strong> Gumboro Booster</li>
                                    <li><strong>Week 4-6:</strong> Fowl Pox (wing stab method)</li>
                                </ul>
                                <p class="text-sm italic">Note: Always consult a vet or our team for a customized vaccination plan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <script>
        function toggleFAQ(id) {
            const content = document.getElementById(`faq-content-${id}`);
            const icon = document.getElementById(`faq-icon-${id}`);

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    </script>

    <!-- CTA Section -->
    <section class="py-16 bg-[#f5d118]">
        <div class="container mx-auto px-6 text-center max-w-8xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1b3c4d] mb-4">Still have questions?</h2>
            <p class="text-xl text-[#1b3c4d] mb-8">
                Our poultry experts are ready to help you with any additional questions about chick care and farming.
            </p>

            <a href="/contact"
               class="inline-block bg-[#1b3c4d] text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 hover:bg-[#0f2a38] hover:scale-105">
                Contact Our Team
            </a>
        </div>
    </section>


@endsection
