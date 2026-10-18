@extends('layouts.public')

@section('title', 'Profil Perusahaan')

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'building',
        'label' => 'Tentang Kami',
        'title' => 'Profil Perusahaan',
        'subtitle' => 'Mengenal lebih dekat ' . config('app.name') . '.',
    ])

    {{-- Intro + facts --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <span class="eyebrow">Tentang Kami</span>
                    <h2 class="section-title h2 mt-3 mb-3">Mitra teknologi untuk pertumbuhan bisnis Anda</h2>
                    <p class="text-muted mb-3">
                        {{ config('app.name') }} adalah perusahaan yang bergerak di bidang solusi koneksi,
                        infrastruktur teknologi, dan pengembangan perangkat lunak. Kami membantu bisnis membangun
                        fondasi digital yang stabil, aman, dan siap berkembang.
                    </p>
                    <p class="text-muted mb-0">
                        Berdiri dengan semangat kolaborasi, kami percaya bahwa teknologi terbaik lahir dari
                        pemahaman mendalam terhadap kebutuhan klien.
                    </p>
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

    {{-- Visi & Misi --}}
    <section class="section section-alt border-top border-bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4 p-lg-5">
                            <span class="feature-icon"><i class="bi bi-eye"></i></span>
                            <h3 class="section-title h5 mt-3 mb-2">Visi</h3>
                            <p class="text-muted mb-0">
                                Menjadi mitra teknologi terpercaya yang menghadirkan solusi digital berdampak
                                bagi pertumbuhan bisnis di Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4 p-lg-5">
                            <span class="feature-icon"><i class="bi bi-bullseye"></i></span>
                            <h3 class="section-title h5 mt-3 mb-2">Misi</h3>
                            <ul class="text-muted mb-0 ps-3">
                                <li>Membangun software berkualitas dan sesuai kebutuhan.</li>
                                <li>Mengutamakan kepuasan dan kepercayaan klien.</li>
                                <li>Berinovasi secara berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Prinsip Kami</span>
                <h2 class="section-title h2 mt-2 mb-2">Nilai yang Kami Pegang</h2>
                <p class="text-muted mb-0">Prinsip yang memandu setiap pekerjaan kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-patch-check"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">Kualitas</h3>
                            <p class="text-muted small mb-0">Standar terbaik di setiap baris kode dan desain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-people"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">Kolaborasi</h3>
                            <p class="text-muted small mb-0">Bekerja bersama klien sebagai satu tim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-lightning-charge"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">Sigap</h3>
                            <p class="text-muted small mb-0">Respons cepat dan tepat waktu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">Terpercaya</h3>
                            <p class="text-muted small mb-0">Amanah dan transparan dalam setiap proyek.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-sm band-brand">
        <div class="container text-center">
            <h2 class="section-title h3 mb-2">Butuh solusi untuk bisnis Anda?</h2>
            <p class="text-white-50 mb-4">Diskusikan kebutuhan Anda bersama tim kami.</p>
            <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                Hubungi Kami
            </a>
        </div>
    </section>
@endsection
