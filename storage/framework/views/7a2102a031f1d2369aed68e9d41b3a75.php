

<?php $__env->startSection('content'); ?>
    <section class="relative overflow-hidden py-20 lg:py-28">
        
        <div class="absolute -top-40 -right-40 h-96 w-96 rounded-full bg-red-600/20 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"></div>

        <div class="relative bg-red-800/88 rounded-3xl mx-auto max-w-7xl px-6 py-8 lg:px-8 shadow-2xl border border-white/10">

            
            <div class="mb-12 max-w-3xl">
                <a href="<?php echo e(route('home')); ?>" class="inline-block">
                    <img src="<?php echo e(asset('storage/' . ($settings?->logo ?? ''))); ?>" class="h-14 w-auto object-contain"
                        alt="<?php echo e($settings?->site_name ?? 'Logo'); ?>" />
                </a>

                <h1 class="mt-6 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    <?php echo e($settings?->site_name ?? 'Your Company'); ?>

                </h1>

                <p class="mt-3 text-lg leading-8 text-slate-300">
                    <?php echo e($settings?->site_tagline ?? ''); ?>

                </p>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->tagline_travel): ?>
                    <div
                        class="mt-5 inline-flex rounded-3xl bg-red-950/60 px-4 py-3 text-sm font-medium text-white ring-1 ring-inset ring-red-950/30">
                        <?php echo e($settings->tagline_travel); ?>

                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="grid gap-6 lg:grid-cols-3">

                
                <div class="rounded-2xl border border-white/10 bg-white/[0.2] p-7 backdrop-blur">
                    <div class="mb-6 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600 text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.515l.82 3.28a2 2 0 01-.57 1.89l-1.7 1.7a16 16 0 006.34 6.34l1.7-1.7a2 2 0 011.89-.57l3.28.82A2 2 0 0121 17.72V21a2 2 0 01-2 2h-1C9.716 23 1 14.284 1 3V2a2 2 0 012-2z" />
                            </svg>
                        </div>

                        <h2 class="text-xl font-semibold text-white">
                            Contact Information
                        </h2>
                    </div>

                    <div class="space-y-5">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->phone_primary): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Primary Phone
                                </p>
                                <a href="tel:<?php echo e($settings->phone_primary); ?>"
                                    class="mt-1 block text-base font-medium text-white hover:text-red-400 transition">
                                    <?php echo e($settings->phone_primary); ?>

                                </a>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->phone_secondary): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Secondary Phone
                                </p>
                                <a href="tel:<?php echo e($settings->phone_secondary); ?>"
                                    class="mt-1 block text-base font-medium text-white hover:text-red-400 transition">
                                    <?php echo e($settings->phone_secondary); ?>

                                </a>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->whatsapp_number): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    WhatsApp
                                </p>
                                <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $settings->whatsapp_number)); ?>"
                                    target="_blank"
                                    class="mt-1 block text-base font-medium text-green-400 hover:text-green-300 transition">
                                    <?php echo e($settings->whatsapp_number); ?>

                                </a>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->email): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Email
                                </p>
                                <a href="mailto:<?php echo e($settings->email); ?>"
                                    class="mt-1 block break-all text-base font-medium text-white hover:text-red-400 transition">
                                    <?php echo e($settings->email); ?>

                                </a>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->support_email): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Support Email
                                </p>
                                <a href="mailto:<?php echo e($settings->support_email); ?>"
                                    class="mt-1 block break-all text-base font-medium text-white hover:text-red-400 transition">
                                    <?php echo e($settings->support_email); ?>

                                </a>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>


                
                <div class="rounded-2xl border border-white/10 bg-white/[0.2] p-7 backdrop-blur">
                    <div class="mb-6 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 21s8-7.5 8-13a8 8 0 10-16 0c0 5.5 8 13 8 13z" />
                                <circle cx="12" cy="8" r="2.5" />
                            </svg>
                        </div>

                        <h2 class="text-xl font-semibold text-white">
                            Our Location
                        </h2>
                    </div>

                    <div class="space-y-5">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->address_line): ?>
                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Address
                                </p>
                                <p class="mt-2 leading-7 text-slate-200">
                                    <?php echo e($settings->address_line); ?>

                                </p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <div class="grid grid-cols-2 gap-4">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->city): ?>
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        City
                                    </p>
                                    <p class="mt-1 text-white">
                                        <?php echo e($settings->city); ?>

                                    </p>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->country): ?>
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                        Country
                                    </p>
                                    <p class="mt-1 text-white">
                                        <?php echo e($settings->country); ?>

                                    </p>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>

                        
                        <div class="mt-6 border-t border-white/10 pt-6">
                            <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-slate-400">
                                Travel Credentials
                            </h3>

                            <div class="space-y-3">

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->iata_number): ?>
                                    <div class="flex items-center justify-between gap-4">
                                        <span class="text-sm text-slate-300">IATA Number</span>
                                        <span class="text-sm font-semibold text-white">
                                            <?php echo e($settings->iata_number); ?>

                                        </span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->trade_license): ?>
                                    <div class="flex items-center justify-between gap-4">
                                        <span class="text-sm text-slate-300">Trade License</span>
                                        <span class="text-sm font-semibold text-white">
                                            <?php echo e($settings->trade_license); ?>

                                        </span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->civil_no): ?>
                                    <div class="flex items-center justify-between gap-4">
                                        <span class="text-sm text-slate-300">Civil No.</span>
                                        <span class="text-sm font-semibold text-white">
                                            <?php echo e($settings->civil_no); ?>

                                        </span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>


                
                <div class="rounded-2xl border border-white/10 bg-white/[0.2] p-7 backdrop-blur">

                    <div class="mb-6 flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500 text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            </svg>
                        </div>

                        <h2 class="text-xl font-semibold text-white">
                            About Us
                        </h2>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->about_short): ?>
                        <div class="text-sm leading-7 text-slate-200">
                            <?php echo $settings->about_short; ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->about_full): ?>
                        <div class="mt-4 text-sm leading-7 text-slate-200">
                            <?php echo $settings->about_full; ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>

            
            <div class="mt-16 border-t border-white/10 pt-12">
                <div class="mb-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
                        Meet Our Teams
                    </h2>
                    <p class="mt-2 text-sm text-slate-400">
                        The dedicated professionals driving our vision forward.
                    </p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($teams) && $teams->count() > 0): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <div class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.09] p-6 text-center backdrop-blur transition hover:-translate-y-1 hover:border-red-500/50">
                                <div class="mx-auto h-28 w-28 overflow-hidden rounded-full border-2 border-red-500/30 p-1">
                                    <img src="<?php echo e($member->image ? asset('storage/' . $member->image) : 'https://ui-avatars.com/api/?name=' . urlencode($member->name) . '&background=0D8ABC&color=fff'); ?>" alt="<?php echo e($member->name); ?>"
                                        class="h-full w-full rounded-full object-cover transition duration-300 group-hover:scale-105" />
                                </div>
                                <h3 class="mt-4 text-lg font-semibold text-white"><?php echo e($member->name); ?></h3>
                                <p class="text-xs font-medium text-red-400"><?php echo e($member->designation); ?></p>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($member->bio): ?>
                                    <p class="mt-3 text-xs leading-5 text-slate-300 line-clamp-3">
                                        <?php echo e($member->bio); ?>

                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <?php else: ?>
                        
                        <div class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.04] p-6 text-center backdrop-blur transition hover:-translate-y-1 hover:border-red-500/50">
                            <div class="mx-auto h-28 w-28 overflow-hidden rounded-full border-2 border-red-500/30 p-1">
                                <img src="https://ui-avatars.com/api/?name=Managing+Director&background=ef4444&color=fff" alt="Managing Director"
                                    class="h-full w-full rounded-full object-cover transition duration-300 group-hover:scale-105" />
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-white">Managing Director</h3>
                            <p class="text-xs font-medium text-red-400">Executive Leadership</p>
                            <p class="mt-3 text-xs leading-5 text-slate-300">
                                Leading the company with vision, excellence, and strategic expansion across global markets.
                            </p>
                        </div>

                        <div class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.04] p-6 text-center backdrop-blur transition hover:-translate-y-1 hover:border-red-500/50">
                            <div class="mx-auto h-28 w-28 overflow-hidden rounded-full border-2 border-red-500/30 p-1">
                                <img src="https://ui-avatars.com/api/?name=General+Manager&background=2563eb&color=fff" alt="General Manager"
                                    class="h-full w-full rounded-full object-cover transition duration-300 group-hover:scale-105" />
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-white">General Manager</h3>
                            <p class="text-xs font-medium text-blue-400">Operations Head</p>
                            <p class="mt-3 text-xs leading-5 text-slate-300">
                                Overseeing daily operations, client satisfaction, and maintaining service quality.
                            </p>
                        </div>

                        <div class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.04] p-6 text-center backdrop-blur transition hover:-translate-y-1 hover:border-red-500/50">
                            <div class="mx-auto h-28 w-28 overflow-hidden rounded-full border-2 border-red-500/30 p-1">
                                <img src="https://ui-avatars.com/api/?name=Head+of+Operations&background=f59e0b&color=fff" alt="Head of Operations"
                                    class="h-full w-full rounded-full object-cover transition duration-300 group-hover:scale-105" />
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-white">Head of Operations</h3>
                            <p class="text-xs font-medium text-amber-400">Logistics & Strategy</p>
                            <p class="mt-3 text-xs leading-5 text-slate-300">
                                Managing end-to-end execution and seamless service deliveries for all clients.
                            </p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            
            <div
                class="mt-12 overflow-hidden rounded-2xl bg-gradient-to-r from-red-600 to-red-500 p-8 shadow-2xl shadow-red-600/20">
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

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->phone_primary): ?>
                            <a href="tel:<?php echo e($settings->phone_primary); ?>"
                                class="rounded-xl bg-white px-5 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">
                                Call Us
                            </a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings?->whatsapp_number): ?>
                            <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $settings->whatsapp_number)); ?>"
                                target="_blank"
                                class="rounded-xl border border-white/30 bg-green-800/90 px-5 py-3 text-sm font-semibold text-white backdrop-blur transition hover:bg-green-500/80">
                                WhatsApp
                            </a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>

                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/pages/about.blade.php ENDPATH**/ ?>