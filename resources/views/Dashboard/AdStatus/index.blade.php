@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Ad Status') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.ad-status.index')
@endsection
