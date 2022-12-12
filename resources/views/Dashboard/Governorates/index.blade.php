@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Governorates') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.governorates.index')
@endsection
