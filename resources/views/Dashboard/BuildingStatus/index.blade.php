@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Building Status') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.building-status.index')
@endsection
