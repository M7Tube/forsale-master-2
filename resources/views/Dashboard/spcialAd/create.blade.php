@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Create New Admin Ads') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.spcial-ad.create')
@endsection
