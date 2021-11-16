@extends('dashboard.layouts.dashboardLayout')

@section('title', 'Tools')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Tools</h1>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a href="/image/insert" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Insert New Tools</a>
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
                        <th scope="col">Tools</th>
                        <th scope="col">Type</th>
                        <th scope="col">Image Path</th>
                        <th scope="col" class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tools as $t)
                        <tr>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->type }}</td>
                            <td>{{ $t->path }}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                <form action="/tools/update/{{ $t->id }}" method="GET" class="d-inline">
                                    @csrf
                                    <button class="badge bg-warning border-0 p-2" type="submit"><i class="bi bi-pencil-fill"></i></button>
                                </form>
                                <form action="/tools/delete/{{ $t->id }}" method="POST" class="d-inline delete">
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
            {{ $tools->links() }}
        </div>
    </main>

    <script>
        $('.delete').on('submit', function() {
            return confirm('Are you sure want to delete?');
        });
    </script>
@endsection