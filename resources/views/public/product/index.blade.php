@extends('layouts.public')

@section('title', 'Product')

@section('content')
    @include('public.partials.page-hero', [
        'icon' => 'bag',
        'label' => 'Produk & Layanan',
        'title' => 'Layanan Unggulan',
        'subtitle' => 'Produk dan layanan software yang kami tawarkan.',
    ])

    <section class="section">
        <div class="container">
            @if ($products->isEmpty())
                <div class="alert alert-brand d-flex align-items-center gap-2 mb-0">
                    <i class="bi bi-info-circle-fill"></i>
                    <div>Belum ada produk.</div>
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
@endsection
