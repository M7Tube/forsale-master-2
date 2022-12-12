@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Web/App Commercial Users') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.users.web-app-index2')
@endsection
