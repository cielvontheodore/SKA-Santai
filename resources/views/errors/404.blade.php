@extends('layouts.public')

@section('title', '404')

@section('content')
    @include('errors.partials.error-page', [
        'code' => '404',
        'title' => 'Halaman tidak ditemukan',
        'message' => 'Maaf, halaman yang Anda cari tidak ada atau sudah dipindahkan.',
    ])
@endsection
