@extends('components.layouts.index')

@section('title')
    Account Settings - SkyHi
@endsection

@section('content')
    @include('components.forms.account-content')
@endsection

@section('form')
    @include('components.forms.account-form')
@endsection