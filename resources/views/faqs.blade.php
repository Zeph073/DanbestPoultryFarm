@extends('app-layout')
@section('title', 'FAQS | DanBest')
@section('description', '')
@section('keywords', '')
@section('main')
    <section class="bg-gray-100 py-16 px-4 md:px-10">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-950 mb-10">Frequently Asked Questions on Chick Care</h2>

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">1. How should I prepare for the arrival of day-old chicks?</h3>
                    <p class="text-gray-700 mt-2">Ensure your brooder is clean, warm (32-35°C), and draft-free. Provide clean bedding, fresh water, and chick starter feed before the chicks arrive.</p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">2. What should I feed my chicks?</h3>
                    <p class="text-gray-700 mt-2">Feed them with a balanced chick starter mash with at least 18–20% protein. Ensure the feed is fresh, dry, and free from mold.</p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">3. How often should I give water to the chicks?</h3>
                    <p class="text-gray-700 mt-2">Clean, fresh water should be available at all times. You can add glucose or vitamins during the first few days to help reduce stress.</p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">4. What temperature should I maintain in the brooder?</h3>
                    <p class="text-gray-700 mt-2">Start with 32–35°C for the first week, and reduce by 2–3°C weekly until the chicks are feathered. Watch their behavior to adjust: huddling = too cold, spreading = too hot.</p>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">5. When should I vaccinate my chicks?</h3>
                    <p class="text-gray-700 mt-2">Vaccination schedules vary, but typically start at day 1 or day 7. We provide guidance and services to help you follow the correct schedule.</p>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">6. How do I keep the brooder clean?</h3>
                    <p class="text-gray-700 mt-2">Replace bedding regularly, clean feeders and drinkers daily, and ensure there’s no moisture buildup to prevent diseases.</p>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">7. How can I tell if a chick is unwell?</h3>
                    <p class="text-gray-700 mt-2">Watch for signs like drooping wings, closed eyes, slow movement, or diarrhea. Isolate sick chicks and consult a vet or contact us for advice.</p>
                </div>

                <!-- FAQ: Disease Awareness -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">8. What are the most common diseases that affect chicks?</h3>
                    <p class="text-gray-700 mt-2">Some common chick diseases include:</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li><strong>Newcastle Disease</strong> – causes respiratory distress and nervous symptoms.</li>
                        <li><strong>Gumboro (IBD)</strong> – affects the immune system of young chicks.</li>
                        <li><strong>Coccidiosis</strong> – causes bloody diarrhea and weakness.</li>
                        <li><strong>Infectious Bronchitis</strong> – affects breathing and egg production later on.</li>
                    </ul>
                </div>

                <!-- FAQ: Disease Prevention -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">9. How can I prevent chick diseases?</h3>
                    <p class="text-gray-700 mt-2">Prevention is better than cure. Follow these tips:</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li>Keep the brooder clean and dry at all times.</li>
                        <li>Isolate sick chicks immediately to prevent spread.</li>
                        <li>Use clean feeders and drinkers and avoid overcrowding.</li>
                        <li>Limit visitor access to your poultry area.</li>
                        <li>Follow a proper vaccination schedule.</li>
                    </ul>
                </div>

                <!-- FAQ: Vaccination Importance -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">10. Why is chick vaccination important?</h3>
                    <p class="text-gray-700 mt-2">Vaccination helps build immunity against deadly diseases like Newcastle and Gumboro. It reduces the risk of mass deaths and promotes healthy growth.</p>
                </div>

                <!-- FAQ: Sample Vaccination Schedule -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">11. What is a typical chick vaccination schedule?</h3>
                    <p class="text-gray-700 mt-2">Here’s a basic example:</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li><strong>Day 1:</strong> Marek’s Disease (if not already vaccinated at hatchery)</li>
                        <li><strong>Day 7:</strong> Newcastle + Infectious Bronchitis (oral or nasal drop)</li>
                        <li><strong>Day 14:</strong> Gumboro (IBD) Vaccine</li>
                        <li><strong>Day 21:</strong> Gumboro Booster</li>
                        <li><strong>Week 4-6:</strong> Fowl Pox (wing stab method)</li>
                    </ul>
                    <p class="text-sm mt-1 text-gray-500">Note: Always consult a vet or our team for a customized vaccination plan.</p>
                </div>

                <!-- FAQ: Signs of Infection -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold text-amber-600">12. What are signs that my chicks may need medical attention?</h3>
                    <p class="text-gray-700 mt-2">Watch out for:</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2">
                        <li>Drooping heads or wings</li>
                        <li>Refusing to eat or drink</li>
                        <li>Coughing, sneezing, or nasal discharge</li>
                        <li>Blood in stool or abnormal droppings</li>
                        <li>Sudden deaths or chicks separating from the group</li>
                    </ul>
                    <p class="text-sm mt-1 text-gray-500">In such cases, isolate the affected chicks and contact a vet immediately.</p>
                </div>

            </div>
        </div>
    </section>
@endsection
