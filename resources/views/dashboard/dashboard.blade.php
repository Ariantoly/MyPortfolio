@extends('dashboard.layouts.dashboardLayout')

@section('title', 'Dashboard')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Dashboard</h1>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dashboard/insert" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Insert New Project</a>
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
                        <th scope="col" class="col-2">Project Title</th>
                        <th scope="col" class="col-6">Project Description</th>
                        <th scope="col" class="col-2">Tools</th>
                        <th scope="col" class="col-1">Project Link</th>
                        <th scope="col" class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $p)
                        <tr>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->desc }}</td>
                            <td>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($p->tools as $t)
                                    @if ($i != sizeof($p->tools))
                                        {{ $t->name.', ' }}
                                        @php
                                            $i++;
                                        @endphp
                                    @else
                                        {{ $t->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td><a href="{{ $p->link }}" target="_blank">{{ $p->link }}</a></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                <form action="/dashboard/update/{{ $p->id }}" method="GET" class="d-inline">
                                    @csrf
                                    <button class="badge bg-warning border-0 p-2" type="submit"><i class="bi bi-pencil-fill"></i></button>
                                </form>
                                <form action="/dashboard/delete/{{ $p->id }}" method="POST" class="d-inline delete">
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
            {{ $projects->links() }}
        </div>

    </main>

    <script>
        $('.delete').on('submit', function() {
            return confirm('Are you sure want to delete?');
        });
    </script>
@endsection