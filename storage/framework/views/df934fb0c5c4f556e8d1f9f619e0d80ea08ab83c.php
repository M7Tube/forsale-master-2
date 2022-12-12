<div>
    <a href="<?php echo e(route('website.spcialAd', ['id' => $SpcialAd['spcial_ad_id'], app()->getLocale()])); ?>">
        <div>
            <!-- ======= Hero Section ======= -->
            <?php if(file_exists(storage_path('app/img/' . $SpcialAd['picture']))): ?>
                <div id="hero" class="hero route bg-image"
                    style="background-image: url('data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents(storage_path('app/img/' . $SpcialAd['picture']))); ?>'); width: 100%;
                                height: 50vw;
                                object-fit: fill;">
                <?php else: ?>
                    <div id="hero" class="hero route bg-image"
                        style="background-image: url('data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents(storage_path('app/img/defualt.png'))); ?>'); width: 100%;
                                height: 50vw;
                                object-fit: fill;">
            <?php endif; ?>
            
        </div>
    </a>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <div class="col-12">
                                <a href="<?php echo e(route('website.contact-with-manger', app()->getLocale())); ?>"
                                    style="text-decoration: none;">
                                    <div class="Scard card shadow-lg border-2 rounded-lg" style="border-radius: 15px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body text-dark text-left">
                                                        <?php echo e(__('Reserve your space here')); ?>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="container my-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php $__empty_1 = true; $__currentLoopData = $SpcialAdNG; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo e($key); ?>"
                        class="<?php echo e($key == 0 ? 'active' : ''); ?>" aria-current="true"
                        aria-label="Slide <?php echo e($key); ?>"></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php echo e(__('Empty')); ?>

                <?php endif; ?>
            </div>
            <div class="carousel-inner">
                <?php $__empty_1 = true; $__currentLoopData = $SpcialAdNG; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>" data-bs-interval="10000">
                        <a href="<?php echo e(route('website.spcialAd', ['id' => $ads->spcial_ad_id, app()->getLocale()])); ?>">
                            <?php if(file_exists('../storage/app/img/' . $ads['picture'])): ?>
                                <img class="d-block w-100"
                                    style="width: 100%;
                                height: 50vw;
                                object-fit: fill;"
                                    src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $ads['picture'])); ?>"
                                    alt="golden ad picture" />
                            <?php else: ?>
                                <img class="d-block w-100"
                                    style="width: 100%;
                                height: 50vw;
                                object-fit: fill;"
                                    src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                    alt="golden ad picture" />
                            <?php endif; ?>
                            <div class="carousel-caption d-md-block">
                                <h5 class="text-white">
                                    <?php echo e(app()->getLocale() == 'en' ? $ads->en_title ?? '' : $ads->ar_title ?? ''); ?></h5>
                                <p class="text-white">
                                    <?php echo e(app()->getLocale() == 'en' ? $ads->en_desc ?? '' : $ads->ar_desc ?? ''); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php echo e(__('Empty')); ?>

                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo e(__('Previous')); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo e(__('Next')); ?></span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <div class="col-md-12">
                    <div class="form-floating">
                        <div class="col-12">
                            <div class="card-content">
                                <div class="card-body">
                                    <h5 class="mb-5"><?php echo e(__('Category')); ?></h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="<?php echo e(route('website.viewAds', [app()->getLocale(), 'category' => 1])); ?>">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="<?php echo e(asset('img/cars.svg')); ?>"
                                                                        alt="icon" width="150px"><br />
                                                                    <span class="mt-3"><?php echo e(__('Cars')); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="<?php echo e(route('website.viewAds', [app()->getLocale(), 'category' => 2])); ?>">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="<?php echo e(asset('img/home.svg')); ?>"
                                                                        alt="icon" width="150px"><br />
                                                                    <span class="mt-3"><?php echo e(__('Real Estate')); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="<?php echo e(route('website.viewAds', [app()->getLocale(), 'category' => 3])); ?>">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="<?php echo e(asset('img/job.svg')); ?>"
                                                                        alt="icon" width="140px"><br />
                                                                    <span class="mt-3"><?php echo e(__('Jobs')); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="<?php echo e(route('website.viewAds', [app()->getLocale(), 'category' => 4])); ?>">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="<?php echo e(asset('img/mobile-screen-solid.svg')); ?>"
                                                                        alt="icon" width="100px"><br />
                                                                    <span class="mt-3"><?php echo e(__('Mobiles')); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/home-page.blade.php ENDPATH**/ ?>