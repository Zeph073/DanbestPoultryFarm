@extends('app-layout')
@section('title', 'Contact Us | DanBest Poultry Farm')
@section('description', 'Get in touch with Danbest Poultry Farm for inquiries about our poultry products and services')
@section('keywords', 'contact poultry farm, chicken inquiry, danbest contacts')
@section('main')
    <div class="bg-[#f5d118] bg-opacity-10 py-12">
        <!-- Contact Header -->
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12">
            <h1 class="text-4xl font-bold text-black mb-4">Get In Touch With Us</h1>
            <p class="text-lg max-w-8xl mx-auto">
                Have questions about our poultry products or services? Reach out to our team and we'll get back to you promptly.
            </p>
        </div>

        <!-- Contact Content -->
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-10">
                    <h2 class="text-2xl font-bold text-black mb-6">Send Us a Message</h2>

                    @include('alerts')
                    <form method="POST" action="{{ url('/send-message') }}" class="space-y-6">
                        @csrf
                        <input type='hidden' name="phone" value="" placeholder='phone'/>
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f5d118] focus:border-transparent transition"
                                   placeholder="Your name" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f5d118] focus:border-transparent transition"
                                       placeholder="your@email.com" required>
                            </div>

                            <div>
                                <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" name="telephone" value="{{ old('telephone') }}"
                                       class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f5d118] focus:border-transparent transition"
                                       placeholder="0721 577 451" required>
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="hidden" name="robotCheck" value=""/>

                            <select name="subject" class="w-full px-4 py-3 text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f5d118] focus:border-transparent transition">
                                <option value="">Select a subject</option>
                                <option value="order">Product Order</option>
                                <option value="order">Consultancy Request</option>
                                <option value="delivery">Delivery Inquiry</option>
                                <option value="wholesale">Wholesale Inquiry</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea name="message" rows="5"
                                      class="w-full px-4 py-3 text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f5d118] focus:border-transparent transition"
                                      placeholder="How can we help you?" required>{{ old('message') }}</textarea>
                        </div>


                        <button type="submit"
                                class="w-full py-3 px-6 bg-black text-white font-bold rounded-lg hover:bg-[#f5d118] hover:text-black transition duration-300 flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>

                </div>

                <!-- Contact Info & Map -->
                <div class="space-y-8">
                    <!-- Contact Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start">
                            <div class="bg-[#f5d118] bg-opacity-20 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-black text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-black mb-2">Our Location</h3>
                                <p class="text-gray-600">Namariat, Lodwar</p>
                                <p class="text-gray-600">Near Shell Petrol Station</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start">
                            <div class="bg-[#f5d118] bg-opacity-20 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-black text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-black mb-2">Call Us</h3>
                                <p class="text-gray-600">0721 577 451 (WhatsApp)</p>
                                <p class="text-gray-600">Mon-Fri: 8AM - 5PM</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start">
                            <div class="bg-[#f5d118] bg-opacity-20 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-black text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-black mb-2">Email Us</h3>
                                <p class="text-gray-600">danbest.paultryfarm@gmail.com</p>
                                <p class="text-gray-600">info@danbestpoultryfarm.co.ke</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-6 flex items-start">
                            <div class="bg-[#f5d118] bg-opacity-20 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-black text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-black mb-2">Working Hours</h3>
                                <p class="text-gray-600">Mon-Fri: 8AM - 5PM</p>
                                <p class="text-gray-600">Sat: 9AM - 2PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <h3 class="font-bold text-lg text-black p-6 pb-0">Find Us on Map</h3>
                        <div class="aspect-w-16 aspect-h-9 w-full">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127659.82009617313!2d35.543864!3d3.119097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178a5c8a5a6b2f4b%3A0x9c2f2e1e3a3e8e2b!2sLodwar%2C%20Kenya!5e0!3m2!1sen!2ske!4v1714993243582!5m2!1sen!2ske"
                                class="w-full h-80 border-0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Teaser -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-black mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Quick answers to common questions about our poultry products and services.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-lg text-black mb-3 flex items-center">
                    <i class="fas fa-question-circle text-[#f5d118] mr-2"></i>
                    What chicken products do you offer?
                </h3>
                <p class="text-gray-600">
                    We offer fresh whole chickens, chicken cuts, marinated products, and free-range eggs - all raised with care and quality standards.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-lg text-black mb-3 flex items-center">
                    <i class="fas fa-question-circle text-[#f5d118] mr-2"></i>
                    Do you offer delivery services?
                </h3>
                <p class="text-gray-600">
                    Yes, we deliver our poultry products within Lodwar and surrounding areas. Contact us for delivery arrangements and fees.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-lg text-black mb-3 flex items-center">
                    <i class="fas fa-question-circle text-[#f5d118] mr-2"></i>
                    Are your chickens free-range?
                </h3>
                <p class="text-gray-600">
                    Yes, we practice ethical free-range farming methods to ensure healthy, naturally raised chickens with excellent taste.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-lg text-black mb-3 flex items-center">
                    <i class="fas fa-question-circle text-[#f5d118] mr-2"></i>
                    Can I visit your farm?
                </h3>
                <p class="text-gray-600">
                    Absolutely! We welcome visitors by appointment to see our operations and learn about our farming practices.
                </p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/faqs" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-[#f5d118] hover:text-black transition">
                View All FAQs
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

@endsection
