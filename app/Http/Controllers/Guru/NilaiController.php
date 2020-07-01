<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\Mapel;
use App\Kelas;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('guru');
    }

    public function index($kode_kelas, $kode_mapel)
    {
        $kelas = Kelas::find($kode_kelas);
        $siswa = Siswa::where('kode_kelas', $kode_kelas)->get();
        $mapel = Mapel::find($kode_mapel);

        return view('guru.nilai.index', compact('siswa', 'mapel', 'kelas'));
    }
}
