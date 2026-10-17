@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
    <h1>Gallery</h1>

    <p>
        <a href="{{ route('admin.gallery.create') }}">Add New</a>
    </p>

    @if ($galleries->isEmpty())
        <p>No gallery items yet.</p>
    @else
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($gallery->image)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" width="80">
                            @endif
                        </td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->description }}</td>
                        <td>
                            <a href="{{ route('admin.gallery.edit', $gallery) }}">Edit</a>

                            <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
