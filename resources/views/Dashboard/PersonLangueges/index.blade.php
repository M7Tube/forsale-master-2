@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Person Langueges') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.person-langueges.index')
@endsection
