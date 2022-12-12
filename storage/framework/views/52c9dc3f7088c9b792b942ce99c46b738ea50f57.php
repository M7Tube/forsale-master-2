<div class="container my-5">
    <div class="">
        <h4 style="color: #1F1F39;"><b><?php echo e(__('Login')); ?></b></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mt-3">
                <div class="col-12">
                    <div class="shadow-lg border-1 rounded-lg" style="border-radius: 20px;">
                        <div class="card-content">
                            <div class="card-body">
                                <form wire:submit.prevent="login" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="m-5">
                                        <div class="row">
                                            <?php if(session()->get('fail')): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo e(session()->get('fail')); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div class="col-12">
                                                <label for="email_phone"><?php echo e(__('Email / Phone Number')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputemail_phone" type="text"
                                                        autocomplete="off" wire:model="email_phone"
                                                        value="<?php echo e(old('email_phone')); ?>" required />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['email_phone'];
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
                                            <div class="col-12">
                                                <label for="password"><?php echo e(__('Password')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1">
                                                    <input class="form-control" id="inputpassword" type="password"
                                                        autocomplete="off" wire:model="password"
                                                        value="<?php echo e(old('password')); ?>" required />
                                                    <span class="text-danger">
                                                        <?php $__errorArgs = ['password'];
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
                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="submit"
                                            class="mt-3 btn btn-dark w-50"><?php echo e(__('Login')); ?></button><br />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h6><?php echo e(__('Dont You Have An Account?')); ?></h6><br />
                                        <h6><a
                                                href="<?php echo e(route('website.register', app()->getLocale())); ?>"><u><?php echo e(__('Register')); ?></u></a>
                                        </h6><br />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h6><?php echo e(__('Forget Password ? ')); ?></h6><br />
                                        <h6><a
                                                href="<?php echo e(route('website.forget_password', app()->getLocale())); ?>"><u><?php echo e(__('Reset')); ?></u></a>
                                        </h6><br />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/website/login.blade.php ENDPATH**/ ?>