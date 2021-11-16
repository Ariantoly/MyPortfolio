@extends('dashboard.layouts.dashboardLayout')

@section('title', 'Insert New Image')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Insert New Image</h1>
        </div>
        
        <form action="/image/insert" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="project" class="form-label">Project</label>
                <select class="form-select" aria-label="Default select example" name="projects[]" required>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($projects as $p)
                        <option value="{{ $p->id }}" @if($i == 1) selected @php $i++; @endphp @endif>{{ $p->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" data-show-upload="false" data-show-caption="true" name="image1" required>
                <input class="form-control" type="file" data-show-upload="false" data-show-caption="true" name="image2">
                <input class="form-control" type="file" data-show-upload="false" data-show-caption="true" name="image3">
                <input class="form-control" type="file" data-show-upload="false" data-show-caption="true" name="image4">
                <input class="form-control" type="file" data-show-upload="false" data-show-caption="true" name="image5">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection