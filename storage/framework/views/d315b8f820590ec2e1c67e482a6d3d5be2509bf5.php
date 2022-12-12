<!DOCTYPE html>
<?php if(app()->getLocale() == 'en'): ?>
    <html lang="<?php echo e(app()->getLocale()); ?>" dir="ltr">
<?php else: ?>
    <html lang="<?php echo e(app()->getLocale()); ?>" dir="rtl">
<?php endif; ?>

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
    
    <link href="<?php echo e(asset('vendor2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor2/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAuUz1eW0v7wSZG7b7Qf91dRyyIoofb-DA",
            authDomain: "ecommerce-for-mhd.firebaseapp.com",
            projectId: "ecommerce-for-mhd",
            storageBucket: "ecommerce-for-mhd.appspot.com",
            messagingSenderId: "632576955647",
            appId: "1:632576955647:web:c1a9ccdf14a17f1564a8ca"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
    </script>
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
    <?php echo $__env->yieldContent('insideHead'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body style="background-color: rgb(236, 235, 235)">
    <?php echo $__env->yieldContent('insideBody'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        window.livewire.on('AreaCreated', () => {
            $('#CreateAreaModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('AreaUpdated', () => {
            $('#editAreaModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('GovernorateCreated', () => {
            $('#CreateGovernorateModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('GovernorateUpdated', () => {
            $('#editGovernorateModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('NeighborhoodCreated', () => {
            $('#CreateNeighborhoodModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('NeighborhoodUpdated', () => {
            $('#editNeighborhoodModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('ManufacturingYearCreated', () => {
            $('#CreatemYModalText').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('ManufacturingYearUpdated', () => {
            $('#editmYModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('CountryOfManufactureCreated', () => {
            $('#CreateCOMModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('CountryOfManufactureUpdated', () => {
            $('#editCOMModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('RentalTimeCreated', () => {
            $('#CreateRMModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('RentalTimeUpdated', () => {
            $('#editRMModal').modal('hide');
        })
    </script>
    
    <script>
        window.livewire.on('ContinentOfOriginCreated', () => {
            $('#CreateCOOModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('ContinentOfOriginUpdated', () => {
            $('#editCOOModal').modal('hide');
        })
    </script>
    
    <script>
        window.livewire.on('Created', () => {
            $('#CreateModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('Updated', () => {
            $('#editModal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('Deleted', () => {
            $('#ConfirmDeleteModal').modal('hide');
        })
    </script>
</body>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo $__env->yieldPushContent('styles'); ?>

</html>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>