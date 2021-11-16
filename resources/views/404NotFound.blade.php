@extends('layouts.layout')

@section('title', '404 Not Found')

@section('content')
    <div class="text-center font-monospace text-primary position-absolute top-50 start-50 translate-middle">
        <span class="notFound fw-bold p-0 m-0">404</span>
        <br>
        <span class="m-0 fs-3 fw-bold">Page Not Found</span>
        <br>
        <p>The page you are looking for doesn't exist. </p>
    </div>
    
@endsection