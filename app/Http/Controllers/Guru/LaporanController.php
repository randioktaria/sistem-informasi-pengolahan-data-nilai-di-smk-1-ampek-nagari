<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\Siswa;
use App\Ta;
use Auth;
use PDF;

class LaporanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guru');
    }

    public function nilaiSiswaPerKelas()
    {
        $kode_guru = Auth::user()->username;
        $ta = Ta::orderBy('created_at', 'desc')->first();

        $walas = Kelas::where('kode_guru', $kode_guru)
                                ->count();

        if ($walas > 0) {
            
            $kelas = Kelas::select('kode_kelas', 'kelas')
                                    ->where('kode_guru', $kode_guru)
                                    ->first();

            $siswa = Siswa::where('kode_kelas', $kelas->kode_kelas)
                                    ->get();
            
            $walas_cek = $walas;

        } else {

            $walas_cek = $walas;
        }

        return view('guru.laporan.laporan_nilai_siswa_per_kelas', compact('siswa', 'kelas', 'ta', 'walas_cek'));
    }

    public function nilaiSiswaPerKelasPdf()
    {
        $kode_guru = Auth::user()->username;
        $ta = Ta::orderBy('created_at', 'desc')->first();


        $kelas = Kelas::select('kode_kelas', 'kelas')
                            ->where('kode_guru', $kode_guru)
                            ->first();

        $siswa = Siswa::where('kode_kelas', $kelas->kode_kelas)
                        ->get();
         
        return view('guru.laporan.laporan_nilai_siswa_per_kelas_pdf', compact('siswa', 'kelas', 'ta'));
            
        // $pdf = PDF::loadView('guru.laporan.laporan_nilai_siswa_per_kelas_pdf', compact('siswa', 'kelas', 'ta'));
        // return $pdf->stream('laporan_nilai_per_kelas_'.date('Y-m-d_H-i-s').'.pdf');
    }
}
