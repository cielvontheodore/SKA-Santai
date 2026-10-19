@extends('layouts.public')

@section('title', 'Log In')

@section('content')
    <section class="section d-flex align-items-center" style="min-height: 62vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-8 col-md-6 col-lg-4">
                    <div class="card login-card">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <div class="brand-mark mb-3"><i class="bi bi-hexagon-fill fs-3"></i></div>
                                <h1 class="h5 fw-bold mb-1">{{ config('app.name') }}</h1>
                                <p class="text-muted small mb-0">Masuk ke panel admin</p>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-brand d-flex gap-2 align-items-start py-3 mb-4">
                                    <i class="bi bi-exclamation-circle-fill mt-1"></i>
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <div class="small fw-semibold">{{ $error }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="nama@email.com" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                                </div>

                                <button type="submit" class="btn btn-brand w-100 py-2">
                                    <i class="bi bi-box-arrow-in-right me-1"></i>Log In
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .login-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .06), 0 30px 60px -24px rgba(37, 99, 235, .45);
        }
        .login-card .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            border-radius: 1rem;
            background: var(--ska-blue-50);
            color: var(--ska-blue);
        }
    </style>
@endsection
