@extends('components.layouts.index')

@section('title')
    Login - SkyHi
@endsection

@section('content')
    @include('components.forms.login-content')
@endsection

@section('form')
    @include('components.forms.login-form')
@endsection