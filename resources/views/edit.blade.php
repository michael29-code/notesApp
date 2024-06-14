@extends('template')

@section('content')
    <h1>Edit Notes</h1>
    <form action="/update/{{ $note->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        {{-- {{ dd($note) }} --}}
        <div class="mb-3">
            <label for="title" class="form-label  @error('title') is-invalid @enderror">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title"
                value="{{ old('title', $note->title) }}">
            @error('title')
                <div class="invalid-feedback m-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body">{{ old('body', $note->body) }}</textarea>
            @error('body')
                <div class="invalid-feedback m-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
