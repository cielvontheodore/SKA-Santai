@extends('layouts.admin')

@section('title', 'Edit News')

@section('content')
    <h1>Edit News</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}" required>
        </p>

        <p>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" rows="5">{{ old('description', $news->description) }}</textarea>
        </p>

        <p>
            <label for="image">Image</label><br>
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" width="120"><br>
            @endif
            <input type="file" name="image" id="image">
            <br>
            <small>Leave empty to keep the current image.</small>
        </p>

        <p>
            <button type="submit">Update</button>
            <a href="{{ route('admin.news.index') }}">Cancel</a>
        </p>
    </form>
@endsection
