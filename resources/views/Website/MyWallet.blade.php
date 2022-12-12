@extends('Website.layout')

@section('title', __('My Wallet'))

@section('head')
@endsection

@section('body')
    <div style="margin-top: 100px"></div>
    @livewire('website.my-wallet')
@endsection
