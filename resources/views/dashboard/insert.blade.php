@extends('dashboard.layouts.dashboardLayout')

@section('title', 'Insert New Project')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Insert New Project</h1>
        </div>
        <form action="/dashboard/insert" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" placeholder = "Project Title" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Project Description" name="desc" id="desc" style="height: 100px"></textarea>
            </div>

            <div class="mb-3">
                <label for="btn-group" class="form-label">Tools</label>
                <br>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    @php $i = 1; @endphp
                    @foreach ($tools as $tool)
                        <input type="checkbox" class="btn-check" id="btncheck{{ $i }}" autocomplete="off" name="tools[]" value="{{ $tool->name }}">
                        <label class="btn btn-outline-primary" for="btncheck{{ $i }}">{{ $tool->name }}</label>
                        @php $i++; @endphp
                    @endforeach
{{--                     
                  
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="tools[]" value="HTML">
                    <label class="btn btn-outline-primary" for="btncheck2">HTML</label>
                  
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="tools[]" value="CSS">
                    <label class="btn btn-outline-primary" for="btncheck3">CSS</label> --}}
                </div>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" placeholder = "Project Link" id="link" name="link">
            </div>
{{--             
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" data-show-upload="false" data-show-caption="true" name="image">
            </div> --}}
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection