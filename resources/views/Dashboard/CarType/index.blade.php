@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Car Type') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.car-type.index')
@endsection
