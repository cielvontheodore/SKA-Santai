@extends('layouts.admin')

@section('title', 'Add Contact')

@section('content')
    <h1>Add Contact</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf

        <p>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </p>

        <p>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </p>

        <p>
            <label for="subject">Subject</label><br>
            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required>
        </p>

        <p>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea>
        </p>

        <p>
            <button type="submit">Save</button>
            <a href="{{ route('admin.contact.index') }}">Cancel</a>
        </p>
    </form>
@endsection
