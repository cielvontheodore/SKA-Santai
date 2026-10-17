@extends('layouts.admin')

@section('title', 'Add News')

@section('content')
    <h1>Add News</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </p>

        <p>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
        </p>

        <p>
            <label for="image">Image</label><br>
            <input type="file" name="image" id="image">
        </p>

        <p>
            <button type="submit">Save</button>
            <a href="{{ route('admin.news.index') }}">Cancel</a>
        </p>
    </form>
@endsection
