@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Transmision Vector') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.motion-vector.index')
@endsection
