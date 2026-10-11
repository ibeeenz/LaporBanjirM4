@extends('layouts.app')

@section('content')
    <div class="container">
        <x-alert type="success">
            <strong>Laporan berhasil dikirim!</strong>
            Terima kasih telah melaporkan kejadian banjir.
        </x-alert>

        <a href="{{ url('/lapor') }}" class="btn">Kembali ke Form</a>
    </div>
@endsection