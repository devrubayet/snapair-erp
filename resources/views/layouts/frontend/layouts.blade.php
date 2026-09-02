<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <title>{{ $settings->meta_title ?? ($settings->site_name ?? 'Travel ERP') }}</title>
    <meta name="description" content="{{ $settings->meta_description ?? ($settings->site_tagline ?? '') }}" />
    <meta name="keywords" content="{{ $settings->meta_keywords ?? '' }}" />

    <!-- Open Graph / Social Share Image -->
    @if (!empty($settings->og_image))
        <meta property="og:image" content="{{ asset('storage/' . $settings->og_image) }}" />
    @endif

    <!-- Dynamic Favicon -->
    @if (!empty($settings->favicon))
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $settings->favicon) }}">
    @else
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ asset('admin-end/assets/favicon_io/favicon-16x16.png') }}">
    @endif

    <!-- External CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Lottie Web Player CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Preloader Container -->
<div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500 ease-out">
    <!-- Lottie Container -->
    <div id="lottie-container" class="w-80 h-80"></div>
</div>
    <!-- Navbar Component -->
    <x-frontend.navbar />

    <!-- Main Content Yield -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer Component -->
    <x-frontend.footer />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Mobile Navbar Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('menu-btn');
        const navbar = document.getElementById('navbar-default');
        
        const topLine = document.getElementById('top-line');
        const middleLine = document.getElementById('middle-line');
        const bottomLine = document.getElementById('bottom-line');

        if (menuBtn && navbar) {
            menuBtn.addEventListener('click', () => {
                const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                menuBtn.setAttribute('aria-expanded', !isExpanded);

                if (isExpanded) {
                    // Smooth Close
                    navbar.classList.remove('max-h-96', 'opacity-100', 'translate-y-0');
                    navbar.classList.add('max-h-0', 'opacity-0', '-translate-y-2');

                    // Icon back to Hamburger
                    topLine.setAttribute('d', 'M4 6h16');
                    middleLine.classList.remove('opacity-0');
                    bottomLine.setAttribute('d', 'M4 18h16');
                } else {
                    // Smooth Open
                    navbar.classList.remove('max-h-0', 'opacity-0', '-translate-y-2');
                    navbar.classList.add('max-h-96', 'opacity-100', 'translate-y-0');

                    // Icon to Cross (✕)
                    topLine.setAttribute('d', 'M6 18L18 6');
                    middleLine.classList.add('opacity-0');
                    bottomLine.setAttribute('d', 'M6 6l12 12');
                }
            });
        }
    });
</script>

<script>
    // Lottie Animation Initialize
    const animation = lottie.loadAnimation({
        container: document.getElementById('lottie-container'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: "{{ asset('img/Plane.json') }}" // public/images/preloader.json
    });

    // Page Load হওয়া মাত্র Preloader Fade-out করা
    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        
        // Tailwind এর Opacity Class পরিবর্তন
        preloader.classList.add('opacity-0', 'pointer-events-none');
        
        // Transition শেষ হলে DOM থেকে সরাতে চাইলে:
        setTimeout(() => {
            preloader.classList.add('hidden');
        }, 500); 
    });
</script>
</body>

</html>
