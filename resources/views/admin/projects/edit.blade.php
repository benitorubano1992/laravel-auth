@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center my-4">Aggiorna il progetto {{ $project->title }}</h2>
        <form method="POST" action="{{ route('admin.projects.update', $project->slug) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text"
                    class="form-control @error('title')
                is-invalid
                @enderror" id="title"
                    name="title" value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror




            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea name="content" id="content" cols="30" rows="10"
                    class="form-control @error('content') 
                is-invalid
                @enderror">{{ old('content', $project->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror



            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>
@endsection
