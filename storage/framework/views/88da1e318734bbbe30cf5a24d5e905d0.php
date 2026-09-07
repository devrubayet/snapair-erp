

<?php $__env->startSection('content'); ?>
 <!-- Hero Section -->
    <section class="relative bg-red-900 py-10 md:py-20 text-white text-center">
        <div class=" text-center mb-3">
            <h2 class="text-xs sm:text-sm font-semibold tracking-widest text-500 uppercase mb-2">Our Offerings</h2>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                Services We Provide
            </h1>
            <p class="mt-4 text-base sm:text-lg text-gray-200 max-w-2xl mx-auto">
                Explore our top-tier aviation and travel services tailored to deliver comfort, security, and exceptional
                convenience.
            </p>
            <div class="w-20 h-1 bg-white mx-auto mt-6 rounded-full"></div>
        </div>
        <!-- Background Overlay Shape -->
        <div class="absolute inset-0 bg-black/20"></div>
    </section>
    <section class="pt-14 pb-16 px-4 sm:px-6 bg-red-900/20 min-h-screen">
        
        <div class="max-w-6xl  mx-auto">

            <!-- Page Header -->


            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div
                        class="bg-white/60 border border-slate-700/60 rounded-2xl p-6 sm:p-8 hover:border-red-600/60 hover:bg-red-950/80 hover:shadow-xl hover:shadow-red-900/20 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <!-- Icon Container -->
                            <div
                                class="w-14 h-14 bg-red-400/60 rounded-xl border border-red-700/50 flex items-center justify-center text-red-500 group-hover:bg-red-600 group-hover:text-white transition-colors duration-300 mb-6">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="<?php echo e($service['icon']); ?>"></path>
                                </svg>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold text-red-950 mb-3 group-hover:text-gray-100 transition-colors">
                                <?php echo e($service['title']); ?>

                            </h3>

                            <!-- Description -->
                            <p class="text-red-500 group-hover:text-amber-50 text-sm leading-relaxed mb-6">
                                <?php echo e($service['description']); ?>

                            </p>
                        </div>

                        <!-- Action Button -->
                        <div class="pt-4 border-t border-red-700/50 group-hover:border-amber-50">
                            <a href="#"
                                class="inline-flex items-center text-sm font-semibold text-red-500 hover:text-red-400 transition-colors">
                                Learn More
                                <svg class="w-4 h-4 ml-1.5 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <!-- Call to Action Section -->
            <div
                class="mt-16 bg-gradient-to-r from-red-900/80 via-red-800/80 to-red-600/80 border border-red-700/50 rounded-2xl p-8 sm:p-12 text-center relative overflow-hidden backdrop-blur-sm">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                    Need a Customized Travel Solution?
                </h2>
                <p class="text-slate-200 max-w-xl mx-auto mb-8 text-sm sm:text-base">
                    Get in touch with our team of experts to tailor a personalized service plan that fits your exact
                    requirements.
                </p>
                <a href="<?php echo e(route('contact')); ?>"
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white text-red-900 font-bold rounded-xl shadow-lg hover:bg-slate-100 transition-all duration-300 transform hover:-translate-y-0.5">
                    Contact Us Now
                </a>
            </div>

           

        </div>
    </section>
     <?php if (isset($component)) { $__componentOriginalb41086560f0021b32a1fc027e4adbd66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb41086560f0021b32a1fc027e4adbd66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.ticket-and-visa-search','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.ticket-and-visa-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb41086560f0021b32a1fc027e4adbd66)): ?>
<?php $attributes = $__attributesOriginalb41086560f0021b32a1fc027e4adbd66; ?>
<?php unset($__attributesOriginalb41086560f0021b32a1fc027e4adbd66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb41086560f0021b32a1fc027e4adbd66)): ?>
<?php $component = $__componentOriginalb41086560f0021b32a1fc027e4adbd66; ?>
<?php unset($__componentOriginalb41086560f0021b32a1fc027e4adbd66); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/pages/services.blade.php ENDPATH**/ ?>