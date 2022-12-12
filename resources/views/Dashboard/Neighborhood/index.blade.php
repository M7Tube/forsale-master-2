@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Neighborhoods') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.neighborhood.index')
@endsection
