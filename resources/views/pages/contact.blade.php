@extends('layouts.frontend.layouts')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-red-900 py-16 md:py-24 text-white text-center">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">
                Get in Touch with Us
            </h1>
            <p class="text-lg md:text-xl text-red-100 max-w-2xl mx-auto">
                Have questions about flights, visa processing, or holiday packages? Our SnapAir team is here to help you 24/7.
            </p>
        </div>
        <!-- Background Overlay Shape -->
        <div class="absolute inset-0 bg-black/20"></div>
    </section>

    <!-- Contact & Form Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Contact Info Cards -->
                <div class="space-y-6 lg:col-span-1">
                    
                    <!-- Office Address Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Our Office</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $settings?->address_line ?? '' }}
                               
                            </p>
                        </div>
                    </div>

                    <!-- Phone Number Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Call Us</h3>
                            <p class="text-gray-600 text-sm">{{ $settings->phone_primary }}</p>
                            <p class="text-gray-600 text-sm">{{ $settings->phone_secondary }}</p>
                        </div>
                    </div>

                    <!-- Email Address Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Email Us</h3>
                            <p class="text-gray-600 text-sm">{{ $settings?->email ?? '' }}</p>
                            <p class="text-gray-600 text-sm">{{ $settings?->support_email ?? '' }}</p>
                        </div>
                    </div>

                    <!-- Working Hours Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg mb-1">Working Hours</h3>
                            <p class="text-gray-600 text-sm">Saturday - Thursday: 9:00 AM - 8:00 PM</p>
                            <p class="text-red-500 font-medium text-xs mt-1">Friday: Closed (Online Support Available)</p>
                        </div>
                    </div>

                </div>

                <!-- Contact Form Section -->
                <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-200 lg:col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Send Us a Message</h2>
                    <p class="text-gray-600 text-sm mb-6">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <!-- Laravel Session Message -->
                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-xl text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <!-- Full Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name *</label>
                                <input type="text" id="name" name="name" required placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none text-sm transition">
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="+880 1700-000000"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none text-sm transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="john@example.com"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none text-sm transition">
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Service Type / Subject</label>
                                <select id="subject" name="subject"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none text-sm transition text-gray-600">
                                    <option value="">Select Category</option>
                                    <option value="flight">Flight Booking</option>
                                    <option value="visa">Visa Assistance</option>
                                    <option value="hotel">Hotel Reservation</option>
                                    <option value="holiday">Holiday Package</option>
                                    <option value="other">Other Query</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="How can we assist you?"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none text-sm transition"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full md:w-auto px-8 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl shadow-md transition duration-300 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-white py-12 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6 border-l-4 border-red-600 pl-3">
                Find Us on Map
            </h2>
            <div class="w-full h-80 rounded-2xl overflow-hidden shadow-inner border border-gray-200">
                <iframe 
                    class="w-full h-full border-0"
                    src="{{ $settings->google_map_embed }}" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection