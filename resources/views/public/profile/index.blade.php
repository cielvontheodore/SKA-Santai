@extends('layouts.public')

@section('title', 'Profil Perusahaan')

@section('content')
    <div class="container py-4 py-lg-5">

        @include('public.partials.page-banner', [
            'icon' => 'building',
            'label' => 'Tentang Kami',
            'title' => 'Profil Perusahaan',
            'subtitle' => 'Mengenal lebih dekat ' . config('app.name') . '.',
        ])

        <section class="row align-items-center g-4 g-lg-5 mb-5">
            <div class="col-lg-6">
                <h2 class="section-title h3 mb-3">Kami membangun software yang membantu bisnis tumbuh</h2>
                <p class="text-muted mb-3">
                    {{ config('app.name') }} adalah perusahaan pengembangan perangkat lunak yang berfokus pada
                    pembuatan aplikasi web, mobile, dan sistem informasi yang andal. Kami membantu bisnis
                    mentransformasi proses manual menjadi solusi digital yang efisien.
                </p>
                <p class="text-muted mb-4">
                    Berdiri dengan semangat kolaborasi, kami percaya bahwa teknologi terbaik lahir dari
                    pemahaman mendalam terhadap kebutuhan klien.
                </p>

                <div class="row g-3">
                    <div class="col-6">
                        <div class="card card-modern h-100">
                            <div class="card-body p-3 p-lg-4 text-center">
                                <div class="fs-3 fw-bold text-primary">50+</div>
                                <div class="text-muted small">Proyek Selesai</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-modern h-100">
                            <div class="card-body p-3 p-lg-4 text-center">
                                <div class="fs-3 fw-bold text-primary">30+</div>
                                <div class="text-muted small">Klien Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <div class="card card-modern p-4 p-lg-5">
                    <i class="bi bi-window-stack text-primary" style="font-size: 9rem; opacity: .18;"></i>
                </div>
            </div>
        </section>

        <section class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card card-modern h-100">
                    <div class="card-body p-4 p-lg-5">
                        <i class="bi bi-eye text-primary fs-3 mb-3 d-block"></i>
                        <h3 class="h5 fw-bold mb-2">Visi</h3>
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
                        <i class="bi bi-bullseye text-primary fs-3 mb-3 d-block"></i>
                        <h3 class="h5 fw-bold mb-2">Misi</h3>
                        <ul class="text-muted mb-0 ps-3">
                            <li>Membangun software berkualitas dan sesuai kebutuhan.</li>
                            <li>Mengutamakan kepuasan dan kepercayaan klien.</li>
                            <li>Berinovasi secara berkelanjutan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="text-center mb-4">
                <h2 class="section-title h3 mb-1">Nilai yang Kami Pegang</h2>
                <p class="text-muted mb-0">Prinsip yang memandu setiap pekerjaan kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-patch-check text-primary fs-3 mb-3 d-block"></i>
                            <h3 class="h6 fw-bold mb-2">Kualitas</h3>
                            <p class="text-muted small mb-0">Standar terbaik di setiap baris kode dan desain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-people text-primary fs-3 mb-3 d-block"></i>
                            <h3 class="h6 fw-bold mb-2">Kolaborasi</h3>
                            <p class="text-muted small mb-0">Bekerja bersama klien sebagai satu tim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-lightning-charge text-primary fs-3 mb-3 d-block"></i>
                            <h3 class="h6 fw-bold mb-2">Sigap</h3>
                            <p class="text-muted small mb-0">Respons cepat dan tepat waktu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <i class="bi bi-shield-check text-primary fs-3 mb-3 d-block"></i>
                            <h3 class="h6 fw-bold mb-2">Terpercaya</h3>
                            <p class="text-muted small mb-0">Amanah dan transparan dalam setiap proyek.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-banner p-4 p-md-5 text-center">
            <h2 class="section-title h3 mb-2">Butuh solusi software untuk bisnis Anda?</h2>
            <p class="text-white-50 mb-4">Diskusikan kebutuhan Anda bersama tim kami.</p>
            <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                <i class="bi bi-envelope me-1"></i>Hubungi Kami
            </a>
        </section>
    </div>
@endsection
