

<?php $__env->startSection('content'); ?>
    <section class="pt-28 pb-16 px-4 sm:px-6 bg-red-900/20 min-h-screen">
        <div class="max-w-6xl mx-auto">
            
            <!-- Page Header -->
            <div class="text-center mb-12">
                <h2 class="text-xs sm:text-sm font-semibold tracking-widest text-red-500 uppercase mb-2">Our Offerings</h2>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-red-800 tracking-tight">
                    Services We Provide
                </h1>
                <p class="mt-4 text-base sm:text-lg text-red-400 max-w-2xl mx-auto">
                    Explore our top-tier aviation and travel services tailored to deliver comfort, security, and exceptional convenience.
                </p>
                <div class="w-20 h-1 bg-red-600 mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 sm:p-8 hover:border-red-600/60 hover:bg-red-700/40 hover:shadow-xl hover:shadow-red-900/20 transition-all duration-300 group flex flex-col justify-between">
                        <div>
                            <!-- Icon Container -->
                            <div class="w-14 h-14 bg-red-900/30 rounded-xl border border-red-700/50 flex items-center justify-center text-red-500 group-hover:bg-red-600 group-hover:text-white transition-colors duration-300 mb-6">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo e($service['icon']); ?>"></path>
                                </svg>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-red-400 transition-colors">
                                <?php echo e($service['title']); ?>

                            </h3>

                            <!-- Description -->
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                <?php echo e($service['description']); ?>

                            </p>
                        </div>

                        <!-- Action Button -->
                        <div class="pt-4 border-t border-slate-700/50">
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-red-500 hover:text-red-400 transition-colors">
                                Learn More 
                                <svg class="w-4 h-4 ml-1.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <!-- Call to Action Section -->
            <div class="mt-16 bg-gradient-to-r from-red-900/80 via-red-800/80 to-slate-800/80 border border-red-700/50 rounded-2xl p-8 sm:p-12 text-center relative overflow-hidden backdrop-blur-sm">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                    Need a Customized Travel Solution?
                </h2>
                <p class="text-slate-200 max-w-xl mx-auto mb-8 text-sm sm:text-base">
                    Get in touch with our team of experts to tailor a personalized service plan that fits your exact requirements.
                </p>
                <a href="#" class="inline-flex items-center justify-center px-8 py-3.5 bg-white text-red-900 font-bold rounded-xl shadow-lg hover:bg-slate-100 transition-all duration-300 transform hover:-translate-y-0.5">
                    Contact Us Now
                </a>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/pages/services.blade.php ENDPATH**/ ?>