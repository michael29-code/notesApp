@extends('template')

@section('content')

    <h1>Notes App</h1>
    <a href="/create" class="btn btn-primary">Add Data</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
                <th scope="col">image</th>
                <th scope="col">Created</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @if ($notes->isNotEmpty())
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <th scope="row">{{ $note->id }}</th>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->body }}</td>
                        <td>{{ $note->kategori->nama_kategori }}</td>
                        <td> <img src="{{ asset($note->image) }}" alt="" class="img-thumbnail">
                        </td>
                        <td>{{ $note->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/edit/{{ $note->id }}" class="btn btn-warning">Edit</a>
                            <form action="/delete/{{ $note->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger w-100" onclick="return confirm('Are You sure?')"><span
                                        data-feather="x-circle"></span> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <div class="row my-3 text-center">
                <h2>No Notes found</h2>
            </div>
        @endif
    </table>
    {{ $notes->links() }}
@endsection
