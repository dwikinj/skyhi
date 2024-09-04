@extends('components.layouts.base')

@section('title')
    {{$profile->name}} Profile's - SkyHi
@endsection

@section('content')
    @include('components.profile')
@endsection
