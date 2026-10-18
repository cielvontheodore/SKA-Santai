@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    <div class="container py-4 py-lg-5">

        <section class="hero p-4 p-md-5 mb-5 shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
                        <i class="bi bi-stars me-1"></i>Software House
                    </span>
                    <h1 class="fw-bold display-6 mb-3">
                        Solusi software untuk bisnis Anda
                    </h1>
                    <p class="lead mb-4 text-white-50">
                        {{ config('app.name') }} membangun perangkat lunak yang andal, modern, dan sesuai kebutuhan bisnis Anda.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                            <i class="bi bi-envelope me-1"></i>Hubungi Kami
                        </a>
                        <a href="{{ route('product.index') }}" class="btn btn-outline-light px-4 py-2">
                            <i class="bi bi-bag me-1"></i>Lihat Produk
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <i class="bi bi-window-stack" style="font-size: 11rem; opacity: .25;"></i>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="text-center mb-4">
                <h2 class="section-title h3 mb-1">Jelajahi</h2>
                <p class="text-muted mb-0">Kenali lebih dekat perusahaan dan karya kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ route('profile') }}" class="text-decoration-none text-reset">
                        <div class="card card-modern media-card h-100">
                            <div class="card-body p-4">
                                <i class="bi bi-building text-primary fs-2 mb-3 d-block"></i>
                                <h3 class="h6 fw-bold mb-1">Profil</h3>
                                <p class="text-muted small mb-0">Tentang perusahaan dan nilai yang kami pegang.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ route('gallery.index') }}" class="text-decoration-none text-reset">
                        <div class="card card-modern media-card h-100">
                            <div class="card-body p-4">
                                <i class="bi bi-images text-primary fs-2 mb-3 d-block"></i>
                                <h3 class="h6 fw-bold mb-1">Gallery</h3>
                                <p class="text-muted small mb-0">Dokumentasi kegiatan dan karya kami.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ route('news.index') }}" class="text-decoration-none text-reset">
                        <div class="card card-modern media-card h-100">
                            <div class="card-body p-4">
                                <i class="bi bi-newspaper text-primary fs-2 mb-3 d-block"></i>
                                <h3 class="h6 fw-bold mb-1">News</h3>
                                <p class="text-muted small mb-0">Berita dan artikel terbaru dari kami.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{ route('product.index') }}" class="text-decoration-none text-reset">
                        <div class="card card-modern media-card h-100">
                            <div class="card-body p-4">
                                <i class="bi bi-bag text-primary fs-2 mb-3 d-block"></i>
                                <h3 class="h6 fw-bold mb-1">Product</h3>
                                <p class="text-muted small mb-0">Produk dan layanan software kami.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="page-banner p-4 p-md-5 text-center">
            <h2 class="section-title h3 mb-2">Siap memulai proyek Anda?</h2>
            <p class="text-white-50 mb-4">Ceritakan kebutuhan Anda, kami siap membantu.</p>
            <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                <i class="bi bi-send me-1"></i>Kirim Pesan
            </a>
        </section>
    </div>
@endsection
