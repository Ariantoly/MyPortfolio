@extends('layouts.project-layout')

@section('title', $title)

@section('content')
    <link rel="stylesheet" href="../css/project-style.css">
    <div class="border-bottom border-primary">
        <h1>{{ $project['title'] }}</h1>
        <p class="fst-italic">See more details in  <a href="{{ $project['link'] }}" target="_blank" class="text-decoration-none">Github</a></p>
    </div>
    
    <div class="desc mt-4 mb-5">
        <h4>Description</h4>
        <p>{{ $project['desc'] }} </p>
    </div>

    <div class="mb-4">
        <h4>Preview</h4>
        @include('components.preview-project')
    </div>
    
@endsection