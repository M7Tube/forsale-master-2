@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Cars') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.cars.index')
@endsection
