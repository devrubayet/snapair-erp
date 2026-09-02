@extends('layouts.frontend.layouts')

@section('content')
<section class="relative overflow-hidden  py-20 lg:py-28">
    {{-- Background decoration --}}
    <div class="absolute -top-40 -right-40 h-96 w-96 rounded-full bg-red-600/20 blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"></div>

    <div class="relative bg-red-400 rounded-3xl mx-auto max-w-7xl px-6 py-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-12 max-w-3xl">
            <a href="{{ route('home') }}" class="inline-block">
                <img
                    src="{{ asset('storage/' . ($settings?->logo ?? '')) }}"
                    class="h-14 w-auto object-contain"
                    alt="{{ $settings?->site_name ?? 'Logo' }}"
                />
            </a>

            <h1 class="mt-6 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                {{ $settings?->site_name ?? 'Your Company' }}
            </h1>

            <p class="mt-3 text-lg leading-8 text-slate-200">
                {{ $settings?->site_tagline ?? '' }}
            </p>

            @if($settings?->tagline_travel)
                <div class="mt-5 inline-flex rounded-full bg-red-600/50 px-5 py-3 text-sm font-medium text-slate-200 ring-1 ring-inset ring-red-500/20">
                    {{ $settings->tagline_travel }}
                </div>
            @endif
        </div>

        {{-- Main Grid --}}
        <div class="grid gap-6 lg:grid-cols-3">

            {{-- Contact Information --}}
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 backdrop-blur">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600 text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.82 3.28a2 2 0 01-.57 1.89l-1.7 1.7a16 16 0 006.34 6.34l1.7-1.7a2 2 0 011.89-.57l3.28.82A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z"/>
                        </svg>
                    </div>

                    <h2 class="text-xl font-semibold text-white">
                        Contact Information
                    </h2>
                </div>

                <div class="space-y-5">

                    @if($settings?->phone_primary)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                Primary Phone
                            </p>
                            <a href="tel:{{ $settings->phone_primary }}"
                               class="mt-1 block text-base font-medium text-white hover:text-red-400">
                                {{ $settings->phone_primary }}
                            </a>
                        </div>
                    @endif

                    @if($settings?->phone_secondary)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                Secondary Phone
                            </p>
                            <a href="tel:{{ $settings->phone_secondary }}"
                               class="mt-1 block text-base font-medium text-white hover:text-red-400">
                                {{ $settings->phone_secondary }}
                            </a>
                        </div>
                    @endif

                    @if($settings?->whatsapp_number)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                WhatsApp
                            </p>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp_number) }}"
                               target="_blank"
                               class="mt-1 block text-base font-medium text-green-400 hover:text-green-300">
                                {{ $settings->whatsapp_number }}
                            </a>
                        </div>
                    @endif

                    @if($settings?->email)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                Email
                            </p>
                            <a href="mailto:{{ $settings->email }}"
                               class="mt-1 block break-all text-base font-medium text-white hover:text-red-400">
                                {{ $settings->email }}
                            </a>
                        </div>
                    @endif

                    @if($settings?->support_email)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                Support Email
                            </p>
                            <a href="mailto:{{ $settings->support_email }}"
                               class="mt-1 block break-all text-base font-medium text-white hover:text-red-400">
                                {{ $settings->support_email }}
                            </a>
                        </div>
                    @endif

                </div>
            </div>


            {{-- Address --}}
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 backdrop-blur">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 21s8-7.5 8-13a8 8 0 10-16 0c0 5.5 8 13 8 13z"/>
                            <circle cx="12" cy="8" r="2.5"/>
                        </svg>
                    </div>

                    <h2 class="text-xl font-semibold text-white">
                        Our Location
                    </h2>
                </div>

                <div class="space-y-5">

                    @if($settings?->address_line)
                        <div>
                            <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                Address
                            </p>
                            <p class="mt-2 leading-7 text-slate-100">
                                {{ $settings->address_line }}
                            </p>
                        </div>
                    @endif

                    <div class="grid grid-cols-2 gap-4">

                        @if($settings?->city)
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                    City
                                </p>
                                <p class="mt-1 text-white">
                                    {{ $settings->city }}
                                </p>
                            </div>
                        @endif

                        @if($settings?->country)
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-300">
                                    Country
                                </p>
                                <p class="mt-1 text-white">
                                    {{ $settings->country }}
                                </p>
                            </div>
                        @endif

                    </div>

                    {{-- Travel identity --}}
                    <div class="mt-6 border-t border-white/10 pt-6">
                        <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-slate-300">
                            Travel Credentials
                        </h3>

                        <div class="space-y-3">

                            @if($settings?->iata_number)
                                <div class="flex items-center justify-between gap-4">
                                    <span class="text-sm text-slate-300">IATA Number</span>
                                    <span class="text-sm font-semibold text-white">
                                        {{ $settings->iata_number }}
                                    </span>
                                </div>
                            @endif

                            @if($settings?->trade_license)
                                <div class="flex items-center justify-between gap-4">
                                    <span class="text-sm text-slate-300">Trade License</span>
                                    <span class="text-sm font-semibold text-white">
                                        {{ $settings->trade_license }}
                                    </span>
                                </div>
                            @endif

                            @if($settings?->civil_no)
                                <div class="flex items-center justify-between gap-4">
                                    <span class="text-sm text-slate-300">Civil No.</span>
                                    <span class="text-sm font-semibold text-white">
                                        {{ $settings->civil_no }}
                                    </span>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>


            {{-- About --}}
            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 backdrop-blur">

                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500 text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z"/>
                        </svg>
                    </div>

                    <h2 class="text-xl font-semibold text-white">
                        About Us
                    </h2>
                </div>

                @if($settings?->about_short)
                    <p class="leading-7 text-slate-100">
                        {{ $settings->about_short }}
                    </p>
                @endif

                @if($settings?->about_full)
                    <div class="mt-5 border-t border-white/10 pt-5">
                        <p class="text-sm leading-7 text-slate-100">
                            {{ $settings->about_full }}
                        </p>
                    </div>
                @endif

            </div>

        </div>

        {{-- Bottom CTA --}}
        <div class="mt-8 overflow-hidden rounded-2xl bg-gradient-to-r from-red-600 to-red-500 p-8 shadow-2xl shadow-red-600/20">
            <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">

                <div>
                    <h2 class="text-2xl font-bold text-white">
                        Ready to plan your next journey?
                    </h2>

                    <p class="mt-2 text-sm text-red-100">
                        Get in touch with our travel experts today.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">

                    @if($settings?->phone_primary)
                        <a href="tel:{{ $settings->phone_primary }}"
                           class="rounded-xl bg-white px-5 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                            Call Us
                        </a>
                    @endif

                    @if($settings?->whatsapp_number)
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp_number) }}"
                           target="_blank"
                           class="rounded-xl border border-white/30 bg-white/10 px-5 py-3 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/20">
                            WhatsApp
                        </a>
                    @endif

                </div>

            </div>
        </div>

    </div>
</section>
@endsection
