@extends('layout')
@section('title','หน้าแรก' )
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<div class="header">

  <div class="container">
    <h1>Welcome to Laravel</h1>
    <p>Your application is ready to explore.</p>
    <a href="{{ url('/home') }}">Get Started</a>
</div>
<footer>
    &copy; {{ date('Y') }} Laravel Application
</footer> 
@endsection
