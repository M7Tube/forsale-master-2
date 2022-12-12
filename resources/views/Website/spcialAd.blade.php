@extends('Website.layout')

@section('title', __('Spcial Ad'))

@section('head')
    <link href="{{ asset('css/SpcialAdPage.css') }}" rel="stylesheet">

@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.spcial-ad')
@endsection
