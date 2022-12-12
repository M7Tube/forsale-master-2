@extends('Website.layout')

@section('title', __('Register'))

@section('head')
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.register')
@endsection
