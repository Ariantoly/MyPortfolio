@extends('layouts.projectLayout')

@section('title', $title)

@section('content')
    <link rel="stylesheet" href="../css/projectStyle.css">
    <div class="border-bottom border-primary">
        <h1>{{ $project['title'] }}</h1>
        <p class="fst-italic">See more details in  <a href="{{ $project['link'] }}" target="_blank" class="text-decoration-none">Github</a></p>
    </div>
    
    <div class="desc mt-4 mb-5">
        <h4>Description</h4>
        <p>{{ $project['desc'] }} </p>
    </div>

    <div class="tools mt-4 mb-5">
        <h4>Tools</h4>
        @for($i = 0; $i < sizeof($project['tools']); $i++)
            @if($i == sizeof($project['tools']) - 1)
                {{ $project['tools'][$i] }}
            @else
                {{ $project['tools'][$i].', ' }}
            @endif
        @endfor
    </div>

    <div class="mb-4">
        <h4>Preview</h4>
        @include('components.previewProject')
    </div>
    
@endsection