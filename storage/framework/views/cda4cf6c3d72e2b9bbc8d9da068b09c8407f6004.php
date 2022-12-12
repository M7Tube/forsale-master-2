<div class="container-fluid">
    <div class="d-flex justify-content-center">
        <div wire:loading>
            <div class="lds-roller mx-auto">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <?php if($category == 1): ?>
        <h5 class="mb-5"><?php echo e(__('Cars')); ?></h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        <?php echo e(__('Filters')); ?>

                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Ad Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Ad Status')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ad_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ad_statuse_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Governorate')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Governorate')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['governorate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Car Type')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_type_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Car Type')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $carTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($carType->car_type_id); ?>">
                                                                                            <?php echo e($carType->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($carType->car_type_id); ?>">
                                                                                            <?php echo e($carType->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['car_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Car Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_status_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Car Status')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $car_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($car_statu->car_status_id); ?>">
                                                                                            <?php echo e($car_statu->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($car_statu->car_status_id); ?>">
                                                                                            <?php echo e($car_statu->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['car_status_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Color')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="color_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Color')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($color->color_id); ?>">
                                                                                            <?php echo e($color->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($color->color_id); ?>">
                                                                                            <?php echo e($color->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['color_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Rent Or Sale')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ros_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ross; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ros->ros_id); ?>">
                                                                                            <?php echo e($ros->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ros->ros_id); ?>">
                                                                                            <?php echo e($ros->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ros_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Region Of Origin')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="continent_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $continents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $continent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($continent->continent_id); ?>">
                                                                                            <?php echo e($continent->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($continent->continent_id); ?>">
                                                                                            <?php echo e($continent->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['continent_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Transmision Vector')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="motion_vector_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $motion_vectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $motion_vector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($motion_vector->motion_vector_id); ?>">
                                                                                            <?php echo e($motion_vector->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($motion_vector->motion_vector_id); ?>">
                                                                                            <?php echo e($motion_vector->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['motion_vector_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Country Of Manufacture')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="cof_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Country Of Manufacture')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $countryOfmans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $countryOfman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($countryOfman->cof_id); ?>">
                                                                                            <?php echo e($countryOfman->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($countryOfman->cof_id); ?>">
                                                                                            <?php echo e($countryOfman->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['cof_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Kilometer Counter')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['K_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($K_from); ?>"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['K_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Price Range')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($P_from); ?>"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Manufacturing Year Range')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['MY_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($MY_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['MY_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Options')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Picture')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Price')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Spcial Ad')); ?></label>
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Rental Time')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="rental_time_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Rental Time')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $rentalTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rentalTime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($rentalTime->rental_time_id); ?>">
                                                                                            <?php echo e($rentalTime->ar_rent_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($rentalTime->rental_time_id); ?>">
                                                                                            <?php echo e($rentalTime->en_rent_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['rental_time_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            <?php if($ads): ?>
                <?php $__empty_1 = true; $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->ar_title ?? $ad->en_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->en_title ?? $ad->ar_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($ads->links()); ?>

                </div>
            <?php else: ?>
                <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if($category == 2): ?>
        <h5 class="mb-5"><?php echo e(__('Real Estate')); ?></h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        <?php echo e(__('Filters')); ?>

                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Real Estate Main Category')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="REMC_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $REMCs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $REMC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($REMC->REMC_id); ?>">
                                                                                            <?php echo e($REMC->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($REMC->REMC_id); ?>">
                                                                                            <?php echo e($REMC->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['REMC_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Commercial And Artificial Type')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="CAAT_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $CAATs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CAAT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($CAAT->CAAT_id); ?>">
                                                                                            <?php echo e($CAAT->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($CAAT->CAAT_id); ?>">
                                                                                            <?php echo e($CAAT->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['CAAT_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Apartment Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="apartment_status_id"
                                                                                multiple data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $apartment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment_statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($apartment_statu->apartment_status_id); ?>">
                                                                                            <?php echo e($apartment_statu->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($apartment_statu->apartment_status_id); ?>">
                                                                                            <?php echo e($apartment_statu->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['apartment_status_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Building Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="building_statuse_id"
                                                                                multiple data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $building_statuse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $building_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($building_status->building_statuse_id); ?>">
                                                                                            <?php echo e($building_status->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($building_status->building_statuse_id); ?>">
                                                                                            <?php echo e($building_status->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['building_statuse_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Ad Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Ad Status')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ad_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ad_statuse_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Governorate')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Governorate')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['governorate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Area')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="area_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($area->area_id); ?>">
                                                                                            <?php echo e($area->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($area->area_id); ?>">
                                                                                            <?php echo e($area->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Neighborhood')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="neighborhood_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $neighborhoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $neighborhood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($neighborhood->neighborhood_id); ?>">
                                                                                            <?php echo e($neighborhood->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($neighborhood->neighborhood_id); ?>">
                                                                                            <?php echo e($neighborhood->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['neighborhood_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Land Type')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="land_type_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $land_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($land_type->land_type_id); ?>">
                                                                                            <?php echo e($land_type->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($land_type->land_type_id); ?>">
                                                                                            <?php echo e($land_type->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['land_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Rent Or Sale')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ros_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ross; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ros->ros_id); ?>">
                                                                                            <?php echo e($ros->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ros->ros_id); ?>">
                                                                                            <?php echo e($ros->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ros_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Apartment Size')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="A_size_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['A_size_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($A_size_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="A_size_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['A_size_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Land Size')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="L_size_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['L_size_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($L_size_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="L_size_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['L_size_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Building Size')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="B_size_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['B_size_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($B_size_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="B_size_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['B_size_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Floor')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="floor_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['floor_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($floor_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="floor_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['floor_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Room Count')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="room_count_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['room_count_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($room_count_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="room_count_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['room_count_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Price Range')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($P_from); ?>"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Options')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="elevator">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Elevator')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Picture')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Price')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Spcial Ad')); ?></label>
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Rental Time')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="rental_time_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Rental Time')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $rentalTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rentalTime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($rentalTime->rental_time_id); ?>">
                                                                                            <?php echo e($rentalTime->ar_rent_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($rentalTime->rental_time_id); ?>">
                                                                                            <?php echo e($rentalTime->en_rent_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['rental_time_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            <?php if($ads): ?>
                <?php $__empty_1 = true; $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->ar_title ?? $ad->en_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->en_title ?? $ad->ar_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($ads->links()); ?>

                </div>
            <?php else: ?>
                <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if($category == 3): ?>
        <h5 class="mb-5"><?php echo e(__('Jobs')); ?></h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        <?php echo e(__('Filters')); ?>

                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Job Category')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="jobs_categorie_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $jobs_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs_categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($jobs_categorie->jobs_categorie_id); ?>">
                                                                                            <?php echo e($jobs_categorie->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($jobs_categorie->jobs_categorie_id); ?>">
                                                                                            <?php echo e($jobs_categorie->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['jobs_categorie_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Person Languages')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="lang_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($lang->lang_id); ?>">
                                                                                            <?php echo e($lang->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($lang->lang_id); ?>">
                                                                                            <?php echo e($lang->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['lang_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Years Of Experience')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="YOE_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $YOEs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $YOE): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($YOE->YOE_id); ?>">
                                                                                            <?php echo e($YOE->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($YOE->YOE_id); ?>">
                                                                                            <?php echo e($YOE->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['YOE_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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

                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Ad Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Ad Status')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ad_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ad_statuse_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Governorate')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Governorate')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['governorate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Area')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="area_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($area->area_id); ?>">
                                                                                            <?php echo e($area->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($area->area_id); ?>">
                                                                                            <?php echo e($area->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Work Hour')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['work_hour_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($work_hour_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['work_hour_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Extra Work Hour')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="extra_work_hour_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['extra_work_hour_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($extra_work_hour_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="extra_work_hour_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['extra_work_hour_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Work Hour Rent')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_rent_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['work_hour_rent_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($work_hour_rent_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_rent_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['work_hour_rent_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Age')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="age_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['age_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($age_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="age_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['age_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Salary Range')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($P_from); ?>"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Options')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="driving_license">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Driving License')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Picture')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Price')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Spcial Ad')); ?></label>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            <?php if($ads): ?>
                <?php $__empty_1 = true; $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->salary ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->ar_title ?? $ad->en_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->salary ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->en_title ?? $ad->ar_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($ads->links()); ?>

                </div>
            <?php else: ?>
                <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if($category == 4): ?>
        <h5 class="mb-5"><?php echo e(__('Mobiles')); ?></h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        <?php echo e(__('Filters')); ?>

                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Ad Status')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Ad Status')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $ad_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($ad_statuse->ad_statuse_id); ?>">
                                                                                            <?php echo e($ad_statuse->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ad_statuse_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Governorate')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    <?php echo e(__('Choose The Governorate')); ?>

                                                                                </option>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if(app()->getLocale() == 'ar'): ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->ar_name); ?>

                                                                                        </option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?php echo e($governorate->governorate_id); ?>">
                                                                                            <?php echo e($governorate->en_name); ?>

                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <?php endif; ?>
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['governorate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Ram')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="ram_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ram_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($ram_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="ram_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['ram_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Memory')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="memory_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['memory_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($memory_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="memory_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['memory_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Duration Of Use')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="duration_of_use_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['duration_of_use_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($duration_of_use_from); ?>"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="duration_of_use_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['duration_of_use_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Price Range')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="<?php echo e(__('From')); ?>"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="<?php echo e(__('To')); ?>"
                                                                                type="number"
                                                                                min="<?php echo e($P_from); ?>"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                <?php $__errorArgs = ['P_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                                    <?php echo e($message); ?>

                                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                            </span>
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
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <?php echo e(__('Options')); ?>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="customs_paid">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Customs Paid')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Picture')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Ads Without Price')); ?></label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault"><?php echo e(__('Spcial Ad')); ?></label>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            <?php if($ads): ?>
                <?php $__empty_1 = true; $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $ad->mobile_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->ar_title ?? $ad->en_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->ar_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="<?php echo e(route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $ad->mobile_id])); ?>"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge"><?php echo e($ad->price ?? 0); ?>

                                            <?php echo e(__('SYP')); ?></span>
                                        
                                        <?php if(file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0])): ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])); ?>"
                                                alt="Alternate Text" />
                                        <?php else: ?>
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, <?php echo base64_encode(file_get_contents('../storage/app/img/defualt.png')); ?>"
                                                alt="Alternate Text" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <span><?php echo e($ad->en_title ?? $ad->ar_title); ?></span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        <?php if(\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0): ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php else: ?>
                                            <i class="bi bi-clock"></i> <span class="since"><?php echo e(__('Since ')); ?>

                                                <?php echo e(\Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours')); ?>

                                                | <i class="bi bi-geo-alt-fill"></i>
                                                <?php echo e($ad->governorate->en_name ?? ''); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo e($ads->links()); ?>

                </div>
            <?php else: ?>
                <h4 class="text-center text-secondary"><?php echo e(__('Empty')); ?></h4>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/view-ads.blade.php ENDPATH**/ ?>