@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Register') }}</title>
@endsection
@section('insideBody')
    @livewire('auth.register')
@endsection
