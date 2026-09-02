<?php $__env->startSection('content'); ?>
    <!-- Modal -->
    <!-- মডাল ডিজাইন (Modal HTML) -->
<div id="modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 flex">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 relative">
        
        <!-- ডাইনামিক কন্টেন্ট দেখানোর জায়গা -->
        <div id="modalBody">
            <!-- জাভাস্ক্রিপ্ট দিয়ে ডেটা এখানে লোড হবে -->
        </div>

        <div class="flex justify-end gap-2 mt-6">
            <button onclick="closeModal()" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 transition font-medium">
                Close
            </button>
            <a id="downloadBtn" href="#"
                class="px-4 py-2 rounded bg-indigo-600 text-white hidden hover:bg-indigo-700 transition font-medium">
                Download Visa PDF
            </a>
        </div>
    </div>
</div>
    <!-- hero section -->
    <section class="relative bg-gray-100">
        <div class="herro-wrapper absolute top-0 left-0 right-0 bottom-0 max-h-85.5">
            <div class="overlaping absolute top-0 bottom-0 left-0 right-0 z-10 "></div>
            <video
                class="block bg-cover bg-no-repeat bg-center saturate-200  relative w-full h-full object-cover object-center z-1"
                src="https://www.pexels.com/download/video/29713296/" type=" video/mp4" muted loop autoplay></video>
        </div>
        <div class="content max-w-7xl pt-17.5 md:pt-37.5 pb-15 px-4 w-full mx-auto my-0 relative z-10">
            <div class="title flex flex-col gap-3 mb-8">
                <div class="title">
                    <h1 class="text-white -tracking-wide text-3xl md:text-4xl leading-[48px] font-semibold mb-4">
                        Welcome To
                        <strong class="font-semibold italic text-4xl md:text-5xl">SnapAir</strong>
                    </h1>
                </div>
                <div class="description text-white font-normal leading-6 text-lg m-0 p-0">
                    <p>Find Flights, Hotels, Visa & Holidays</p>
                </div>
            </div>
            <?php if (isset($component)) { $__componentOriginalea4d32330b6cb27f7f1334c40a77fbda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea4d32330b6cb27f7f1334c40a77fbda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.visatrack-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.visatrack-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea4d32330b6cb27f7f1334c40a77fbda)): ?>
<?php $attributes = $__attributesOriginalea4d32330b6cb27f7f1334c40a77fbda; ?>
<?php unset($__attributesOriginalea4d32330b6cb27f7f1334c40a77fbda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea4d32330b6cb27f7f1334c40a77fbda)): ?>
<?php $component = $__componentOriginalea4d32330b6cb27f7f1334c40a77fbda; ?>
<?php unset($__componentOriginalea4d32330b6cb27f7f1334c40a77fbda); ?>
<?php endif; ?>
        </div>
    </section>

    <!-- exclusive-offer -->
     <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($offers) && count($offers) > 0): ?>
        <section class="exlusive-offer bg-gray-100 py-20">
            <div class="wrapper max-w-7xl mx-auto p-4">
                <h2 class="text-xl max-w-fit border-l-4 bg-red-100 md:text-3xl text-red-500 font-bold p-2">Exclusive Offer</h2>

                <div class="crousal m-2 p-4 text-white">
                    <div class="swiper mySwiper w-full">
                        <div class="swiper-wrapper">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <div class="swiper-slide h-[168px] w-[357.333px]">
                                    <a class="group block" href="#" target="_blank">
                                        <div class="relative h-[168px] rounded-lg overflow-hidden">
                                            <!-- Background Image -->
                                            <img class="w-full h-full object-cover" src="<?php echo e(asset('storage/' . $offer->img)); ?>"
                                                alt="" />

                                            <!-- Indigo Slide-up Overlay -->
                                            <div
                                                class="absolute inset-0 bg-red-900 text-white translate-y-full group-hover:translate-y-0 transition-all duration-500 ease-out px-5 py-4 flex flex-col justify-center">
                                                <!-- LEFT TOP SVG -->
                                                <div class="absolute top-0 left-0">
                                                    <svg width="133" height="108" viewBox="0 0 133 108" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_14_14749)">
                                                            <path
                                                                d="M130.555 16.6804C130.555 65.2815 91.1556 104.68 42.554 104.68C-6.04747 104.68 -45.4468 65.2815 -45.4468 16.6804C-45.4468 -31.9206 -6.04747 -71.3196 42.554 -71.3196C91.1556 -71.3196 130.555 -31.9206 130.555 16.6804ZM-19.0465 16.6804C-19.0465 50.7012 8.53299 78.2804 42.554 78.2804C76.5751 78.2804 104.155 50.7012 104.155 16.6804C104.155 -17.3403 76.5751 -44.9196 42.554 -44.9196C8.53299 -44.9196 -19.0465 -17.3403 -19.0465 16.6804Z"
                                                                fill="url(#paint0_linear_14_14749)"></path>
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_14_14749" x1="-1.44636"
                                                                y1="-43.8196" x2="77.5533" y2="97.681"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white" stop-opacity="0.16"></stop>
                                                                <stop offset="1" stop-color="white" stop-opacity="0.04">
                                                                </stop>
                                                                <stop offset="1" stop-color="white" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="clip0_14_14749">
                                                                <rect width="132.001" height="108" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>

                                                <!-- RIGHT BOTTOM SVG -->
                                                <div class="absolute bottom-0 right-0">
                                                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_14_14745)">
                                                            <circle cx="55.8447" cy="111.899" r="58.7617"
                                                                fill="url(#paint0_linear_14_14745)" fill-opacity="0.7">
                                                            </circle>
                                                            <circle cx="100.246" cy="66.2156" r="63.972"
                                                                fill="url(#paint1_linear_14_14745)" fill-opacity="0.7">
                                                            </circle>
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_14_14745" x1="26.4639"
                                                                y1="71.5005" x2="79.2159" y2="165.987"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white" stop-opacity="0.08"></stop>
                                                                <stop offset="1" stop-color="white" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                            <linearGradient id="paint1_linear_14_14745" x1="68.2604"
                                                                y1="22.2349" x2="125.69" y2="125.099"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white" stop-opacity="0.08"></stop>
                                                                <stop offset="1" stop-color="white" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="clip0_14_14745">
                                                                <rect width="90" height="90" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>

                                                <!-- DETAILS -->
                                                <h4 class="font-bold text-xl title"><?php echo e($offer->title); ?></h4>
                                                <p class="text-sm mt-1 desc">
                                                    <?php echo e($offer->short_desc); ?>

                                                </p>
                                                <div class="text-xs mt-2 opacity-80 underline">
                                                    View Details
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>


                        </div>
                        <div class="swiper-pagination custom-pagination relative"></div>
                    </div>
                </div>

                <div class="offer-add mt-8 mx-3 p-7">
                    <div class="ads-img w-full h-full rounded-md overflow-hidden">
                        <img class="w-full h-full object-f" src="<?php echo e(asset('img/showcasebg.png')); ?>" alt="" />
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- airlines list -->
    <section class="airlines bg-red-100 py-24">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class=" max-w-fit text-left text-4xl border-l-4 p-2 bg-red-50 text-red-600 font-semibold mb-4">
                Top Airlines Are With Us
            </h2>

            <p class="max-w-md  text-left text-red-500 leading-tight mb-10">
                Snapairbd's user-friendly platform connects you to top airlines
                instantly. Enjoy a comfortable and hassle-free journey on any
                destination.
            </p>

            <!-- GRID -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                <!-- CARD -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div
                        class="card group bg-gray-100 hover:bg-white rounded-lg border-x-2 shadow border-red-900 px-4 py-2 flex items-center gap-2 transition-all duration-300 hover:shadow-lg hover:translate-x-1 hover:-translate-y-1 cursor-pointer">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($airline->image): ?>
                            <img class="w-5 h-5 sm:w-8 sm:h-8 object-cover rounded-full"
                                src="<?php echo e(asset('storage/' . $airline->image)); ?>" alt="<?php echo e($airline->name); ?>" />
                        <?php else: ?>
                            <!-- যদি ছবি না থাকে তবে ডিফল্ট কোনো আইকন বা placeholder দেখাতে পারেন -->
                            <div
                                class="w-5 h-5 sm:w-8 sm:h-8 bg-gray-300 rounded-full flex items-center justify-center text-xs">
                                ✈️</div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <h2 class="text-xs md:text-sm font-thin flex-1">
                            <?php echo e($airline->name); ?>

                        </h2>

                        <i
                            class="fa-solid fa-greater-than text-red-300 transition-all duration-300 group-hover:translate-x-2 group-hover:text-red-400 text-sm"></i>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>



        </div>
        </div>
    </section>

    <!-- testimonial -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($testimonials) && count($testimonials) > 0): ?>
        <section class="py-10">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-left max-w-fit border-l-4 bg-red-100 p-2 text-3xl text-red-600 font-bold">What Our Clients
                    Say's</h2>
                <div class="crousal my-6 p-10">
                    <div class="swiper testimonialSwiper  w-full">
                        <div class="swiper-wrapper">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal7b9395bc22e93e7968c9eee0c3477c9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b9395bc22e93e7968c9eee0c3477c9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.testimonial-card','data' => ['testimonial' => $testimonial]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.testimonial-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['testimonial' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b9395bc22e93e7968c9eee0c3477c9b)): ?>
<?php $attributes = $__attributesOriginal7b9395bc22e93e7968c9eee0c3477c9b; ?>
<?php unset($__attributesOriginal7b9395bc22e93e7968c9eee0c3477c9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b9395bc22e93e7968c9eee0c3477c9b)): ?>
<?php $component = $__componentOriginal7b9395bc22e93e7968c9eee0c3477c9b; ?>
<?php unset($__componentOriginal7b9395bc22e93e7968c9eee0c3477c9b); ?>
<?php endif; ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>




                        </div>
                        <div class="swiper-pagination custom-pagination relative"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <!-- fotter -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/welcome.blade.php ENDPATH**/ ?>