@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <p>
        <a href="{{ route('admin.contact.create') }}">Add New</a>
    </p>

    @if ($contacts->isEmpty())
        <p>No contacts yet.</p>
    @else
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <a href="{{ route('admin.contact.edit', $contact) }}">Edit</a>

                            <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
