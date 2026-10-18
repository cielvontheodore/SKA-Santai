@extends('layouts.public')

@section('title', 'Gallery')

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'images',
        'label' => 'Dokumentasi',
        'title' => 'Galeri Kegiatan',
        'subtitle' => 'Dokumentasi kegiatan dan karya kami.',
    ])

    <section class="section">
        <div class="container">
            @include('public.partials.post-grid', [
                'items' => $galleries,
                'showRoute' => 'gallery.show',
                'empty' => 'Belum ada foto gallery.',
            ])
        </div>
    </section>
@endsection
