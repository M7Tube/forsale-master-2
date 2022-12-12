@extends('Website.layout')

@section('title', __('Terms and Conditions'))

@section('head')
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.terms')
@endsection
