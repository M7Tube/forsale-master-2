<div>
    <?php if(app()->getLocale() == 'ar'): ?>
        <?php if(request('category') == 1): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->ar_title ?? $ad->en_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->ar_desc ?? $ad->en_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Manufacturing Year')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->manufacturing_year ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Kilometrag')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->kilometrag ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Car Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->CarStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Rent Or Sale')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RentOrSale->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Transmision Vector')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->MotionVector->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Color')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Color->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Car Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->CarStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Rental Time')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RentalTime->ar_rent_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>
                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(1,<?php echo e($ad->car_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(1,<?php echo e($ad->car_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 2): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->ar_title ?? $ad->en_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->ar_desc ?? $ad->en_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Real Estate Main Category')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RealEstateMainCategory->ar_name ?? __('Empty')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Apartment Status')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->ApartmentStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Land Size')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->land_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Building Size')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->building_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Floor')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->floor ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Room Count')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->room_count ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Apartment Size')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->apartment_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Elevator')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->elevator == 1 ? __('Yes') : __('No')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Commercial And Artificial Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            <?php echo e($ad->CommercialAndArtificialType->ar_name ?? __('Empty')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Building Status')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->BuildingStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Land Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->LandType->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Area')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Area->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Neighborhood')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Neighborhood->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>
                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(2,<?php echo e($ad->real_estate_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(2,<?php echo e($ad->real_estate_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 3): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->ar_title ?? $ad->en_title); ?></h4>
                                <h5><?php echo e(__('Salary')); ?> : <?php echo e($ad->salary ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->JobCategory->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->YearsOfExperience->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->ar_desc ?? $ad->en_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Job Category')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->JobCategory->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Person Langueges')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->PersonLanguage->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Years Of Experience')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->YearsOfExperience->ar_name ?? __('Empty')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Qualification')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->qualification ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Age')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->age ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Work Hour')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->work_hour ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Extra Work Hour')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->extra_work_hour ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Work Hour Rent')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->work_hour_rent ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Driving License')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->driving_license == 1 ? __('Yes') : __('No')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>
                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(3,<?php echo e($ad->job_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(3,<?php echo e($ad->job_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 4): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->ar_title ?? $ad->en_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->ar_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->JobCategory->ar_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->YearsOfExperience->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 4): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->ar_name ?? ''); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->ar_desc ?? $ad->en_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->ar_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ram')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->ram ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Memory')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->memory ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Duration Of Use')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->duration_of_use ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Customs Paid')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->customs_paid == 1 ? __('Yes') : __('No')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>
                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(4,<?php echo e($ad->mobile_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(4,<?php echo e($ad->mobile_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php endif; ?>
    <?php else: ?>
        <?php if(request('category') == 1): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->en_title ?? $ad->ar_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->en_desc ?? $ad->ar_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Manufacturing Year')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->manufacturing_year ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Kilometrag')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->kilometrag ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Car Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->CarStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Rent Or Sale')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RentOrSale->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Transmision Vector')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->MotionVector->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Color')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Color->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Car Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->CarStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Rental Time')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RentalTime->en_rent_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>

                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(1,<?php echo e($ad->car_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(1,<?php echo e($ad->car_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 2): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->en_title ?? $ad->ar_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->en_desc ?? $ad->ar_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Real Estate Main Category')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            <?php echo e($ad->RealEstateMainCategory->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Rent Or Sale')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->RentOrSale->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Apartment Status')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->ApartmentStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Land Size')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->land_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Building Size')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->building_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Floor')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->floor ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Room Count')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->room_count ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Apartment Size')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->apartment_size ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Elevator')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->elevator == 1 ? __('Yes') : __('No')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Commercial And Artificial Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            <?php echo e($ad->CommercialAndArtificialType->en_name ?? __('Empty')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Building Status')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->BuildingStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Land Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->LandType->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Area')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Area->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Neighborhood')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->Neighborhood->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>

                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(2,<?php echo e($ad->real_estate_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(2,<?php echo e($ad->real_estate_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 3): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->en_title ?? $ad->ar_title); ?></h4>
                                <h5><?php echo e(__('Salary')); ?> : <?php echo e($ad->salary ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->JobCategory->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->YearsOfExperience->en_name ?? ''); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->en_desc ?? $ad->ar_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Real Estate Main Category')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->JobCategory->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        <?php echo e(__('Real Estate Main Category')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->PersonLanguage->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Apartment Status')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->YearsOfExperience->en_name ?? __('Empty')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Qualification')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->qualification ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Age')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->age ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Work Hour')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->work_hour ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Extra Work Hour')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->extra_work_hour ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Work Hour Rent')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->work_hour_rent ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Driving License')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->driving_license == 1 ? __('Yes') : __('No')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>

                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(3,<?php echo e($ad->job_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(3,<?php echo e($ad->job_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php elseif(request('category') == 4): ?>
            
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4><?php echo e($ad->en_title ?? $ad->ar_title); ?></h4>
                                <h5><?php echo e(__('Price')); ?> : <?php echo e($ad->price ?? 0); ?> <?php echo e(__('SYP')); ?></h5>
                                <?php if(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0): ?>
                                    <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                        <?php echo e(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds')); ?>

                                        | <i class="bi bi-geo-alt-fill"></i>
                                        <?php echo e($ad->governorate->en_name ?? ''); ?> | <i class="bi bi-person"></i>
                                        <?php echo e($ad->User->first_name ?? ''); ?> <?php echo e($ad->User->last_name ?? ''); ?>

                                    </span>
                                <?php endif; ?>
                                <?php if(request('category') == 1): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Cars')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CarType->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->ContinentOfOrigins->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->CountryOfManufacture->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 2): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Real Estate')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Neighborhood->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->Area->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 3): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->JobCategory->en_name ?? ''); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->YearsOfExperience->en_name ?? ''); ?></span>
                                    </h6>
                                <?php elseif(request('category') == 4): ?>
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary"><?php echo e(__('Jobs')); ?></span>
                                        <span
                                            class="badge rounded-pill bg-secondary"><?php echo e($ad->governorate->en_name ?? ''); ?></span>
                                    </h6>
                                <?php endif; ?>
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> <?php echo e($ad->watch_count ?? ''); ?>

                                    </h6>
                                </div>
                                <?php echo e(__('Descriptions : ')); ?> <br>
                                <p>
                                    <?php echo e($ad->en_desc ?? $ad->ar_desc); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php if($ad['picture']): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>"
                                                            data-slide-number="<?php echo e($key); ?>">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    <?php if($ad['picture']): ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = json_decode($ad['picture']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <?php if(file_exists('../storage/app/img/' . $pic)): ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . $pic)); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php else: ?>
                                                                <div id="carousel-selector-<?php echo e($key); ?>"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="<?php echo e($key); ?>">
                                                                    <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Previous')); ?></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"><?php echo e(__('Next')); ?></span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5><?php echo e(__('Specifications : ')); ?></h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Status')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdStatus->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ad Type')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->AdType->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Governorate')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->governorate->en_name ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Ram')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->ram ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Memory')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->memory ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Duration Of Use')); ?></div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->duration_of_use ?? __('Empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;"><?php echo e(__('Customs Paid')); ?>

                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6"><?php echo e($ad->customs_paid == 1 ? __('Yes') : __('No')); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        <?php if(session()->get('WebLoggedIn', [])): ?>
                            <?php if(!$is_favorite): ?>
                                <button wire:click.prevent="ATF(4,<?php echo e($ad->mobile_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> <?php echo e(__('Add To Favorite')); ?>

                                </button>
                            <?php else: ?>
                                <button wire:click.prevent="ATF(4,<?php echo e($ad->mobile_id); ?>)"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> <?php echo e(__('Remove Form Favorite')); ?>

                                </button>
                            <?php endif; ?>
                        <?php endif; ?>
                        <br>
                        <?php if($ad->isPhone_visable == 1): ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" <?php echo e($ad->phone_number ?? 'disabled'); ?>>
                                <i class="bi bi-telephone"></i> <?php echo e($ad->phone_number ?? __('Empty')); ?>

                            </button>
                        <?php else: ?>
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        <?php endif; ?>
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> <?php echo e(__('Contact')); ?>

                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            <?php echo e(__('Share The Ad')); ?>

                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2"><?php echo $shareComponent; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/ad.blade.php ENDPATH**/ ?>