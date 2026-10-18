@extends('layouts.public')

@section('title', $news->title)

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'newspaper',
        'label' => 'Artikel & Berita',
        'title' => $news->title,
        'subtitle' => $news->created_at->format('d M Y'),
    ])

    <section class="section">
        <div class="container">
            <a href="{{ route('news.index') }}" class="btn btn-outline-primary btn-sm mb-4">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Berita
            </a>

            <article class="card card-modern overflow-hidden">
                @if ($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-100" style="max-height: 520px; object-fit: cover;">
                @endif

                <div class="card-body p-4 p-lg-5">
                    <p class="text-primary small fw-semibold mb-3">
                        <i class="bi bi-calendar3 me-1"></i>{{ $news->created_at->format('d M Y') }}
                    </p>
                    <p class="text-muted mb-0" style="white-space: pre-line;">{{ $news->description }}</p>
                </div>
            </article>
        </div>
    </section>
@endsection
