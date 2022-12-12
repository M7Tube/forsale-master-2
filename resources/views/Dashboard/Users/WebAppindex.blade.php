@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Web/App Personal Users') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.users.web-app-index')
@endsection
