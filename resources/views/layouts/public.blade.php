<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name')) &mdash; {{ config('app.name') }}</title>

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
            --ska-ink: #0f172a;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            color: var(--ska-ink);
        }

        /* Navbar */
        .pub-navbar {
            background: #fff;
            border-bottom: 1px solid #e8eefb;
        }
        .pub-navbar .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: .75rem;
            background: var(--ska-blue-50);
            color: var(--ska-blue);
        }
        .pub-navbar .brand-name {
            font-weight: 800;
            font-size: 1rem;
            line-height: 1.1;
            letter-spacing: -.01em;
        }
        .pub-navbar .brand-sub {
            font-size: .68rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #64748b;
        }
        .pub-navbar .nav-link {
            color: #334155;
            font-weight: 500;
            border-radius: .6rem;
            padding: .45rem .85rem;
        }
        .pub-navbar .nav-link:hover {
            color: var(--ska-blue);
            background: var(--ska-blue-50);
        }
        .pub-navbar .nav-link.active {
            color: var(--ska-blue-darker);
            background: var(--ska-blue-50);
            font-weight: 600;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--ska-blue-dark), var(--ska-blue));
            color: #fff;
            border-radius: 1.5rem;
        }
        .badge-soft {
            background: rgba(255, 255, 255, .15);
            color: #fff;
            font-weight: 600;
        }

        /* Page banner (inner pages) */
        .page-banner {
            background: linear-gradient(135deg, var(--ska-blue-dark), var(--ska-blue));
            color: #fff;
            border-radius: 1.25rem;
        }

        /* Cards */
        .card-modern {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .06), 0 12px 32px -18px rgba(37, 99, 235, .45);
        }
        .media-card {
            transition: transform .18s ease, box-shadow .18s ease;
            overflow: hidden;
        }
        .media-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 1px 2px rgba(15, 23, 42, .06), 0 22px 44px -20px rgba(37, 99, 235, .55);
        }
        .media-card img {
            transition: transform .4s ease;
        }
        .media-card:hover img {
            transform: scale(1.04);
        }
        .thumb-cover {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Buttons */
        .btn-brand {
            background: var(--ska-blue);
            border-color: var(--ska-blue);
            color: #fff;
            font-weight: 600;
        }
        .btn-brand:hover,
        .btn-brand:focus {
            background: var(--ska-blue-darker);
            border-color: var(--ska-blue-darker);
            color: #fff;
        }
        .btn-outline-primary {
            --bs-btn-color: var(--ska-blue);
            --bs-btn-border-color: var(--ska-blue-100);
            --bs-btn-hover-bg: var(--ska-blue);
            --bs-btn-hover-border-color: var(--ska-blue);
            font-weight: 600;
        }
        .btn-light-brand {
            background: #fff;
            color: var(--ska-blue-darker);
            font-weight: 600;
            border: 0;
        }

        /* Forms */
        .form-label {
            font-weight: 600;
            font-size: .875rem;
        }
        .form-control {
            border-color: var(--ska-blue-100);
            border-radius: .65rem;
            padding: .6rem .85rem;
        }
        .form-control:focus {
            border-color: var(--ska-blue);
            box-shadow: 0 0 0 .25rem rgba(37, 99, 235, .15);
        }

        /* Alerts */
        .alert-brand {
            background: var(--ska-blue-50);
            border: 1px solid var(--ska-blue-100);
            color: var(--ska-blue-darker);
            border-radius: .85rem;
        }

        /* Misc */
        .section-title {
            font-weight: 800;
            letter-spacing: -.02em;
        }
        .text-muted {
            color: #64748b !important;
        }
        footer a {
            color: var(--ska-blue);
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-white">

    <nav class="navbar navbar-expand-lg pub-navbar shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3" href="{{ route('home') }}">
                <span class="brand-mark"><i class="bi bi-hexagon-fill fs-5"></i></span>
                <span class="d-flex flex-column">
                    <span class="brand-name">{{ config('app.name') }}</span>
                    <span class="brand-sub">Software House</span>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pubNavbar" aria-controls="pubNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="pubNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}" href="{{ route('gallery.index') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('product.*') ? 'active' : '' }}" href="{{ route('product.index') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-brand btn-sm px-3" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="border-top mt-5 py-4">
        <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2 text-muted small">
            <span>&copy; {{ date('Y') }} {{ config('app.name') }}. Solusi software untuk bisnis Anda.</span>
            <a href="{{ route('login') }}">Admin Panel</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
