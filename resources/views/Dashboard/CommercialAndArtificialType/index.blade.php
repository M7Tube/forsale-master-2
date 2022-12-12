@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Commercial And Artificial Type') }}</title>
@endsection
@section('insideBody')
    @livewire('dashboard.commercial-and-artificial-type.index')
@endsection
