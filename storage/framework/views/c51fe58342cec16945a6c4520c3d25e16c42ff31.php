<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('css/aaa.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <style>
        :root {
            touch-action: pan-x pan-y;
            height: 100%
        }

        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
        }

        .Scard {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .Scard:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
    <title><?php echo e(__('Dashboard')); ?></title>
    <?php echo \Livewire\Livewire::styles(); ?>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style copy.css')); ?>">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-color: gray;">
                <div class="user-logo">
                    
                    <h6>
                        <?php echo e(auth()->user()['email']); ?></h6>
                    <h6>
                        <?php echo e(auth()->user()['phone_number']); ?></h6>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <?php if(app()->getLocale() == 'en'): ?>
                    <?php if(request()->id): ?>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo e(route(Route::currentRouteName(), 'ar')); ?>/?id=<?php echo e(request()->id); ?>"><i
                                    class="bi bi-translate"></i> <?php echo e(__('Change To Arabic')); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route(Route::currentRouteName(), 'ar')); ?>"><i
                                    class="bi bi-translate"></i> <?php echo e(__('Change To Arabic')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if(request()->id): ?>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo e(route(Route::currentRouteName(), 'en')); ?>/?id=<?php echo e(request()->id); ?>"><i
                                    class="bi bi-translate"></i> <?php echo e(__('Change To English')); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route(Route::currentRouteName(), 'en')); ?>"><i
                                    class="bi bi-translate"></i> <?php echo e(__('Change To English')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php if(auth()->user()->can('create_users')): ?>
                    <li class="">
                        <a href="<?php echo e(route('register', app()->getLocale())); ?>"><i class="bi bi-person-plus-fill"></i>
                            <?php echo e(__('Create New Account')); ?></a>
                    </li>
                <?php endif; ?>
                <li>
                    <form method="POST" action="<?php echo e(route('logout', app()->getLocale())); ?>">
                        <?php echo csrf_field(); ?>
                        <a class="dropdown-item" href="<?php echo e(route('logout', app()->getLocale())); ?>"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="bi bi-box-arrow-left"></i> <?php echo e(__('Log Out')); ?>

                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src=<?php echo e(asset('js2/jquery.min.js')); ?>></script>
    <script src=<?php echo e(asset('js2/popper.js')); ?>></script>
    <script src=<?php echo e(asset('js2/bootstrap.min.js')); ?>></script>
    <script src=<?php echo e(asset('js2/main.js')); ?>></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/layouts/sidenav.blade.php ENDPATH**/ ?>