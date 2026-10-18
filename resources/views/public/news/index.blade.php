@extends('layouts.public')

@section('title', 'News')

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'newspaper',
        'label' => 'Informasi Terbaru',
        'title' => 'Artikel & Berita',
        'subtitle' => 'Berita dan artikel terbaru dari kami.',
    ])

    <section class="section">
        <div class="container">
            @include('public.partials.post-grid', [
                'items' => $news,
                'showRoute' => 'news.show',
                'empty' => 'Belum ada berita.',
            ])
        </div>
    </section>
@endsection
