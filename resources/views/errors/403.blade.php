@extends('layouts.public')

@section('title', '500')

@section('content')
    @include('errors.partials.error-page', [
        'code' => '403',
        'title' => 'Terjadi kesalahan pada role akun',
        'message' => 'Anda ditolak dari laman ini karna kekurangan akses',
    ])
@endsection
