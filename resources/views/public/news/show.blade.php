@extends('layouts.public')

@section('title', $news->title)

@section('content')
    <div class="container py-4 py-lg-5">

        <a href="{{ route('news.index') }}" class="btn btn-outline-primary btn-sm mb-4">
            <i class="bi bi-arrow-left me-1"></i>Kembali ke News
        </a>

        <article class="card card-modern overflow-hidden">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-100" style="max-height: 520px; object-fit: cover;">
            @endif

            <div class="card-body p-4 p-lg-5">
                <p class="text-primary small fw-semibold mb-2">
                    <i class="bi bi-calendar3 me-1"></i>{{ $news->created_at->format('d M Y') }}
                </p>
                <h1 class="section-title h3 mb-4">{{ $news->title }}</h1>
                <p class="text-muted mb-0" style="white-space: pre-line;">{{ $news->description }}</p>
            </div>
        </article>
    </div>
@endsection
