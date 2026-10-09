@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Laporan Banjir</h2>
    <hr>

    @forelse($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <div class="alert alert-info">Belum ada data laporan banjir.</div>
    @endforelse
</div>
@endsection