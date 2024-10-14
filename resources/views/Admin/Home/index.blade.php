@extends('Layout.adminLayout')
@section('title', 'Dashboard')
@section('content')

@if(Auth::check())
<h3>Welcome Back: {{ Auth::User()->name }} </h3>
@endif
@endsection