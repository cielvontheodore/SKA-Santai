@extends('layouts.public')

@section('title', $product->title)

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'bag',
        'label' => 'Produk & Layanan',
        'title' => $product->title,
        'subtitle' => 'Rp ' . number_format($product->price, 0, ',', '.'),
    ])

    <section class="section">
        <div class="container">
            <a href="{{ route('product.index') }}" class="btn btn-outline-primary btn-sm mb-4">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Layanan
            </a>

            <div class="row g-4 g-lg-5 align-items-start">
                <div class="col-lg-6">
                    <div class="card card-modern overflow-hidden">
                        <div class="ratio ratio-4x3">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="thumb-cover">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light text-muted">
                                    <i class="bi bi-image fs-1"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="eyebrow mb-2">Detail Layanan</p>
                    <h1 class="section-title h2 mb-3">{{ $product->title }}</h1>
                    <div class="fs-3 fw-bold text-primary mb-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </div>

                    <p class="text-muted mb-4" style="white-space: pre-line;">{{ $product->description }}</p>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('contact') }}#kontak" class="btn btn-brand px-4 py-2">
                            <i class="bi bi-chat-dots me-1"></i>Hubungi Kami
                        </a>
                        <a href="{{ $product->whatsappUrl() }}" target="_blank" rel="noopener" class="btn btn-outline-primary px-4 py-2">
                            <i class="bi bi-whatsapp me-1"></i>Chat WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
