@extends('layouts.dashboardLayout')

@section('title', 'Dashboard')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Project Title</th>
                        <th scope="col">Project Description</th>
                        <th scope="col">Project Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($projects); $i++)
                        <tr>
                            <td>($i + 1)</td>
                            <td>{{ $projects[i]['title'] }}</td>
                            <td>{{ $projects[i]['desc'] }}</td>
                            <td>{{ $projects[i]['link'] }}</td>
                            <td>text</td>
                        </tr>
                    @endfor
                    
                </tbody>
            </table>
        </div>
    </main>
@endsection