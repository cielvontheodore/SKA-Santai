@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    {{-- Hero ------------------------------------------------------------------ --}}
    <section class="band-brand">
        <span class="hero-blob" style="width: 18rem; height: 18rem; top: -6rem; right: -6rem; background: rgba(255,255,255,.18);"></span>
        <span class="hero-blob" style="width: 20rem; height: 20rem; bottom: -8rem; left: 33%; background: rgba(255,255,255,.09);"></span>

        <div class="container position-relative py-5">
            <div class="row align-items-center g-4 g-lg-5 py-lg-4">
                <div class="col-lg-7">
                    <span class="eyebrow-light">PT Solusi Koneksi Anda</span>

                    <h1 class="fw-bold display-5 mt-3 mb-3">
                        Solusi koneksi dan infrastruktur teknologi untuk bisnis Anda
                    </h1>

                    <p class="lead text-white-50 mb-4">
                        {{ config('app.name') }} menghadirkan layanan jaringan, infrastruktur, dan perangkat lunak
                        yang andal untuk mendukung operasional bisnis Anda.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('product.index') }}" class="btn btn-light-brand btn-lg">
                            Lihat Layanan <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="glass-card p-4">
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-4">
                            <li class="d-flex gap-3">
                                <span class="feature-icon-light"><i class="bi bi-diagram-3"></i></span>
                                <div>
                                    <h2 class="h6 fw-semibold text-white mb-1">Jaringan yang Andal</h2>
                                    <p class="small text-white-50 mb-0">
                                        Perancangan dan pemasangan jaringan yang rapi serta mudah dirawat.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <span class="feature-icon-light"><i class="bi bi-clock-history"></i></span>
                                <div>
                                    <h2 class="h6 fw-semibold text-white mb-1">Pemantauan 24/7</h2>
                                    <p class="small text-white-50 mb-0">
                                        Layanan koneksi dipantau sepanjang waktu oleh tim teknis kami.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <span class="feature-icon-light"><i class="bi bi-shield-check"></i></span>
                                <div>
                                    <h2 class="h6 fw-semibold text-white mb-1">Tim Berpengalaman</h2>
                                    <p class="small text-white-50 mb-0">
                                        Teknisi jaringan dan engineer infrastruktur yang berpengalaman.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About ----------------------------------------------------------------- --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <span class="eyebrow">Tentang Kami</span>
                    <h2 class="section-title h2 mt-3 mb-3">PT Solusi Koneksi Anda</h2>
                    <p class="text-muted mb-4">
                        Kami adalah perusahaan yang bergerak di bidang solusi koneksi, infrastruktur teknologi, dan
                        pengembangan perangkat lunak. Kami membantu bisnis membangun fondasi digital yang stabil,
                        aman, dan siap berkembang.
                    </p>
                    <a href="{{ route('profile') }}" class="btn btn-outline-primary">
                        Selengkapnya tentang kami <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-building"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">250+</p>
                                    <p class="text-muted small mb-0">Klien dari berbagai sektor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-calendar3"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">2015</p>
                                    <p class="text-muted small mb-0">Tahun mulai beroperasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-headset"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">24/7</p>
                                    <p class="text-muted small mb-0">Dukungan teknis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">SLA</p>
                                    <p class="text-muted small mb-0">Jaminan mutu layanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk & Layanan ------------------------------------------------------ --}}
    <section class="section section-alt border-top border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5">
                <div>
                    <span class="eyebrow">Produk &amp; Layanan</span>
                    <h2 class="section-title h2 mt-2 mb-0">Layanan Unggulan</h2>
                </div>
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-outline-primary">
                    Lihat semua layanan <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            @if ($products->isEmpty())
                <div class="alert alert-brand d-flex align-items-center gap-2 mb-0">
                    <i class="bi bi-info-circle-fill"></i>
                    <div>Belum ada layanan unggulan yang ditampilkan saat ini.</div>
                </div>
            @else
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-12 col-sm-6 col-lg-4">
                            @include('public.partials.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Artikel --------------------------------------------------------------- --}}
    <section class="section">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5">
                <div>
                    <span class="eyebrow">Informasi Terbaru</span>
                    <h2 class="section-title h2 mt-2 mb-0">Artikel Terbaru</h2>
                </div>
                <a href="{{ route('news.index') }}" class="btn btn-sm btn-outline-primary">
                    Lihat semua artikel <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            @if ($news->isEmpty())
                <div class="alert alert-brand d-flex align-items-center gap-2 mb-0">
                    <i class="bi bi-info-circle-fill"></i>
                    <div>Belum ada artikel yang dipublikasikan.</div>
                </div>
            @else
                @include('public.partials.post-grid', [
                    'items' => $news,
                    'showRoute' => 'news.show',
                    'empty' => 'Belum ada artikel yang dipublikasikan.',
                ])
            @endif
        </div>
    </section>

    {{-- Gallery --------------------------------------------------------------- --}}
    <section class="section section-alt border-top border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5">
                <div>
                    <span class="eyebrow">Dokumentasi</span>
                    <h2 class="section-title h2 mt-2 mb-0">Galeri Kegiatan</h2>
                </div>
                <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-outline-primary">
                    Lihat semua galeri <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            @include('public.partials.post-grid', [
                'items' => $galleries,
                'showRoute' => 'gallery.show',
                'empty' => 'Belum ada foto kegiatan yang diunggah.',
            ])
        </div>
    </section>

    {{-- Contact CTA ----------------------------------------------------------- --}}
    <section class="section-sm band-brand">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-4">
                <div>
                    <h2 class="section-title h3 mb-2">Siap meningkatkan konektivitas bisnis Anda?</h2>
                    <p class="text-white-50 mb-0">
                        Diskusikan kebutuhan jaringan dan infrastruktur perusahaan Anda bersama tim kami.
                    </p>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
