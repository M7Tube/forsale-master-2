@extends('Website.layout')

@section('title', __('My Favorite'))

@section('head')
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

@section('body')
    @livewire('website.my-favorite')
@endsection
