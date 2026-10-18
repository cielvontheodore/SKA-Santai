{{-- Reusable card grid for Gallery & News.
     Expects: $items, $showRoute, $empty --}}
@if ($items->isEmpty())
    <div class="card card-modern">
        <div class="card-body text-center text-muted py-5">
            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
            {{ $empty }}
        </div>
    </div>
@else
    <div class="row g-4">
        @foreach ($items as $item)
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route($showRoute, $item) }}" class="text-decoration-none text-reset">
                    <div class="card card-modern media-card h-100">
                        <div class="ratio ratio-4x3">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="thumb-cover">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light text-muted">
                                    <i class="bi bi-image fs-1"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body p-4">
                            <p class="text-primary small fw-semibold mb-1">
                                <i class="bi bi-calendar3 me-1"></i>{{ $item->created_at->format('d M Y') }}
                            </p>
                            <h2 class="h6 fw-bold mb-1">{{ $item->title }}</h2>
                            <p class="text-muted small mb-0">{{ \Illuminate\Support\Str::limit($item->description, 90) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endif
