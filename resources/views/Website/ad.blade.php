@extends('Website.layout')

@section('title', __('Ad'))


@section('head')
    <link href="{{ asset('css/adCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyAdsPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loadingIndicator.css') }}" rel="stylesheet">
    <link href="{{ asset('css/AdPage.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.ad')
@endsection
@section('scripts')
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
@endsection
