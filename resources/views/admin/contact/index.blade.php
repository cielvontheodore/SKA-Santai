@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 page-title mb-1">Contact</h1>
            <p class="text-muted mb-0">Pesan masuk dari pengunjung.</p>
        </div>
        <a href="{{ route('admin.contact.create') }}" class="btn btn-brand">
            <i class="bi bi-plus-lg me-1"></i>Tambah
        </a>
    </div>

    <div class="card card-modern">
        <div class="card-body p-0">
            @if ($contacts->isEmpty())
                <div class="text-center text-muted py-5">
                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                    Belum ada data contact.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-modern align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                    <td class="fw-semibold">{{ $contact->name }}</td>
                                    <td class="text-muted">{{ $contact->email }}</td>
                                    <td class="text-muted">{{ $contact->phone }}</td>
                                    <td class="fw-semibold">{{ $contact->subject }}</td>
                                    <td class="text-muted text-truncate" style="max-width: 240px;">{{ $contact->message }}</td>
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-2">
                                            <a href="{{ route('admin.contact.edit', $contact) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this item?')">
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
