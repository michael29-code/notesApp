@extends('template')

@section('content')
    <h1>Create Notes</h1>
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label  @error('title') is-invalid @enderror">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback m-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body">{{ old('body') }}</textarea>
            @error('body')
                <div class="invalid-feedback m-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
