@extends('layouts.layout')

@section('title', $title)

@section('content')
    <link rel="stylesheet" href="../css/projectStyle.css">
    <div class="d-flex justify-content-between border-bottom border-primary pb-3">
        <h1>{{ $project->title }}</h1>
        <a href="{{ $project->link }}" target="_blank"><button class="btn btn-primary">Details</button></a>
        {{-- <p class="fst-italic">See more details in  <a href="{{ $project->link }}" target="_blank" class="text-decoration-none">Github</a></p> --}}
    </div>

    <div class="desc mt-4 mb-5">
        <h4>Description</h4>
        <p>{{ $project->desc }} </p>
    </div>

    <div class="tools mt-4 mb-5">
        <h4>Tools</h4>
        <div class="tools d-flex align-items-center">
            @foreach ($project->tools as $tool)
                <img src="{{ $tool->path }}" alt="{{ $tool->name }}" title="{{ $tool->name }}" class="tools me-4">
            @endforeach
        </div>
    </div>
    
    @if(sizeof($project->images) != 0)
        <div class="mb-4">
            <h4>Preview</h4>
            @include('components.previewProject')
        </div>
    @endif

@endsection