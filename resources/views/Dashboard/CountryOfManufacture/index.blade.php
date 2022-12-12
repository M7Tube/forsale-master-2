@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Country Of Manufacture') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.country-of-manufacture.index')
@endsection
