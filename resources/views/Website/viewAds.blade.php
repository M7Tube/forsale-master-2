@extends('Website.layout')

@section('title', __('View Ads'))

@section('head')
    <link href="{{ asset('css/adCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyAdsPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loadingIndicator.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" rel="stylesheet">
    <style>
        [aria-current] .page-link {
            background-color: black !important;
        }

        [rel='prev'], [rel='next'] {
            background-color: white !important;
            color: black;
        }

        .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
            background-color: white !important;
            color: black;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.view-ads')
@endsection
@section('scripts')
    <script>
        Livewire.on('gotoTop', () => {
            window.scrollTo({
                top: 0,
                left: 0,
                behaviour: 'smooth'
            })
        })
    </script>
@endsection
