@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="border-bottom border-primary mb-2">
        <h1 class="text-center">Portfolio</h1>
    </div>
    <h6 class="text-center">More in <a href="http://github.com/Ariantoly" target="_blank" class="text-decoration-none"><i class="bi bi-github">GitHub</i></a></h6>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        @foreach($projects as $project)
            <div class="col">
                <div class="card border-primary h-100">
                    <img src="{{ $project['img'] }}" class="card-img-top" alt="Frawlsalla" title="{{ $project['title'] }}">
                    <div class="card-body">
                        <a href="/project/{{ $project['id'] }}" class="text-reset text-decoration-none"><h5 class="card-title">{{ $project['title'] }}</h5></a>
                        <p class="card-text fs-6 fst-italic">
                            @for($i = 0; $i < sizeof($project['tools']); $i++)
                                @if($i == sizeof($project['tools']) - 1)
                                    {{ $project['tools'][$i] }}
                                @else
                                    {{ $project['tools'][$i].', ' }}
                                @endif
                            @endfor
                        </p>
                        <p class="card-text">{{ $project['desc'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection