@extends('Website.layout')

@section('title', __('HomePage'))

@section('head')
@endsection

@section('body')
    @livewire('website.home-page')
@endsection
