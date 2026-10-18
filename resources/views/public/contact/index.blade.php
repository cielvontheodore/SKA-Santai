@extends('layouts.public')

@section('title', 'Contact')

@section('content')
    <div class="container py-4 py-lg-5" id="kontak">

        @include('public.partials.page-banner', [
            'icon' => 'envelope',
            'label' => 'Contact',
            'title' => 'Hubungi Kami',
            'subtitle' => 'Kirimkan pertanyaan atau kebutuhan Anda, kami akan segera merespons.',
        ])

        <div class="row g-4 g-lg-5">
            <div class="col-lg-4">
                <div class="card card-modern h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h2 class="h6 fw-bold mb-4">Informasi Kontak</h2>

                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-geo-alt text-primary fs-5"></i>
                            <div>
                                <div class="fw-semibold small">Alamat</div>
                                <div class="text-muted small">Jl. Contoh No. 123, Jakarta, Indonesia</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-envelope text-primary fs-5"></i>
                            <div>
                                <div class="fw-semibold small">Email</div>
                                <div class="text-muted small">halo@solusikoneksianda.co.id</div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <i class="bi bi-telephone text-primary fs-5"></i>
                            <div>
                                <div class="fw-semibold small">Telepon</div>
                                <div class="text-muted small">+62 812 3456 7890</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                @if (session('contact_success'))
                    <div class="alert alert-brand d-flex align-items-center gap-2 shadow-sm mb-4">
                        <i class="bi bi-check-circle-fill"></i>
                        <div class="fw-semibold">{{ session('contact_success') }}</div>
                    </div>
                @endif

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
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Surel</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" required>
                                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" required>
                                    @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea name="message" id="message" rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                    @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-brand w-100 py-2 mt-4">
                                <i class="bi bi-send me-1"></i>Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
