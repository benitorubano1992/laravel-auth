@extends('layouts.admin')
@section('content')
    <div class="container">
        <h3 class="text-center my-3">{{ $project->title }}</h3>
        <div class="d-flex justify-content-between my-2">
            <div>{{ $project->created_at }}</div>
            <div>{{ $project->slug }}</div>
        </div>
        <div>{{ $project->content }}</div>
    </div>
@endsection
