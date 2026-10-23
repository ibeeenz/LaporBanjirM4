@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Petugas BPBD</h2>
    <div class="card p-3" style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; max-width: 500px;">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Waktu Pembuatan Akun:</strong> {{ Auth::user()->created_at }}</p>
    </div>
</div>
@endsection