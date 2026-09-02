@extends('layouts.frontend.layouts')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-red-900 py-16 md:py-24 text-white text-center">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">
                Transparent & Affordable Pricing
            </h1>
            <p class="text-lg md:text-xl text-red-100 max-w-2xl mx-auto">
                Choose the best plan tailored for your travel, visa processing, and holiday needs with SnapAir.
            </p>
        </div>
        <!-- Background Overlay Shape -->
        <div class="absolute inset-0 bg-black/20"></div>
    </section>

    <!-- Pricing Cards Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4">
            
            <!-- Plan Toggle / Subtitle -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl text-gray-800 font-bold">Flexible Plans for Every Traveler</h2>
                <p class="text-gray-600 mt-2">No hidden fees. Premium support guaranteed.</p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                
                <!-- Plan 1: Basic / Express Visa -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-200 p-8 flex flex-col justify-between hover:shadow-xl transition duration-300">
                    <div>
                        <div class="inline-block px-3 py-1 bg-gray-100 text-gray-700 font-semibold text-xs rounded-full uppercase tracking-wider mb-4">
                            Basic
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Visa Consultation</h3>
                        <p class="text-gray-500 text-sm mt-2">Perfect for individual travelers needing visa assistance.</p>
                        
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-gray-900">৳১,৫০০</span>
                            <span class="text-gray-500 font-medium">/ application</span>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-3 text-sm text-gray-600 border-t border-gray-100 pt-6">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Document Verification
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Application Form Fill-up
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Embassy Appointment Booking
                            </li>
                            <li class="flex items-center gap-3 text-gray-400 line-through">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Priority Support
                            </li>
                            <li class="flex items-center gap-3 text-gray-400 line-through">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Flight & Hotel Itinerary
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <a href="#" class="block text-center w-full py-3 px-4 rounded-xl border border-red-600 text-red-600 font-semibold hover:bg-red-600 hover:text-white transition duration-300">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Plan 2: Popular / Standard Package (Highlighted) -->
                <div class="bg-white rounded-2xl shadow-xl border-2 border-red-600 p-8 flex flex-col justify-between relative transform md:-translate-y-2 hover:shadow-2xl transition duration-300">
                    <!-- Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-red-600 text-white font-semibold text-xs py-1 px-4 rounded-full uppercase tracking-wider shadow">
                        Most Popular
                    </div>

                    <div>
                        <div class="inline-block px-3 py-1 bg-red-50 text-red-600 font-semibold text-xs rounded-full uppercase tracking-wider mb-4">
                            Full Service
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Holiday & Flight Combo</h3>
                        <p class="text-gray-500 text-sm mt-2">Best for families and frequent holiday seekers.</p>
                        
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-gray-900">৳৫,০০০</span>
                            <span class="text-gray-500 font-medium">/ package</span>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-3 text-sm text-gray-700 border-t border-gray-100 pt-6">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-red-600"></i>
                                Complete Visa Processing
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-red-600"></i>
                                Discounted Airline Booking
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-red-600"></i>
                                Hotel Reservation Support
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-red-600"></i>
                                Customized Travel Itinerary
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-red-600"></i>
                                24/7 Dedicated Support
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <a href="#" class="block text-center w-full py-3 px-4 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 shadow-md transition duration-300">
                            Book Package
                        </a>
                    </div>
                </div>

                <!-- Plan 3: Corporate / Premium Plan -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-200 p-8 flex flex-col justify-between hover:shadow-xl transition duration-300">
                    <div>
                        <div class="inline-block px-3 py-1 bg-gray-100 text-gray-700 font-semibold text-xs rounded-full uppercase tracking-wider mb-4">
                            Business
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Corporate Travel</h3>
                        <p class="text-gray-500 text-sm mt-2">Tailored solutions for companies and group tours.</p>
                        
                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-gray-900">Custom</span>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-3 text-sm text-gray-600 border-t border-gray-100 pt-6">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Bulk Visa Processing
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Corporate Group Discounts
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Flexible Flight Cancellations
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Priority Account Manager
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                                Custom Billing & Invoicing
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <a href="#" class="block text-center w-full py-3 px-4 rounded-xl border border-gray-800 text-gray-800 font-semibold hover:bg-gray-800 hover:text-white transition duration-300">
                            Contact Sales
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-2xl md:text-3xl text-center text-gray-900 font-bold mb-8">
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="font-semibold text-gray-800">Are embassy fees included in these prices?</h4>
                    <p class="text-gray-600 text-sm mt-1">No, official embassy fees are separate and need to be paid as per the respective embassy guidelines.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="font-semibold text-gray-800">Can I get a refund if my visa application is rejected?</h4>
                    <p class="text-gray-600 text-sm mt-1">Our service charges cover application preparation and support. Service fees are non-refundable once processing begins.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="font-semibold text-gray-800">How do I purchase a corporate travel plan?</h4>
                    <p class="text-gray-600 text-sm mt-1">Click on "Contact Sales" or reach out directly to our support desk. Our team will tailor a custom package for your organization.</p>
                </div>
            </div>
        </div>
    </section>
@endsection