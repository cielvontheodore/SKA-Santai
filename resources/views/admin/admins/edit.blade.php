@extends('layouts.admin')

@section('title', 'Edit Admin')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Edit Admin</h1>
            <p class="text-muted mb-0">Perbarui data di bawah ini.</p>
        </div>
        <a href="{{ route('admin.admins.index') }}" class="btn btn-outline-primary">
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
            <form action="{{ route('admin.admins.update', $admin) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $admin->name) }}" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        <div class="form-text">Biarkan kosong untuk mempertahankan password saat ini.</div>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_super_admin" id="is_super_admin" value="1" {{ old('is_super_admin', $admin->is_super_admin) ? 'checked' : '' }}>
                            <label class="form-check-label fw-semibold" for="is_super_admin">
                                Super Admin
                            </label>
                            <div class="form-text">Super admin bisa mengelola akun admin lainnya.</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-brand px-4">
                        <i class="bi bi-check-lg me-1"></i>Update
                    </button>
                    <a href="{{ route('admin.admins.index') }}" class="btn btn-light px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
