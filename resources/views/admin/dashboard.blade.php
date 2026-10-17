@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <h1 class="h3 page-title mb-1">Dashboard</h1>
        <p class="text-muted mb-0">Selamat datang kembali, {{ auth()->user()->name }}.</p>
    </div>

    @php
        $cards = [
            ['route' => 'admin.gallery.index', 'icon' => 'images',    'label' => 'Gallery', 'desc' => 'Kelola foto galeri.',         'count' => $counts['gallery']],
            ['route' => 'admin.news.index',    'icon' => 'newspaper',  'label' => 'News',    'desc' => 'Kelola berita dan artikel.',  'count' => $counts['news']],
            ['route' => 'admin.product.index', 'icon' => 'bag',        'label' => 'Product', 'desc' => 'Kelola produk dan harga.',    'count' => $counts['product']],
            ['route' => 'admin.contact.index', 'icon' => 'envelope',   'label' => 'Contact', 'desc' => 'Pesan masuk dari pengunjung.', 'count' => $counts['contact']],
        ];
    @endphp

    <div class="row g-3 g-lg-4">
        @foreach ($cards as $card)
            <div class="col-sm-6 col-xl-3">
                <a href="{{ route($card['route']) }}" class="text-decoration-none">
                    <div class="card card-modern stat-card h-100">
                        <div class="card-body p-4">
                            <div class="stat-icon bg-primary bg-opacity-10 text-primary mb-3">
                                <i class="bi bi-{{ $card['icon'] }} fs-4"></i>
                            </div>
                            <div class="d-flex align-items-baseline justify-content-between">
                                <h2 class="h6 fw-bold mb-0 text-dark">{{ $card['label'] }}</h2>
                                <span class="fs-4 fw-bold text-primary">{{ $card['count'] }}</span>
                            </div>
                            <p class="text-muted small mb-0 mt-1">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
