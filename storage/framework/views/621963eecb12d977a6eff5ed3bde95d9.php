

<?php $__env->startSection('content'); ?>
    
    <section class="py-28 sm:py-32  max-h-screen px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Go Back Button -->
            <a href="javascript:history.back()" class="inline-flex items-center text-sm text-slate-400 hover:text-white transition-colors mb-6 group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Go Back
            </a>

            <!-- Content Card -->
            <div class="bg-red-800/80 rounded-2xl border border-red-700/50 shadow-2xl overflow-hidden backdrop-blur-sm">
                
                <!-- Hero Image Container -->
                <div class="relative h-64 sm:h-80 md:h-96 w-full overflow-hidden bg-red-900">
                    <img src="<?php echo e(asset('storage/' . $offer->img)); ?>" alt="<?php echo e($offer->title); ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-red-900 via-transparent to-transparent"></div>
                    
                    <div class="absolute top-4 left-4 bg-red-900/90 text-red-100 text-xs font-semibold px-3 py-1.5 rounded-full backdrop-blur-md border border-red-700/50">
                        Special Offer
                    </div>
                </div>

                <!-- Body Details -->
                <div class="p-6 sm:p-8 md:p-10 relative z-10">
                    
                    <!-- Title -->
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-red-600 tracking-tight leading-snug mb-4">
                        <?php echo e($offer->title); ?>

                    </h1>

                    <!-- Short Description -->
                    <div class="text-lg text-red-500 font-medium leading-relaxed mb-6 border-l-4 border-red-800 pl-4 bg-red-900/50 py-3 rounded-r-lg">
                        <?php echo $offer->short_desc; ?>

                    </div>

                    <hr class="border-red-700/60 my-6">

                    <!-- Long Description -->
                    <div class="prose prose-invert max-w-none text-red-400 space-y-4 leading-relaxed text-base sm:text-lg">
                        <?php echo $offer->description ?? $offer->long_desc ?? 'Offer details text goes here.'; ?>

                    </div>

                    <!-- Footer Action -->
                    <div class="mt-10 pt-6 border-t border-red-700/60 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-sm text-red-400">
                            * Terms & conditions apply.
                        </div>
                        
                        <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 bg-red-900 hover:bg-red-800 text-white font-semibold rounded-xl shadow-lg hover:shadow-red-900/30 transition-all duration-300 ease-in-out transform hover:-translate-y-0.5 active:translate-y-0">
                            Claim Offer
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/pages/offer_details.blade.php ENDPATH**/ ?>