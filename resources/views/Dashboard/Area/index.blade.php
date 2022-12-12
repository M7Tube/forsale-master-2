@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Areas') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.area.index')
@endsection
