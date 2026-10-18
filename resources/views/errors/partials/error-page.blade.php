{{-- Shared body for error pages. Expects: $code, $title, $message --}}
<section class="section d-flex align-items-center" style="min-height: 62vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="display-1 fw-bold text-primary lh-1">{{ $code }}</div>

                <h1 class="section-title h2 mt-3 mb-3">{{ $title }}</h1>

                <p class="text-muted mb-4">{{ $message }}</p>

                <a href="{{ route('home') }}" class="btn btn-brand px-4 py-2">
                   Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>
