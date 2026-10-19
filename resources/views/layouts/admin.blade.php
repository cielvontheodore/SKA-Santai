<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') &mdash; {{ config('app.name') }}</title>

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
            --ska-sidebar-w: 264px;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: #f4f7ff;
            color: var(--ska-ink);
        }

        /* ===== Sidebar (desktop) ===== */
        .ska-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: var(--ska-sidebar-w);
            background: linear-gradient(180deg, var(--ska-blue-dark), var(--ska-blue));
            padding: 1.25rem 1rem;
            overflow-y: auto;
            z-index: 1030;
        }
        .ska-sidebar .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: .75rem;
            background: rgba(255, 255, 255, .15);
            color: #fff;
            flex: 0 0 auto;
        }
        .ska-sidebar .brand-name {
            font-weight: 800;
            font-size: 1rem;
            line-height: 1.1;
            letter-spacing: -.01em;
        }
        .ska-sidebar .brand-sub {
            font-size: .68rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .7);
        }
        .ska-sidebar .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: .25rem;
        }
        .ska-sidebar .sidebar-link {
            display: flex;
            align-items: center;
            gap: .75rem;
            padding: .6rem .85rem;
            border-radius: .65rem;
            color: rgba(255, 255, 255, .85);
            font-weight: 500;
            font-size: .925rem;
            text-decoration: none;
            transition: background .15s ease, color .15s ease;
        }
        .ska-sidebar .sidebar-link i {
            font-size: 1.05rem;
        }
        .ska-sidebar .sidebar-link:hover {
            background: rgba(255, 255, 255, .12);
            color: #fff;
        }
        .ska-sidebar .sidebar-link.active {
            background: #fff;
            color: var(--ska-blue-darker);
            font-weight: 600;
        }

        /* ===== Top navbar (mobile) ===== */
        .ska-navbar {
            background: linear-gradient(90deg, var(--ska-blue-dark), var(--ska-blue));
        }
        .ska-navbar .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: .75rem;
            background: rgba(255, 255, 255, .15);
            color: #fff;
        }
        .ska-navbar .brand-name {
            font-weight: 800;
            font-size: 1rem;
            line-height: 1.1;
        }
        .ska-navbar .brand-sub {
            font-size: .68rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .7);
        }
        .ska-navbar .nav-link {
            color: rgba(255, 255, 255, .85);
            border-radius: .6rem;
            padding: .45rem .85rem;
            font-weight: 500;
            font-size: .925rem;
        }
        .ska-navbar .nav-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, .12);
        }
        .ska-navbar .nav-link.active {
            color: var(--ska-blue);
            background: #fff;
            font-weight: 600;
        }
        .navbar-toggler {
            border-color: rgba(255, 255, 255, .4);
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* ===== Main ===== */
        .ska-main {
            min-height: 100vh;
        }
        @media (min-width: 992px) {
            .ska-main {
                margin-left: var(--ska-sidebar-w);
            }
        }

        /* Cards */
        .card-modern {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .06), 0 12px 32px -18px rgba(37, 99, 235, .45);
        }
        .stat-card {
            transition: transform .18s ease, box-shadow .18s ease;
        }
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 1px 2px rgba(15, 23, 42, .06), 0 20px 40px -18px rgba(37, 99, 235, .55);
        }
        .stat-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            border-radius: .75rem;
        }

        /* Page header */
        .page-title {
            font-weight: 800;
            letter-spacing: -.02em;
        }
        .text-muted {
            color: #64748b !important;
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
        }

        /* Tables */
        .table-modern thead th {
            background: var(--ska-blue-50);
            color: var(--ska-blue-darker);
            font-weight: 700;
            font-size: .72rem;
            text-transform: uppercase;
            letter-spacing: .04em;
            border-bottom: 1px solid var(--ska-blue-100);
            white-space: nowrap;
        }
        .table-modern tbody td {
            border-color: #eef2fb;
        }
        .table-modern tbody tr:hover {
            background: #f8faff;
        }

        /* Forms */
        .form-label {
            font-weight: 600;
            font-size: .875rem;
        }
        .form-control,
        .form-select {
            border-color: var(--ska-blue-100);
            border-radius: .65rem;
            padding: .6rem .85rem;
        }
        .form-control:focus,
        .form-select:focus {
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
    </style>
</head>
<body>

    {{-- Sidebar: desktop only --}}
    <aside class="ska-sidebar d-none d-lg-flex flex-column">
        <a class="d-flex align-items-center gap-3 text-white text-decoration-none mb-4" href="{{ route('admin.dashboard') }}">
            <span class="brand-mark"><i class="bi bi-hexagon-fill fs-5"></i></span>
            <span class="d-flex flex-column">
                <span class="brand-name">{{ config('app.name') }}</span>
                <span class="brand-sub">Admin Panel</span>
            </span>
        </a>

        <nav class="sidebar-nav">
            <a class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i>Dashboard
            </a>

            <a class="sidebar-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}" href="{{ route('admin.profile.index') }}">
                <i class="bi bi-building"></i>Profile
            </a>

            <a class="sidebar-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}" href="{{ route('admin.gallery.index') }}">
                <i class="bi bi-images"></i>Gallery
            </a>
            <a class="sidebar-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                <i class="bi bi-newspaper"></i>News
            </a>
            <a class="sidebar-link {{ request()->routeIs('admin.product.*') ? 'active' : '' }}" href="{{ route('admin.product.index') }}">
                <i class="bi bi-bag"></i>Product
            </a>
            <a class="sidebar-link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}" href="{{ route('admin.contact.index') }}">
                <i class="bi bi-envelope"></i>Contact
            </a>
       
            @can('manage-admins')
                <a class="sidebar-link {{ request()->routeIs('admin.admins.*') ? 'active' : '' }}" href="{{ route('admin.admins.index') }}">
                    <i class="bi bi-person-badge"></i>Admin
                </a>
            @endcan
        </nav>

        <form action="{{ route('logout') }}" method="POST" class="mt-auto pt-3">
            @csrf
            <button type="submit" class="sidebar-link border-0 bg-transparent w-100 text-start">
                <i class="bi bi-box-arrow-right"></i>Log Out
            </button>
        </form>
    </aside>

    {{-- Navbar: mobile only --}}
    <nav class="navbar ska-navbar shadow-sm d-lg-none sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3 text-white" href="{{ route('admin.dashboard') }}">
                <span class="brand-mark"><i class="bi bi-hexagon-fill fs-5"></i></span>
                <span class="d-flex flex-column">
                    <span class="brand-name">{{ config('app.name') }}</span>
                    <span class="brand-sub">Admin Panel</span>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}" href="{{ route('admin.profile.index') }}">
                            <i class="bi bi-building me-1"></i>Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}" href="{{ route('admin.gallery.index') }}">
                            <i class="bi bi-images me-1"></i>Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                            <i class="bi bi-newspaper me-1"></i>News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.product.*') ? 'active' : '' }}" href="{{ route('admin.product.index') }}">
                            <i class="bi bi-bag me-1"></i>Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}" href="{{ route('admin.contact.index') }}">
                            <i class="bi bi-envelope me-1"></i>Contact
                        </a>
                    </li>
                   
                    @can('manage-admins')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.admins.*') ? 'active' : '' }}" href="{{ route('admin.admins.index') }}">
                                <i class="bi bi-person-badge me-1"></i>Admin
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item ms-lg-3">
                        <form action="{{ route('logout') }}" method="POST" class="w-100">
                            @csrf
                            <button type="submit" class="btn btn-light btn-sm w-100 fw-semibold text-primary">
                                <i class="bi bi-box-arrow-right me-1"></i>Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="ska-main">
        <div class="p-3 p-md-4 p-lg-5">
            @if (session('success'))
                <div class="alert alert-brand alert-dismissible fade show d-flex align-items-center gap-2 shadow-sm mb-4" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <div class="fw-semibold">{{ session('success') }}</div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2 shadow-sm mb-4" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <div class="fw-semibold">{{ session('error') }}</div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
