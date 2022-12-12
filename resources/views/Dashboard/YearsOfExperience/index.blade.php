@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Years Of Experience') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.years-of-experience.index')
@endsection
