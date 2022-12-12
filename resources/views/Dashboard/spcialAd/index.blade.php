@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Admin Ads') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.index')
@endsection
