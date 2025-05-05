@extends('app-layout')
@section('title', 'About Us | DanBest')
@section('description', 'Learn about DanBest Poultry Farm—our mission, vision, and values in delivering high-quality chicks and poultry services.')
@section('keywords', 'DanBest, poultry farm, chicks, hatching, incubation, vaccination')
@section('main')
    <section class="bg-white py-16 px-4 md:px-10">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-amber-700 mb-4">About Us</h2>
            <p class="text-lg text-gray-700 mb-12 leading-relaxed">
                At <span class="font-semibold text-amber-600">DanBest Poultry Farm</span>, we are committed to raising healthy, high-quality chicks
                and delivering trusted poultry services. We empower farmers, support food security, and promote sustainable agricultural
                practices through innovation and care.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <!-- Mission -->
                <div class="bg-blue-950 p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 text-white">
                    <h3 class="text-xl font-bold mb-3">Ouuuuur Mission</h3>
                    <p>To provide reliable, affordable, and innovative poultry solutions—from incubation to vaccination—
                        that enhance livelihoods and improve poultry farming standards.</p>
                </div>

                <!-- Vision -->
                <div class="bg-blue-950 p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 text-white">
                    <h3 class="text-xl font-bold mb-3">Our Vision</h3>
                    <p>To be the leading poultry farm in the region, known for quality chicks, trusted services,
                        and transforming communities through sustainable poultry practices.</p>
                </div>

                <!-- Values -->
                <div class="bg-blue-950 p-6 rounded-xl shadow-md hover:shadow-xl transition duration-300 text-white">
                    <h3 class="text-xl font-bold mb-3">Our Values</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li><span class="text-amber-400 font-semibold">Integrity</span> – We do what’s right, always.</li>
                        <li><span class="text-amber-400 font-semibold">Quality</span> – We deliver healthy chicks and dependable services.</li>
                        <li><span class="text-amber-400 font-semibold">Innovation</span> – We embrace modern farming technologies.</li>
                        <li><span class="text-amber-400 font-semibold">Service</span> – We exist to empower farmers and serve communities.</li>
                        <li><span class="text-amber-400 font-semibold">Sustainability</span> – We care for animals, people, and the environment.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
