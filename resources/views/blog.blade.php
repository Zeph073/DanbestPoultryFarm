@extends('app-layout')
@section('title', 'Blog | DanBest')
@section('description', '')
@section('keywords', '')
@section('main')


    <section class="px-6 py-10 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-10">Our Blog</h2>
            <p class="text-center text-black mb-10 max-w-2xl mx-auto">
                Explore expert tips, insights, and stories from <span class="font-semibold text-amber-600">Danbest Poultry Farm</span> to help you thrive in poultry farming.
            </p>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Blog Post 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">How to Prepare for Incubation Season</h3>
                    <p class="text-sm text-blue-900">April 15, 2025</p>
                    <p class="text-gray-700 text-justify">
                        Getting ready for a successful hatch starts with preparation. From selecting quality eggs to setting the right conditions, here’s your step-by-step guide.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More</a>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">5 Common Chick Care Mistakes</h3>
                    <p class="text-sm text-blue-900">April 2, 2025</p>
                    <p class="text-gray-700 text-justify">
                        Raising chicks requires more than just feeding. Learn the top mistakes new farmers make and how to prevent losses early on.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More</a>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">The Importance of Poultry Vaccination</h3>
                    <p class="text-sm text-blue-900">March 20, 2025</p>
                    <p class="text-gray-700 text-justify">
                        Vaccination protects your flock from deadly diseases. Discover why timely vaccination is essential and how to follow a simple schedule.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More</a>
                </div>

                <!-- Blog Post 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">Inside Danbest: A Day on the Farm</h3>
                    <p class="text-sm text-blue-900">March 5, 2025</p>
                    <p class="text-gray-700 text-justify">
                        Ever wondered what goes on behind the scenes? Take a virtual tour of our incubation, hatching, and delivery process at Danbest Poultry Farm.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More</a>
                </div>

                <!-- Blog Post 5 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">Farmer Spotlight: Peter's Success Story</h3>
                    <p class="text-sm text-blue-900">February 18, 2025</p>
                    <p class="text-gray-700 text-justify">
                        Meet Peter, a poultry farmer from Lodwar who shares how Danbest’s chicks and support helped him double his chick survival rate and ended up as egg and chicken supplier.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More>></a>
                </div>

                <!-- Blog 6 Post: Motivation -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition space-y-2">
                    <h3 class="text-lg font-semibold text-amber-600">Start Small, Start Now</h3>
                    <p class="text-sm text-blue-900">May 3, 2025</p>
                    <p class="text-gray-700 text-justify">
                        It’s never too late to begin your poultry journey. Many successful farmers started with just a few chicks and a dream. Use what you have, learn as you go, and watch your small beginning grow into something great. Start now—the best time is today.
                    </p>
                    <a href="#" class="text-amber-600 font-medium hover:underline">Read More</a>
                </div>

            </div>
        </div>
    </section>




@endsection
