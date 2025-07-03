@extends('layouts.app') {{-- atau layout default milikmu --}}

@section('content')
<div class="container">
    <h1>Profil Saya</h1>
    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    {{-- Tambahkan field lain sesuai kebutuhan --}}
</div>
@endsection