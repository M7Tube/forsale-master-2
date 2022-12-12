@extends('Website.layout')

@section('title', __('Confirm Register'))

@section('head')
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.confirm-register')
@endsection
