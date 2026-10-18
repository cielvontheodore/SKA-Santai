{{-- Reusable page banner. Expects: $icon, $label, $title, $subtitle --}}
<section class="page-banner p-4 p-md-5 mb-5 shadow-sm">
    <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
        <i class="bi bi-{{ $icon }} me-1"></i>{{ $label }}
    </span>
    <h1 class="fw-bold mb-2">{{ $title }}</h1>
    <p class="mb-0 text-white-50">{{ $subtitle }}</p>
</section>
