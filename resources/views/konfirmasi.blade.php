@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Laporan Berhasil Dikirim!</h2>
        <p>Terima kasih telah melaporkan kejadian banjir.</p>
        <a href="{{ url('/lapor') }}" class="btn">Kembali ke Form</a>
    </div>
@endsection
