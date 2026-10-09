<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor-form');
    }

    public function simpan(Request $request)
    {
        Laporan::create([
            'nama_pelapor'     => $request->nama_pelapor,
            'lokasi'           => $request->lokasi,
            'tinggi_genangan'  => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi');
    }

    public function daftar()
    {
        $data = Laporan::all();
        return view('daftar-laporan', ['laporan' => $data]);
    }
}