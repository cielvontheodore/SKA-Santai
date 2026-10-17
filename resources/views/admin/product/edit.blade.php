@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}" required>
        </p>

        <p>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" rows="5">{{ old('description', $product->description) }}</textarea>
        </p>

        <p>
            <label for="image">Image</label><br>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="120"><br>
            @endif
            <input type="file" name="image" id="image">
            <br>
            <small>Leave empty to keep the current image.</small>
        </p>

        <p>
            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" min="0" required>
        </p>

        <p>
            <label for="contact">Contact (wa.me link)</label><br>
            <input type="text" name="contact" id="contact" value="{{ old('contact', $product->contact) }}" required>
        </p>

        <p>
            <button type="submit">Update</button>
            <a href="{{ route('admin.product.index') }}">Cancel</a>
        </p>
    </form>
@endsection
