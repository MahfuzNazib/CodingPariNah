@extends('backend.layouts.app')

@section('content')
    {{-- @include('backend.layouts.headers.cards') --}}
    @include('backend.layouts.dashboard_components.admincards')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush