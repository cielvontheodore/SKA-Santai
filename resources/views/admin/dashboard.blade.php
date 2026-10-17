@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <p>Welcome back, {{ auth()->user()->name }}.</p>

    <ul>
        <li><a href="{{ route('admin.gallery.index') }}">Manage Gallery</a></li>
        <li><a href="{{ route('admin.news.index') }}">Manage News</a></li>
        <li><a href="{{ route('admin.product.index') }}">Manage Product</a></li>
    </ul>
@endsection
