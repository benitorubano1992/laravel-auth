@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center my-4">Project List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Data di Creazione</th>
                    <th scope="col">azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->title }}</th>
                        <td>{{ $project->created_at }}</td>
                        <td><a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}"
                                role="button">Dettagli</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>



    </div>
@endsection
