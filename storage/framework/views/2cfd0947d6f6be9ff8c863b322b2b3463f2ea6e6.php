<?php $__env->startSection('title', __('Ad')); ?>


<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('css/adCard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/MyAdsPage.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/loadingIndicator.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/AdPage.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div style="margin-top: 100px"></div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.ad')->html();
} elseif ($_instance->childHasBeenRendered('jnvhRjK')) {
    $componentId = $_instance->getRenderedChildComponentId('jnvhRjK');
    $componentTag = $_instance->getRenderedChildComponentTagName('jnvhRjK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jnvhRjK');
} else {
    $response = \Livewire\Livewire::mount('website.ad');
    $html = $response->html();
    $_instance->logRenderedChild('jnvhRjK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous">
    </script>
    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll()
                    .addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll()
                    .addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding', '0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });
        // when user swipes, go next or previous
        // $('#myCarousel').swipe({
        //     fallbackToMouseEvents: true,
        //     swipeLeft: function(e) {
        //         $('#myCarousel').carousel('next');
        //     },
        //     swipeRight: function(e) {
        //         $('#myCarousel').carousel('prev');
        //     },
        //     allowPageScroll: 'vertical',
        //     preventDefaultEvents: false,
        //     threshold: 75
        // });
        /*
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
        */

        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/Website/ad.blade.php ENDPATH**/ ?>