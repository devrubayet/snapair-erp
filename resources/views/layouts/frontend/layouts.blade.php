<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <title>{{ $settings->meta_title ?? $settings->site_name ?? 'Travel ERP' }}</title>
    <meta name="description" content="{{ $settings->meta_description ?? $settings->site_tagline ?? '' }}" />
    <meta name="keywords" content="{{ $settings->meta_keywords ?? '' }}" />

    <!-- Open Graph / Social Share Image -->
    @if(!empty($settings->og_image))
        <meta property="og:image" content="{{ asset('storage/' . $settings->og_image) }}" />
    @endif

    <!-- Dynamic Favicon -->
    @if(!empty($settings->favicon))
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $settings->favicon) }}">
    @else
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin-end/assets/favicon_io/favicon-16x16.png') }}">
    @endif

    <!-- External CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navbar Component -->
    <x-frontend.navbar />

    <!-- Main Content Yield -->
    @yield('content')

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
                        // 1. Menu close
                        navbar.classList.remove('max-h-96', 'opacity-100');
                        navbar.classList.add('max-h-0', 'opacity-0');

                        // 2. Back to Hamburger (Normal ৩ টা সমান্তরাল দাগ)
                        topLine.setAttribute('d', 'M4 6h16');
                        middleLine.classList.remove('opacity-0');
                        bottomLine.setAttribute('d', 'M4 18h16');
                    } else {
                        // 1. Menu open
                        navbar.classList.remove('max-h-0', 'opacity-0');
                        navbar.classList.add('max-h-96', 'opacity-100');

                        // 2. Transform to PERFECT Cross (✕)
                        topLine.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                        
                        // Majher ar nicher line absolute invisible/shunno kore dewa hocche
                        middleLine.classList.add('opacity-0');
                        bottomLine.setAttribute('d', 'M12 12h0'); 
                    }
                });
            }
        });
    </script>
</body>

</html>