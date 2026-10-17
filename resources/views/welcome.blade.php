@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
    <div class="container py-4 py-lg-5">

        <section class="hero p-4 p-md-5 mb-5 shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
                        <i class="bi bi-stars me-1"></i>Software House
                    </span>
                    <h1 class="fw-bold display-6 mb-3">
                        Solusi software untuk bisnis Anda
                    </h1>
                    <p class="lead mb-4 text-white-50">
                        {{ config('app.name') }} membangun perangkat lunak yang andal, modern, dan sesuai kebutuhan bisnis Anda.
                    </p>
                    <a href="#kontak" class="btn btn-light-brand px-4 py-2">
                        <i class="bi bi-envelope me-1"></i>Hubungi Kami
                    </a>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <i class="bi bi-window-stack" style="font-size: 11rem; opacity: .25;"></i>
                </div>
            </div>
        </section>

        <section id="kontak" class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="h3 fw-bold mb-1">Hubungi Kami</h2>
                    <p class="text-muted mb-0">Kirimkan pertanyaan atau kebutuhan Anda, kami akan segera merespons.</p>
                </div>

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
        </section>
    </div>
@endsection
