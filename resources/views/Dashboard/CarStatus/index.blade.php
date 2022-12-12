@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Car Status') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.car-status.index')
@endsection
