@extends('layouts.admin')

@section('title', 'Edit Contact')

@section('content')
    <h1>Edit Contact</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.contact.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
        </p>

        <p>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
        </p>

        <p>
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}" required>
        </p>

        <p>
            <label for="subject">Subject</label><br>
            <input type="text" name="subject" id="subject" value="{{ old('subject', $contact->subject) }}" required>
        </p>

        <p>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" rows="5" required>{{ old('message', $contact->message) }}</textarea>
        </p>

        <p>
            <button type="submit">Update</button>
            <a href="{{ route('admin.contact.index') }}">Cancel</a>
        </p>
    </form>
@endsection
