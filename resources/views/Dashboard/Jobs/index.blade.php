@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Jobs') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.jobs.index')
@endsection
