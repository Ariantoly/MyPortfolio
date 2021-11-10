@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="border-bottom border-primary mb-2">
        <h1 class="text-center">Portfolio</h1>
    </div>
    <h6 class="text-center">More in <a href="http://github.com/Ariantoly" target="_blank" class="text-decoration-none"><i class="bi bi-github">GitHub</i></a> and <span class="text-primary">Figma</span></h6>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        @foreach($projects as $project)
            <div class="col">
                <a href="/project/{{ $project->id }}" class="text-reset text-decoration-none">
                <div class="card border-primary h-100 shadow-sm">
                    @if($project->id == 1)
                        @php
                            $projectImages = $project->projectimages[0]->img_path;
                        @endphp
                        <img src="{{ $projectImages }}" class="card-img-top" alt="{{ $project->title }}" title="{{ $project->title }}">    
                    @else
                        <img src="/images/no-image.jpeg" class="card-img-top" alt="{{ $project->title }}" title="{{ $project->title }}">    
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text fs-6 fst-italic">
                            {{ $project->tools }}
                        </p>
                        <p class="card-text">{{ $project->desc }}</p>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-end mt-3">
        {{ $projects->links() }}
    </div>
    
@endsection