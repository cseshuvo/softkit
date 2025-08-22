@extends('admin.layouts.app')
@section('app-content')
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    @yield('content')
@endsection
