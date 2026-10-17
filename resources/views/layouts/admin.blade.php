<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') &mdash; {{ config('app.name') }}</title>
</head>
<body>
    <header>
        <strong>{{ config('app.name') }} Admin</strong>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.gallery.index') }}">Gallery</a>
            <a href="{{ route('admin.news.index') }}">News</a>
            <a href="{{ route('admin.product.index') }}">Product</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        </nav>
        <hr>
    </header>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
</body>
</html>
