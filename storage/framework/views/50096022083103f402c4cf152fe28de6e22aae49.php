<div>

    <form wire:submit.prevent="add">
        <?php if($errors->any()): ?>
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <div>
                            <h5 class="text-muted"><?php echo e(__('Some Field Need To be Fixed')); ?></h5>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="text-danger"><span class="text-muted"><?php echo e($error); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="card p-3">
                <h4><?php echo e(__('Ad Type')); ?></h4>
                <div class="container text-center mb-2">
                    <div class="row card bg-white rounded-lg border-0">
                        <div class="btn-group" role="group">
                            <?php $__empty_1 = true; $__currentLoopData = $ad_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ad_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <input type="radio" class="btn-check" wire:model="ad_type_id"
                                    id="ad_type_id<?php echo e($key); ?>" autocomplete="off"
                                    value="<?php echo e($ad_type->ad_type_id); ?>">
                                <label class="mx-3 btn btn-block btn-outline-dark"
                                    for="ad_type_id<?php echo e($key); ?>"><?php echo e(app()->getLocale() == 'ar' ? $ad_type->ar_name : $ad_type->en_name); ?><br>
                                    <b><i><?php echo e(__('You Have ')); ?>

                                            <?php echo e($ad_type->count); ?>

                                            <?php echo e(__('Ad')); ?></i></b>
                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4><?php echo e(__('Main Category')); ?></h4>
                    </div>
                    <div class="col-12 col-md-6">
                        <select wire:model="category" id="category" class="form-control">
                            <option value="1" selected><?php echo e(__('Cars')); ?></option>
                            <option value="2"><?php echo e(__('Real Estate')); ?></option>
                            <option value="3"><?php echo e(__('Jobs')); ?></option>
                            <option value="4"><?php echo e(__('Mobiles')); ?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php if($category == 2): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Real Estate Main Category')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="REMC_id" id="REMC_id">
                                <?php if($real_estate_main_categorys): ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $real_estate_main_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate_main_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($real_estate_main_category->REMC_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $real_estate_main_category->ar_name ?? '' : $real_estate_main_category->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($REMC_id == 4 || $REMC_id == 5): ?>
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6><?php echo e(__('Commercial And Artificial Type')); ?>

                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="CAAT_id" id="CAAT_id">
                                    <?php if($CAATs): ?>
                                        <option value="0"><?php echo e(__('Choose')); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $CAATs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CAAT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($CAAT->CAAT_id); ?>">
                                                <?php echo e(app()->getLocale() == 'ar' ? $CAAT->ar_name ?? '' : $CAAT->en_name ?? ''); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($category != 3 && $category != 4): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="container text-center mb-2">
                        <div class="row card bg-white rounded-lg border-0">
                            <div class="" role="group">
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $rent_or_sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rent_or_sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="col-12 col-md-6">
                                            <input type="radio" class="btn-check" wire:model="ros_id"
                                                id="ros_id<?php echo e($key); ?>" autocomplete="off"
                                                value="<?php echo e($rent_or_sale->ros_id); ?>">
                                            <label class="my-2 btn btn-block btn-outline-dark w-100"
                                                for="ros_id<?php echo e($key); ?>"><?php echo e(app()->getLocale() == 'ar' ? $rent_or_sale->ar_name : $rent_or_sale->en_name); ?>

                                            </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('English Title')); ?></h6>
                <input type="text" wire:model="en_title" id="en_title"
                    placeholder="<?php echo e(__('Enter English Title')); ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('Arabic Title')); ?></h6>
                <input type="text" wire:model="ar_title" id="ar_title" placeholder="<?php echo e(__('Enter Arabic Title')); ?>"
                    class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('English Description')); ?></h6>
                <textarea rows="3" wire:model="en_desc" id="en_desc" placeholder="<?php echo e(__('Enter English Description')); ?>"
                    class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('Arabic Description')); ?></h6>
                <textarea rows="3" wire:model="ar_desc" id="ar_desc" placeholder="<?php echo e(__('Enter Arabic Description')); ?>"
                    class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('Picture')); ?></h6>
                <div class="row">
                    <div class="col-12 mb-3">
                        <input class="form-control" type="file" wire:model="picture" id="picture" multiple>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <?php if($picture): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $picture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-6 col-md-3">
                                        <img src="<?php echo e($pic->temporaryUrl()); ?>" alt="preview pictures" width="175px">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e($category == 1 || $category == 2 || $category == 4 ? __('Price') : __('Salary')); ?>

                </h6>
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input class="form-control" type="number"
                            wire:model="<?php echo e($category == 1 || $category == 2 || $category == 4 ? 'price' : 'salary'); ?>"
                            id="<?php echo e($category == 1 || $category == 2 || $category == 4 ? 'price' : 'salary'); ?>"
                            aria-label="Recipient's username" aria-describedby="basic-addon22">
                        <span class="input-group-text" id="basic-addon22"><?php echo e(__('SYP')); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6><?php echo e(__('Governorate')); ?>

                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-control" wire:model="governorate_id" id="governorate_id">
                            <?php if($governorates): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($governorate->governorate_id); ?>">
                                        <?php echo e(app()->getLocale() == 'ar' ? $governorate->ar_name ?? '' : $governorate->en_name ?? ''); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php if($category == 1): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Manufacturing Year')); ?>

                    </h6>
                    <div class="col-12">
                        
                        <select wire:model="manufacturing_year" class="form-control">
                            <?php for($i = 1980; $i <= date('Y'); $i++): ?>
                                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Kilometrag')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="kilometrag" id="kilometrag"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('K.M')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Car Type')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="car_type_id" id="car_type_id">
                                <?php if($car_types): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($car_type->car_type_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $car_type->ar_name ?? '' : $car_type->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Car Status')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="car_status_id" id="car_status_id">
                                <?php if($car_status): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $car_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($car_statu->car_status_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $car_statu->ar_name ?? '' : $car_statu->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Transmision Vector')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="motion_vector_id" id="motion_vector_id">
                                <?php if($motion_vectors): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $motion_vectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motion_vector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($motion_vector->motion_vector_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $motion_vector->ar_name ?? '' : $motion_vector->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Region Of Origin')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="continent_id" id="continent_id">
                                <?php if($continent_of_origins): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $continent_of_origins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $continent_of_origin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($continent_of_origin->continent_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $continent_of_origin->ar_name ?? '' : $continent_of_origin->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Country Of Manufacture')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="cof_id" id="cof_id">
                                <?php if($country_of_manufactures): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $country_of_manufactures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country_of_manufacture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($country_of_manufacture->cof_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $country_of_manufacture->ar_name ?? '' : $country_of_manufacture->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($ros_id == 2): ?>
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6><?php echo e(__('Rental Time')); ?>

                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="rental_time_id" id="rental_time_id">
                                    <?php if($rental_times): ?>
                                        <option value="0"><?php echo e(__('Choose')); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $rental_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($rental_time->rental_time_id); ?>">
                                                <?php echo e(app()->getLocale() == 'ar' ? $rental_time->ar_rent_name ?? '' : $rental_time->en_rent_name ?? ''); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Color')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="color_id" id="color_id">
                                <?php if($colors): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($color->color_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $color->ar_name ?? '' : $color->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($category == 2): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Apartment Size')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="apartment_size"
                                id="apartment_size" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('M')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Land Size')); ?>

                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="land_size" id="land_size">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Building Size')); ?>

                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="building_size" id="building_size">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Floor')); ?>

                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="floor" id="floor">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Room Count')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="room_count" id="room_count"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('Room')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Elevator')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="elevator" id="elevator0"
                                            autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="elevator0"><?php echo e(__('No')); ?>

                                        </label>
                                        <input type="radio" class="btn-check" wire:model="elevator" id="elevator1"
                                            autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="elevator1"><?php echo e(__('Yes')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($REMC_id == 1): ?>
            <?php endif; ?>
            <?php if($REMC_id == 2): ?>
            <?php endif; ?>
            <?php if($REMC_id == 3): ?>
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6><?php echo e(__('Apartment Status')); ?>

                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="apartment_status_id"
                                    id="apartment_status_id">
                                    <?php if($apartment_status): ?>
                                        <option value="0"><?php echo e(__('Choose')); ?></option>
                                        <?php $__empty_1 = true; $__currentLoopData = $apartment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment_statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($apartment_statu->apartment_status_id); ?>">
                                                <?php echo e(app()->getLocale() == 'ar' ? $apartment_statu->ar_name ?? '' : $apartment_statu->en_name ?? ''); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($REMC_id == 4): ?>
            <?php endif; ?>
            <?php if($REMC_id == 5): ?>
            <?php endif; ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Building Status')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="building_statuse_id" id="building_statuse_id">
                                <?php if($building_status): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $building_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $building_statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($building_statu->building_statuse_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $building_statu->ar_name ?? '' : $building_statu->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Land Type')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="land_type_id" id="land_type_id">
                                <?php if($land_types): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $land_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($land_type->land_type_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $land_type->ar_name ?? '' : $land_type->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Area')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="area_id" id="area_id">
                                <?php if($areas): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($area->area_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $area->ar_name ?? '' : $area->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Neighborhood')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="neighborhood_id" id="neighborhood_id">
                                <?php if($neighborhoods): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $neighborhoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $neighborhood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($neighborhood->neighborhood_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $neighborhood->ar_name ?? '' : $neighborhood->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($category == 3): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Job Category')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="jobs_categorie_id" id="jobs_categorie_id">
                                <?php if($jobs_categories): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $jobs_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs_categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($jobs_categorie->jobs_categorie_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $jobs_categorie->ar_name ?? '' : $jobs_categorie->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Qualification')); ?>

                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="text" wire:model="qualification" id="qualification">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Age')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="age" id="age"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('Year')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Work Hour')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="work_hour" id="work_hour"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('Hour')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Extra Work Hour')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="extra_work_hour"
                                id="extra_work_hour" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('Hour')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Work Hour Rent')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="work_hour_rent"
                                id="work_hour_rent" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('SYP')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Driving License')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="driving_license"
                                            id="driving_license0" autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="driving_license0"><?php echo e(__('No')); ?>

                                        </label>
                                        <input type="radio" class="btn-check" wire:model="driving_license"
                                            id="driving_license1" autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="driving_license1"><?php echo e(__('Yes')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Area')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="area_id" id="area_id">
                                <?php if($areas): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($area->area_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $area->ar_name ?? '' : $area->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Person Langueges')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="lang_id" id="lang_id">
                                <?php if($langs): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($lang->lang_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $lang->ar_name ?? '' : $lang->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Years Of Experience')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="YOE_id" id="YOE_id">
                                <?php if($YOEs): ?>
                                    <option value="0"><?php echo e(__('Choose')); ?></option>
                                    <?php $__empty_1 = true; $__currentLoopData = $YOEs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $YOE): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($YOE->YOE_id); ?>">
                                            <?php echo e(app()->getLocale() == 'ar' ? $YOE->ar_name ?? '' : $YOE->en_name ?? ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($category == 4): ?>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Ram')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="ram" id="ram"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('GB')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Memory')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="memory" id="memory"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('GB')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6><?php echo e(__('Duration Of Use')); ?>

                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="duration_of_use"
                                id="duration_of_use" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><?php echo e(__('Year')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6><?php echo e(__('Customs Paid')); ?>

                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="customs_paid"
                                            id="customs_paid0" autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="customs_paid0"><?php echo e(__('No')); ?>

                                        </label>
                                        <input type="radio" class="btn-check" wire:model="customs_paid"
                                            id="customs_paid1" autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="customs_paid1"><?php echo e(__('Yes')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6><?php echo e(__('Ad Status')); ?>

                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="container text-center mb-2">
                            <div class="row card bg-white rounded-lg border-0">
                                <div class="btn-group" role="group">
                                    <?php $__empty_1 = true; $__currentLoopData = $ad_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ad_statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <input type="radio" class="btn-check" wire:model="ad_statuse_id"
                                            id="ad_statuse_id<?php echo e($key); ?>" autocomplete="off"
                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="ad_statuse_id<?php echo e($key); ?>"><?php echo e(app()->getLocale() == 'ar' ? $ad_statuse->ar_name : $ad_statuse->en_name); ?>

                                        </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6><?php echo e(__('Phone Number')); ?></h6>
                <input type="text" wire:model="phone_number" id="phone_number"
                    placeholder="<?php echo e(__('Enter Phone Number')); ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6><?php echo e(__('Phone Number Status')); ?>

                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="container text-center mb-2">
                            <div class="row card bg-white rounded-lg border-0">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" wire:model="isPhone_visable"
                                        id="isPhone_visable0" autocomplete="off" value="0">
                                    <label class="mx-3 btn btn-block btn-outline-dark"
                                        for="isPhone_visable0"><?php echo e(__('Hidden')); ?>

                                    </label>
                                    <input type="radio" class="btn-check" wire:model="isPhone_visable"
                                        id="isPhone_visable1" autocomplete="off" value="1">
                                    <label class="mx-3 btn btn-block btn-outline-dark"
                                        for="isPhone_visable1"><?php echo e(__('Visable')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center my-2">
            <button type="submit" class="mt-3 btn btn-outline-dark w-75"><?php echo e(__('Create')); ?></button><br />
        </div>
    </form>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/add-new-ad.blade.php ENDPATH**/ ?>