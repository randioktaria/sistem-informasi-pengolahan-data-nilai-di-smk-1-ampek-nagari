<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NilaiKeterampilan as Nk;
use App\NilaiPengetahuan as Np;
use App\NilaiUjian as Nu;
use App\Mapelkelas as Mk;
use App\Siswa;
use App\Kelas;
use App\Ta;
use PDF;
use Auth;

class LaporanController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function nilaiSiswa()
    {

        $ta = Ta::orderBy('created_at', 'desc')->first();


            $nis = Auth::user()->username;
            $siswa = Siswa::find($nis);
            $mk = Mk::where('kode_kelas', $siswa->kode_kelas)
                        ->get();

            $nilai = [];
            foreach($mk as $mk) {
                
                // Nilai Pengetahuan
                $np = Np::where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->get();


                $cek_id = Np::select('nis')
                            ->where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->count();

                if ($cek_id > 0) {

                    $jumlah_t = 0;
                    foreach($np as $key => $nps) {
                        $rata_t = ($nps->tugas_1 + $nps->tugas_2 + $nps->tugas_3 + $nps->tugas_4) / 4;
                        $jumlah_t += $rata_t;
                    }
                                
                    $rata_tugas = $jumlah_t / count($np);
                    $rata_tugas = number_format($rata_tugas);
                                            
                    $jumlah_k = 0;
                    foreach($np as $key => $nps) {
                        $rata_k = ($nps->kuis_1 + $nps->kuis_2 + $nps->kuis_3) / 3;
                                $jumlah_k += $rata_k;
                    }
                                
                    $rata_kuis = $jumlah_k / count($np);
                    $rata_kuis = number_format($rata_kuis);
                                
                    } else {
                                
                        $rata_tugas = 0;
                        $rata_kuis = 0;
                    
                    }
                                
                    $rata_pengamatan = number_format(Np::where('nis', $nis)
                                                            ->where('kode_mapel', $mk->kode_mapel)
                                                            ->avg('pengamatan'));
                                
                    $uh = Np::select('uh')
                                ->where('nis', $nis)
                                ->where('kode_mapel', $mk->kode_mapel)
                                ->get();

                    if (count($uh) > 0) {
                                            
                        $jumlah_uh = 0;
                        $bagi = 0;
                        foreach ($uh as $key => $uh) {
                                        
                            if ($uh->uh < 70) {
                                                        
                                $uh->uh = 70;
                        }
                                        
                        $bagi = $key+1;
                        $jumlah_uh += $uh->uh;

                        }
                                        
                        $rata_uh = number_format($jumlah_uh / $bagi);
                    
                    } else {
                        
                        $rata_uh = 0;
                    }
                                            
                    $nu_p = Nu::where('nis', $nis)
                                ->where('kode_mapel', $mk->kode_mapel)
                                ->where('ket', 'P')
                                ->first();
                                
                    $nuts_p = isset($nu_p->uts) ? $nu_p->uts : 0;
                    $nuas_p = isset($nu_p->uas) ? $nu_p->uas : 0;
                                
                    $rapor_p = number_format(((2 * $rata_uh) + $rata_tugas + $rata_kuis + $rata_pengamatan + $nuts_p + $nuas_p) / 7);
                    // Akhir

                    // Nilai Keterampilan
                    $nk = Nk::where('nis', $nis)
                                ->where('kode_mapel', $mk->kode_mapel)
                                ->get(); 

                    $cek_id = Nk::select('nis')
                                ->where('nis', $nis)
                                ->where('kode_mapel', $mk->kode_mapel)
                                ->count();

                    if ($cek_id > 0) {

                        $jumlah = 0;
                        foreach($nk as $nps) {
                            $jumlah += max([$nps->praktik_1, $nps->praktik_2, $nps->praktik_3, $nps->praktik_4, $nps->praktik_5 ]);
                        }

                        $rata_praktik = number_format($jumlah / count($nk));

                    } else {
                        $rata_praktik = 0;
                    } 

                    $rata_produk = number_format(Nk::where('nis', $nis)
                                            ->where('kode_mapel', $mk->kode_mapel)
                                            ->avg('produk'));
                    
                    $rata_proyek = number_format(Nk::where('nis', $nis)
                                            ->where('kode_mapel', $mk->kode_mapel)
                                            ->avg('proyek'));

                    $cek_id_ujian = Nu::where('nis', $nis)
                                            ->where('kode_mapel', $mk->kode_mapel)
                                            ->where('ket', 'K')
                                            ->count();

                    $nu_k = Nu::where('nis', $nis)
                                ->where('kode_mapel', $mk->kode_mapel)
                                ->where('ket', 'K')
                                ->first();

                    $nuts_k = isset($nu_k->uts) ? $nu_k->uts : 0;
                    $nuas_k = isset($nu_k->uas) ? $nu_k->uas : 0;
                        
                    $rapor_k = number_format(($rata_praktik + (2 * $rata_produk) + (2 * $rata_proyek) + $nuts_k + $nuas_k) / 7);


                    $nilai[$mk->mapel->mapel]['p'] = $rapor_p;
                    $nilai[$mk->mapel->mapel]['k'] = $rapor_k;
                    
            }

            return view('siswa.laporan.nilai_siswa', compact('siswa', 'ta', 'nilai'));
        
    }

    public function nilaiSiswaPdf()
    {

        $nis = Auth::user()->username;

        $siswa = Siswa::find($nis);
        $mk = Mk::where('kode_kelas', $siswa->kode_kelas)
                    ->get();
                    
        $ta    = Ta::orderBy('created_at', 'desc')->first();

        $nilai = [];
        foreach($mk as $mk) {
            
            // Nilai Pengetahuan
            $np = Np::where('nis', $nis)
                        ->where('kode_mapel', $mk->kode_mapel)
                        ->get();


            $cek_id = Np::select('nis')
                        ->where('nis', $nis)
                        ->where('kode_mapel', $mk->kode_mapel)
                        ->count();

            if ($cek_id > 0) {

                $jumlah_t = 0;
                foreach($np as $key => $nps) {
                    $rata_t = ($nps->tugas_1 + $nps->tugas_2 + $nps->tugas_3 + $nps->tugas_4) / 4;
                    $jumlah_t += $rata_t;
                }
                            
                $rata_tugas = $jumlah_t / count($np);
                $rata_tugas = number_format($rata_tugas);
                                        
                $jumlah_k = 0;
                foreach($np as $key => $nps) {
                    $rata_k = ($nps->kuis_1 + $nps->kuis_2 + $nps->kuis_3) / 3;
                            $jumlah_k += $rata_k;
                }
                            
                $rata_kuis = $jumlah_k / count($np);
                $rata_kuis = number_format($rata_kuis);
                            
                } else {
                            
                    $rata_tugas = 0;
                    $rata_kuis = 0;
                
                }
                            
                $rata_pengamatan = number_format(Np::where('nis', $nis)
                                                        ->where('kode_mapel', $mk->kode_mapel)
                                                        ->avg('pengamatan'));
                             
                $uh = Np::select('uh')
                            ->where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->get();
                        
                if (count($uh) > 0) {
                                                                    
                    $jumlah_uh = 0;
                    $bagi = 0;
                    foreach ($uh as $key => $uh) {
                                                                
                        if ($uh->uh < 70) {
                                                                                
                            $uh->uh = 70;
                        }
                                                                
                        $bagi = $key+1;
                        $jumlah_uh += $uh->uh;
                        
                    }
                                                                
                    $rata_uh = number_format($jumlah_uh / $bagi);
                                            
                } else {
                                                
                    $rata_uh = 0;
                }
                                
                $rata_remedial = number_format(Np::where('nis', $nis)
                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                    ->avg('uh_remedial'));
                                        
                $nu_p = Nu::where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->where('ket', 'P')
                            ->first();
                            
                $nuts_p = isset($nu_p->uts) ? $nu_p->uts : 0;
                $nuas_p = isset($nu_p->uas) ? $nu_p->uas : 0;
                            
                $rapor_p = number_format(((2 * $rata_uh) + $rata_tugas + $rata_kuis + $rata_pengamatan + $nuts_p + $nuas_p) / 7);
                // Akhir

                // Nilai Keterampilan
                $nk = Nk::where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->get(); 

                $cek_id = Nk::select('nis')
                            ->where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->count();

                if ($cek_id > 0) {

                    $jumlah = 0;
                    foreach($nk as $nps) {
                        $jumlah += max([$nps->praktik_1, $nps->praktik_2, $nps->praktik_3, $nps->praktik_4, $nps->praktik_5 ]);
                    }

                    $rata_praktik = number_format($jumlah / count($nk));

                } else {
                    $rata_praktik = 0;
                } 

                $rata_produk = number_format(Nk::where('nis', $nis)
                                        ->where('kode_mapel', $mk->kode_mapel)
                                        ->avg('produk'));
                
                $rata_proyek = number_format(Nk::where('nis', $nis)
                                        ->where('kode_mapel', $mk->kode_mapel)
                                        ->avg('proyek'));

                $cek_id_ujian = Nu::where('nis', $nis)
                                        ->where('kode_mapel', $mk->kode_mapel)
                                        ->where('ket', 'K')
                                        ->count();

                $nu_k = Nu::where('nis', $nis)
                            ->where('kode_mapel', $mk->kode_mapel)
                            ->where('ket', 'K')
                            ->first();

                $nuts_k = isset($nu_k->uts) ? $nu_k->uts : 0;
                $nuas_k = isset($nu_k->uas) ? $nu_k->uas : 0;
                    
                $rapor_k = number_format(($rata_praktik + (2 * $rata_produk) + (2 * $rata_proyek) + $nuts_k + $nuas_k) / 7);


                $nilai[$mk->mapel->mapel]['p'] = $rapor_p;
                $nilai[$mk->mapel->mapel]['k'] = $rapor_k;
                
        }

        $pdf = PDF::loadView('siswa.laporan.nilai_siswa_pdf', compact('siswa', 'ta', 'nilai'));
        return $pdf->stream('laporan_nilai_'.date('Y-m-d_H-i-s').'.pdf');



        // return view('laporan.nilai_siswa_pdf', compact('siswa', 'ta', 'nilai'));
    }

}
