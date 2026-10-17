@extends('layouts.admin')

@section('title', 'Tambah News')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Tambah News</h1>
            <p class="text-muted mb-0">Isi data di bawah ini.</p>
        </div>
        <a href="{{ route('admin.news.index') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-brand d-flex gap-2 align-items-start mb-4">
            <i class="bi bi-exclamation-circle-fill mt-1"></i>
            <div>
                @foreach ($errors->all() as $error)
                    <div class="fw-semibold small">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="card card-modern">
        <div class="card-body p-4 p-lg-5">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-4">
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required>
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" required>
                        @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-brand px-4">
                        <i class="bi bi-check-lg me-1"></i>Simpan
                    </button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-light px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
