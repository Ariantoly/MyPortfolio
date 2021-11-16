@extends('dashboard.layouts.dashboardLayout')

@section('title', 'Project Image')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Project Image</h1>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a href="/image/insert" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Insert New Project Image</a>
            <br><br>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        Total: {{ $size }}
        <br><br>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="col-4">Project Title</th>
                        <th scope="col" class="col-7">Image</th>
                        <th scope="col" class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $i)
                        <tr>
                            <td>{{ $i->project->title }}</td>
                            <td><img src="{{ $i->path }}" alt="" style="width: 40%; height: 40%"></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                <form action="/image/update/{{ $i->id }}" method="GET" class="d-inline">
                                    @csrf
                                    <button class="badge bg-warning border-0 p-2" type="submit"><i class="bi bi-pencil-fill"></i></button>
                                </form>
                                <form action="/image/delete/{{ $i->id }}" method="POST" class="d-inline delete">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0 p-2" type="submit"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end">
            {{ $images->links() }}
        </div>
    </main>

    <script>
        $('.delete').on('submit', function() {
            return confirm('Are you sure want to delete?');
        });
    </script>
@endsection