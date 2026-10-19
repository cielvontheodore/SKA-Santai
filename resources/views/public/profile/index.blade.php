@extends('layouts.public')

@section('title', $profile->hero_title ?: 'Profil Perusahaan')

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'building',
        'label' => $profile->hero_label,
        'title' => $profile->hero_title,
        'subtitle' => $profile->hero_subtitle,
    ])

    {{-- Intro + facts --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <span class="eyebrow">{{ $profile->intro_eyebrow }}</span>
                    <h2 class="section-title h2 mt-3 mb-3">{{ $profile->intro_title }}</h2>
                    <p class="text-muted mb-3">
                        {{ $profile->intro_text_1 }}
                    </p>
                    <p class="text-muted mb-0">
                        {{ $profile->intro_text_2 }}
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-building"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">{{ $profile->fact_1_value }}</p>
                                    <p class="text-muted small mb-0">{{ $profile->fact_1_label }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-calendar3"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">{{ $profile->fact_2_value }}</p>
                                    <p class="text-muted small mb-0">{{ $profile->fact_2_label }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-headset"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">{{ $profile->fact_3_value }}</p>
                                    <p class="text-muted small mb-0">{{ $profile->fact_3_label }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                                    <p class="fs-3 fw-bold text-dark mt-3 mb-0">{{ $profile->fact_4_value }}</p>
                                    <p class="text-muted small mb-0">{{ $profile->fact_4_label }}</p>
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
                                {{ $profile->vision_text }}
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
                                @foreach (preg_split('/\r\n|\r|\n/', (string) $profile->mission_text) as $line)
                                    @if (trim($line) !== '')
                                        <li>{{ trim($line) }}</li>
                                    @endif
                                @endforeach
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
                <span class="eyebrow">{{ $profile->values_eyebrow }}</span>
                <h2 class="section-title h2 mt-2 mb-2">{{ $profile->values_title }}</h2>
                <p class="text-muted mb-0">{{ $profile->values_subtitle }}</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-patch-check"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">{{ $profile->value_1_title }}</h3>
                            <p class="text-muted small mb-0">{{ $profile->value_1_desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-people"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">{{ $profile->value_2_title }}</h3>
                            <p class="text-muted small mb-0">{{ $profile->value_2_desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-lightning-charge"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">{{ $profile->value_3_title }}</h3>
                            <p class="text-muted small mb-0">{{ $profile->value_3_desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-modern h-100">
                        <div class="card-body p-4">
                            <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                            <h3 class="h6 fw-bold mt-3 mb-2">{{ $profile->value_4_title }}</h3>
                            <p class="text-muted small mb-0">{{ $profile->value_4_desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-sm band-brand">
        <div class="container text-center">
            <h2 class="section-title h3 mb-2">{{ $profile->cta_title }}</h2>
            <p class="text-white-50 mb-4">{{ $profile->cta_subtitle }}</p>
            <a href="{{ route('contact') }}" class="btn btn-light-brand px-4 py-2">
                {{ $profile->cta_button_label }}
            </a>
        </div>
    </section>
@endsection
