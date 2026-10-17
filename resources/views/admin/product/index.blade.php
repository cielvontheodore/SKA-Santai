@extends('layouts.admin')

@section('title', 'Product')

@section('content')
    <h1>Product</h1>

    <p>
        <a href="{{ route('admin.product.create') }}">Add New</a>
    </p>

    @if ($products->isEmpty())
        <p>No products yet.</p>
    @else
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="80">
                            @endif
                        </td>
                        <td>{{ $product->title }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->contact }}</td>
                        <td>
                            <a href="{{ route('admin.product.edit', $product) }}">Edit</a>

                            <form action="{{ route('admin.product.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this item?')">
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
