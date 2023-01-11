@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center my-4">Crea un nuovo Progetto</h2>
        <form method="POST" action="{{ route('admin.projects.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control @error('title')
                is-invalid
            @enderror"
                    id="title" name="title" value="{{ old('title') }}">
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
                @enderror">{{ old('content') }}</textarea>
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
