@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('AppSettings') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.app-settings.index')
@endsection
@section('scripts')

@endsection
