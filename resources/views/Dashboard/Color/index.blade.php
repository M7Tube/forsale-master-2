@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Colors') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.color.index')
@endsection
