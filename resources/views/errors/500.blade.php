@extends('layouts.public')

@section('title', '500 - Kesalahan Server')

@section('content')
    @include('errors.partials.error-page', [
        'code' => '500',
        'title' => 'Terjadi kesalahan pada server',
        'message' => 'Maaf, ada gangguan di sisi kami. Silakan coba beberapa saat lagi.',
    ])
@endsection
