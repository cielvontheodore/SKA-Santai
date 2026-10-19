@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Admin</h1>
            <p class="text-muted mb-0">Kelola akun admin dan super admin.</p>
        </div>
        <a href="{{ route('admin.admins.create') }}" class="btn btn-brand">
            <i class="bi bi-plus-lg me-1"></i>Tambah
        </a>
    </div>

    <div class="card card-modern">
        <div class="card-body p-0">
            @if ($admins->isEmpty())
                <div class="text-center text-muted py-5">
                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                    Belum ada data admin.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-modern align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                    <td class="fw-semibold">
                                        {{ $admin->name }}
                                        @if ($admin->id === auth()->id())
                                            <span class="badge text-bg-light ms-1">Anda</span>
                                        @endif
                                    </td>
                                    <td class="text-muted">{{ $admin->email }}</td>
                                    <td>
                                        @if ($admin->is_super_admin)
                                            <span class="badge text-bg-primary">Super Admin</span>
                                        @else
                                            <span class="badge text-bg-secondary">Admin</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-2">
                                            <a href="{{ route('admin.admins.edit', $admin) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            @if ($admin->id !== auth()->id())
                                                <form action="{{ route('admin.admins.destroy', $admin) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
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
