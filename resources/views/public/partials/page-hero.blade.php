{{-- Full-width page hero used across public pages.
     Expects: $icon, $label, $title, $subtitle --}}
<section class="band-brand">
    <span class="hero-blob" style="width: 16rem; height: 16rem; top: -5rem; right: -4rem; background: rgba(255,255,255,.16);"></span>
    <span class="hero-blob" style="width: 14rem; height: 14rem; bottom: -6rem; left: 20%; background: rgba(255,255,255,.08);"></span>

    <div class="container position-relative py-5">
        <span class="eyebrow-light"><i class="bi bi-{{ $icon }} me-1"></i>{{ $label }}</span>
        <h1 class="section-title display-6 mt-3 mb-2">{{ $title }}</h1>
        <p class="text-white-50 mb-0">{{ $subtitle }}</p>
    </div>
</section>
