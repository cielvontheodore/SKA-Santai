{{-- Reusable product card. Expects: $product --}}
<div class="card card-modern media-card h-100">
    <div class="ratio ratio-4x3">
        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="thumb-cover">
        @else
            <div class="d-flex align-items-center justify-content-center bg-light text-muted">
                <i class="bi bi-image fs-1"></i>
            </div>
        @endif
    </div>

    <div class="card-body p-4 d-flex flex-column">
        <h2 class="h6 fw-bold mb-1">{{ $product->title }}</h2>
        <div class="fs-5 fw-bold text-primary mb-3">
            Rp {{ number_format($product->price, 0, ',', '.') }}
        </div>
        <p class="text-muted small mb-4">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p>

        <div class="mt-auto d-flex gap-2">
            <a href="{{ route('product.show', $product) }}" class="btn btn-brand btn-sm flex-fill">
                Detail
            </a>
            <a href="{{ $product->whatsappUrl() }}" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm flex-fill">
                <i class="bi bi-whatsapp me-1"></i>WhatsApp
            </a>
        </div>
    </div>
</div>
