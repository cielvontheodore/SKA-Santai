@extends('layouts.admin')

@section('title', 'Tambah Contact')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Tambah Contact</h1>
            <p class="text-muted mb-0">Isi data di bawah ini.</p>
        </div>
        <a href="{{ route('admin.contact.index') }}" class="btn btn-outline-primary">
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
            <form action="{{ route('admin.contact.store') }}" method="POST">
                @csrf

                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" required>
                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" required>
                        @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" rows="6" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-brand px-4">
                        <i class="bi bi-check-lg me-1"></i>Simpan
                    </button>
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-light px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
