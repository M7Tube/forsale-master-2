@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Admin Users') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.users.index')
@endsection
