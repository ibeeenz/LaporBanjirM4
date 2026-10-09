<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">Pelapor: {{ $item->nama_pelapor }}</h5>
        <p class="card-text mb-1"><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
        <p class="card-text mb-1"><strong>Tinggi Genangan:</strong> {{ $item->tinggi_genangan }} cm</p>
        <p class="card-text mb-2"><small class="text-muted">Tanggal: {{ $item->tanggal_kejadian }}</small></p>

        @if($item->tinggi_genangan < 30)
            <span class="badge bg-warning text-dark">Waspada</span>
        @elseif($item->tinggi_genangan >= 30 && $item->tinggi_genangan <= 70)
            <span class="badge" style="background-color: orange; color: white;">Siaga</span>
        @else
            <span class="badge bg-danger text-white">Awas</span>
        @endif
    </div>
</div>