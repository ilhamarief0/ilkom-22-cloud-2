@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <h2>Konfirmasi Hapus Akun</h2>
    <p>Apakah Anda yakin ingin menghapus akun ini? Tindakan ini tidak bisa dibatalkan.</p>
    
    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus Akun</button>
        <a href="{{ route('profile.show') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection