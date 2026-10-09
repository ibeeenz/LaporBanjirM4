@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulir Lapor Banjir</h2>
    
    <form action="{{ url('/lapor/proses') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" required>
        </div>
        
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>
        
        <div class="form-group">
            <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
            <input type="number" id="tinggi_genangan" name="tinggi_genangan" required>
        </div>
        
        <div class="form-group">
            <label for="tanggal_kejadian">Tanggal Kejadian</label>
            <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required>
        </div>
        
        <button type="submit">Kirim Laporan</button>
    </form>
</div>
@endsection