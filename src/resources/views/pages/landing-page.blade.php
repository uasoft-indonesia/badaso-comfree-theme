@extends('comfree-theme::layout.index')
@section('title')
    {{ $sitetitle }}
@endsection
@section('mainContent')
    @include('comfree-theme::components.comfree-card-carousel')
    @include('comfree-theme::components.comfree-card')
@endsection
