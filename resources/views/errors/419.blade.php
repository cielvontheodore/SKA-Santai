@extends('layouts.public')

@section('title', '500')

@section('content')
    @include('errors.partials.error-page', [
        'code' => '419',
        'title' => 'Terjadi kesalahan pada server',
        'message' => 'Maaf, ada gangguan di sisi kami. Silakan coba beberapa saat lagi.',
    ])
@endsection
