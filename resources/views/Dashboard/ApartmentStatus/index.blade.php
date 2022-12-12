@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Apartment Status') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.apartment-status.index')
@endsection
