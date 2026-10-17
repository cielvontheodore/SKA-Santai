<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In &mdash; {{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --ska-blue: #2563eb;
            --ska-blue-dark: #1e3a8a;
            --ska-blue-darker: #1e40af;
            --ska-blue-50: #eff4ff;
            --ska-blue-100: #dbe6ff;
        }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--ska-blue-dark), var(--ska-blue));
        }
        .login-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 30px 60px -20px rgba(15, 23, 42, .5);
        }
        .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            border-radius: 1rem;
            background: var(--ska-blue-50);
            color: var(--ska-blue);
        }
        .form-label { font-weight: 600; font-size: .875rem; }
        .form-control {
            border-color: var(--ska-blue-100);
            border-radius: .65rem;
            padding: .65rem .9rem;
        }
        .form-control:focus {
            border-color: var(--ska-blue);
            box-shadow: 0 0 0 .25rem rgba(37, 99, 235, .15);
        }
        .btn-brand {
            background: var(--ska-blue);
            border-color: var(--ska-blue);
            color: #fff;
            font-weight: 600;
        }
        .btn-brand:hover, .btn-brand:focus {
            background: var(--ska-blue-darker);
            border-color: var(--ska-blue-darker);
            color: #fff;
        }
        .alert-brand {
            background: var(--ska-blue-50);
            border: 1px solid var(--ska-blue-100);
            color: var(--ska-blue-darker);
            border-radius: .85rem;
        }
    </style>
</head>
<body>
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

                            <div class="form-check mb-4">
                                <input type="checkbox" name="remember" id="remember" value="1" class="form-check-input">
                                <label for="remember" class="form-check-label small">Remember Me</label>
                            </div>

                            <button type="submit" class="btn btn-brand w-100 py-2">
                                <i class="bi bi-box-arrow-in-right me-1"></i>Log In
                            </button>
                        </form>
                    </div>
                </div>

                <p class="text-center text-white-50 small mt-4 mb-0">
                    &copy; {{ date('Y') }} {{ config('app.name') }}
                </p>
            </div>
        </div>
    </div>
</body>
</html>
