@extends('layouts.public')

@section('title', 'News')

@section('content')
    <div class="container py-4 py-lg-5">
        @include('public.partials.page-banner', [
            'icon' => 'newspaper',
            'label' => 'News',
            'title' => 'News',
            'subtitle' => 'Berita dan artikel terbaru dari kami.',
        ])

        @include('public.partials.post-grid', [
            'items' => $news,
            'showRoute' => 'news.show',
            'empty' => 'Belum ada berita.',
        ])
    </div>
@endsection
