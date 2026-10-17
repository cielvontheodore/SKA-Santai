<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <h1>{{ config('app.name') }}</h1>

    @if (session('contact_success'))
        <p>{{ session('contact_success') }}</p>
    @endif

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Hubungi Kami</h2>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <p>
            <label for="name">Nama</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <label for="email">Surel</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </p>

        <p>
            <label for="phone">Nomor Telepon</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </p>

        <p>
            <label for="subject">Subjek</label><br>
            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required>
        </p>

        <p>
            <label for="message">Pesan</label><br>
            <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea>
        </p>

        <p>
            <button type="submit">Kirim</button>
        </p>
    </form>
</body>
</html>
