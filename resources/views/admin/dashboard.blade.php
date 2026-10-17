@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <p>Welcome back, {{ auth()->user()->name }}.</p>

    <p>
        <a href="{{ route('admin.gallery.index') }}">Manage Gallery</a>
    </p>
@endsection
