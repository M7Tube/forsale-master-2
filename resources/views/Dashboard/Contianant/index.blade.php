@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Region Of Origin') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.continent-of-origin.index')
@endsection
