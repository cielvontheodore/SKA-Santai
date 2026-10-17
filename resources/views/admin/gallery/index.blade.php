@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Gallery</h1>
            <p class="text-muted mb-0">Kelola foto galeri.</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-brand">
            <i class="bi bi-plus-lg me-1"></i>Tambah
        </a>
    </div>

    <div class="card card-modern">
        <div class="card-body p-0">
            @if ($galleries->isEmpty())
                <div class="text-center text-muted py-5">
                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                    Belum ada data gallery.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-modern align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($gallery->image)
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" width="56" height="56" class="rounded-3 object-fit-cover">
                                        @endif
                                    </td>
                                    <td class="fw-semibold">{{ $gallery->title }}</td>
                                    <td class="text-muted">{{ $gallery->description }}</td>
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-2">
                                            <a href="{{ route('admin.gallery.edit', $gallery) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
