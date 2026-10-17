@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
    <h1>Add Product</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" value="{{ old('price') }}" min="0" required>
        </p>

        <p>
            <label for="contact">Contact (wa.me link)</label><br>
            <input type="text" name="contact" id="contact" value="{{ old('contact') }}" placeholder="wa.me/6281234567890?text=Halo..." required>
        </p>

        <p>
            <button type="submit">Save</button>
            <a href="{{ route('admin.product.index') }}">Cancel</a>
        </p>
    </form>
@endsection
