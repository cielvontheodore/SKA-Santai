<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In &mdash; {{ config('app.name') }}</title>
</head>
<body>
    <h1>{{ config('app.name') }}</h1>
    <h2>Log In</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <p>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
        </p>

        <p>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required>
        </p>

        <p>
            <button type="submit">Log In</button>
        </p>
    </form>
</body>
</html>
