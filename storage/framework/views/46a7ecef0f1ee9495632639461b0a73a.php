<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <title><?php echo e($settings->meta_title ?? ($settings->site_name ?? 'Travel ERP')); ?></title>
    <meta name="description" content="<?php echo e($settings->meta_description ?? ($settings->site_tagline ?? '')); ?>" />
    <meta name="keywords" content="<?php echo e($settings->meta_keywords ?? ''); ?>" />

    <!-- Open Graph / Social Share Image -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($settings->og_image)): ?>
        <meta property="og:image" content="<?php echo e(asset('storage/' . $settings->og_image)); ?>" />
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Dynamic Favicon -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($settings->favicon)): ?>
        <link rel="icon" type="image/png" href="<?php echo e(asset('storage/' . $settings->favicon)); ?>">
    <?php else: ?>
        <link rel="icon" type="image/png" sizes="16x16"
            href="<?php echo e(asset('admin-end/assets/favicon_io/favicon-16x16.png')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- External CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    <!-- Navbar Component -->
    <?php if (isset($component)) { $__componentOriginal52356ccfc399747292104bf67c421150 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52356ccfc399747292104bf67c421150 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52356ccfc399747292104bf67c421150)): ?>
<?php $attributes = $__attributesOriginal52356ccfc399747292104bf67c421150; ?>
<?php unset($__attributesOriginal52356ccfc399747292104bf67c421150); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52356ccfc399747292104bf67c421150)): ?>
<?php $component = $__componentOriginal52356ccfc399747292104bf67c421150; ?>
<?php unset($__componentOriginal52356ccfc399747292104bf67c421150); ?>
<?php endif; ?>

    <!-- Main Content Yield -->
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer Component -->
    <?php if (isset($component)) { $__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5)): ?>
<?php $attributes = $__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5; ?>
<?php unset($__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5)): ?>
<?php $component = $__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5; ?>
<?php unset($__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5); ?>
<?php endif; ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Mobile Navbar Toggle Script -->
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
                        // 1. Smooth Close (Height 0 + Fade Out + Shift Up)
                        navbar.classList.remove('max-h-96', 'opacity-100', 'translate-y-0');
                        navbar.classList.add('max-h-0', 'opacity-0', '-translate-y-2');

                        // 2. Icon back to Hamburger
                        topLine.setAttribute('d', 'M4 6h16');
                        middleLine.classList.remove('opacity-0');
                        bottomLine.setAttribute('d', 'M4 18h16');
                    } else {
                        // 1. Smooth Open (Slide Down + Fade In)
                        navbar.classList.remove('max-h-0', 'opacity-0', '-translate-y-2');
                        navbar.classList.add('max-h-96', 'opacity-100', 'translate-y-0');

                        // 2. Icon to Cross (✕)
                        topLine.setAttribute('d', 'M6 18L18 6');
                        middleLine.classList.add('opacity-0');
                        bottomLine.setAttribute('d', 'M6 6l12 12');
                    }
                });
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/layouts/frontend/layouts.blade.php ENDPATH**/ ?>