@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Ads Need Approval') }}</title>
    <link href="{{ asset('css/adCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyAdsPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loadingIndicator.css') }}" rel="stylesheet">
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
@endsection
@section('insideBody')
    @livewire('dashboard.all-ads.accept-ads')
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
