@extends('layouts.dashboard')
@section('insideHead')
    <title>{{ __('Statistics') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

@endsection
@section('insideBody')
    @livewire('dashboard.app-settings.statistics')
@endsection
@section('scripts')

@endsection
