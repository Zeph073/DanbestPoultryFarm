@extends('app-layout')
@section('title', 'About Us | DanBest')
@section('description', '')
@section('keywords', '')
@section('main')

    <section class="bg-white py-16 px-4 md:px-10">
        <div class="max-w-8xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">About Us</h2>
            <p class="text-lg text-gray-600 mb-8">
                At <span class="font-semibold text-blue-600">RevoSwift Technologies</span>, we are passionate about delivering smart, swift, and scalable digital solutions.
                Our mission is to empower businesses and communities with innovative web technologies that create real impact.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Our Mission</h3>
                    <p class="text-gray-600">To provide innovative tech solutions that solve real-world problems with speed and efficiency.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Our Vision</h3>
                    <p class="text-gray-600">To become a trusted tech partner driving digital transformation across Africa and beyond.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Our Values</h3>
                    <p class="text-gray-600">Innovation, Integrity, Excellence, and a strong commitment to community impact.</p>
                </div>
            </div>
        </div>
    </section>


@endsection
