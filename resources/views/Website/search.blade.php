@extends('Website.layout')

@section('title', __('Search'))

@section('head')
    <link href="{{ asset('css/adCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyAdsPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loadingIndicator.css') }}" rel="stylesheet">
@endsection

@section('body')
    @livewire('website.search')
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
