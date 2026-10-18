@extends('layouts.public')

@section('title', 'Gallery')

@section('content')
    <div class="container py-4 py-lg-5">
        @include('public.partials.page-banner', [
            'icon' => 'images',
            'label' => 'Gallery',
            'title' => 'Gallery',
            'subtitle' => 'Dokumentasi kegiatan dan karya kami.',
        ])

        @include('public.partials.post-grid', [
            'items' => $galleries,
            'showRoute' => 'gallery.show',
            'empty' => 'Belum ada foto gallery.',
        ])
    </div>
@endsection
