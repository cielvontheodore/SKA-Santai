@extends('layouts.public')

@section('title', $gallery->title)

@section('content')
    <div class="container py-4 py-lg-5">

        <a href="{{ route('gallery.index') }}" class="btn btn-outline-primary btn-sm mb-4">
            <i class="bi bi-arrow-left me-1"></i>Kembali ke Gallery
        </a>

        <div class="card card-modern overflow-hidden">
            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-100" style="max-height: 560px; object-fit: cover;">
            @endif

            <div class="card-body p-4 p-lg-5">
                <h1 class="section-title h3 mb-2">{{ $gallery->title }}</h1>
                <p class="text-muted small mb-4">
                    <i class="bi bi-calendar3 me-1"></i>{{ $gallery->created_at->format('d M Y') }}
                </p>
                <p class="text-muted mb-0" style="white-space: pre-line;">{{ $gallery->description }}</p>
            </div>
        </div>
    </div>
@endsection
