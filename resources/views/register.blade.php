@extends('components.layouts.index')

@section('title')
    Register - SkyHi
@endsection

@section('content')
    @include('components.forms.register-content')
@endsection

@section('form')
    @include('components.forms.register-form')
@endsection