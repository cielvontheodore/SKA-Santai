@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Profile</h1>
            <p class="text-muted mb-0">Kelola teks halaman profil perusahaan.</p>
        </div>
        <a href="{{ route('profile') }}" target="_blank" class="btn btn-outline-primary">
            <i class="bi bi-box-arrow-up-right me-1"></i>Lihat Halaman
        </a>
    </div>

    <div class="card card-modern">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-modern align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Hero</th>
                            <th>Subjudul Hero</th>
                            <th>Terakhir Diperbarui</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted">1</td>
                            <td class="fw-semibold">{{ $profile->hero_title }}</td>
                            <td class="text-muted">{{ $profile->hero_subtitle }}</td>
                            <td class="text-muted">{{ $profile->updated_at?->diffForHumans() ?? '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.profile.edit') }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
