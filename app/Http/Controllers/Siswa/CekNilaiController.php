<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PenilaianKarakter as Pk;
use App\NilaiKeterampilan as Nk;
use App\NilaiPengetahuan as Np;
use App\NilaiUjian as Nu;
use App\JurnalSikap as Js;
use App\Mapelkelas as Mk;
use App\Mapel;
use App\Siswa;
use App\Ta;
use App\Kd;
use Auth;


class CekNilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('siswa');
    }

    public function index()
    {
        $id = Auth::user()->username;

        $siswa = Siswa::find($id);
        $mk = Mk::where('kode_kelas', $siswa->kode_kelas)
                    ->get();
        $ta    = Ta::orderBy('created_at', 'desc')->first();

        return view('siswa.cek_nilai.index', compact('mk', 'siswa', 'ta'));
    }

    public function show($kode_mapel)
    {
        $nis = Auth::user()->username;

        $mapel = Mapel::find($kode_mapel);

         // Nilai Pengetahuan
        $np = Np::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get();

        $cek_id = Np::select('nis')
                    ->where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
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
                                                ->where('kode_mapel', $kode_mapel)
                                                ->avg('pengamatan'));
             
        $uh = Np::select('uh')
                    ->where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
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
                                            ->where('kode_mapel', $kode_mapel)
                                            ->avg('uh_remedial'));
                        
        $nu_p = Nu::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->where('ket', 'P')
                    ->first();
            
        $nuts_p = isset($nu_p->uts) ? $nu_p->uts : 0;
        $nuas_p = isset($nu_p->uas) ? $nu_p->uas : 0;
            
        $rapor_p = number_format(((2 * $rata_uh) + $rata_tugas + $rata_kuis + $rata_pengamatan + $nuts_p + $nuas_p) / 7);
        // Akhir

        // Nilai Keterampilan
        $nk = Nk::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get(); 

        $cek_id = Nk::select('nis')
                    ->where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
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
                                ->where('kode_mapel', $kode_mapel)
                                ->avg('produk'));
        
        $rata_proyek = number_format(Nk::where('nis', $nis)
                                ->where('kode_mapel', $kode_mapel)
                                ->avg('proyek'));

        $cek_id_ujian = Nu::where('nis', $nis)
                                ->where('kode_mapel', $kode_mapel)
                                ->where('ket', 'K')
                                ->count();

        $nu_k = Nu::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->where('ket', 'K')
                    ->first();

        $nuts_k = isset($nu_k->uts) ? $nu_k->uts : 0;
        $nuas_k = isset($nu_k->uas) ? $nu_k->uas : 0;
            
        $rapor_k = number_format(($rata_praktik + (2 * $rata_produk) + (2 * $rata_proyek) + $nuts_k + $nuas_k) / 7);
        // Akhir

        // Jurnal Sikap, Penilaian Karakter 
        $js = JS::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get();

        $pk = Pk::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get();
        // Akhir

        $kd = Kd::where('kode_mapel', $kode_mapel)->get();

        return view('siswa.cek_nilai.detail', compact('mapel', 
                                                'np', 
                                                'rata_tugas', 
                                                'rata_kuis', 
                                                'rata_pengamatan', 
                                                'rata_uh', 
                                                'rata_remedial', 
                                                'nuts_p', 
                                                'nuas_p', 
                                                'rapor_p',
                                                'nk',
                                                'nuts_k',
                                                'nuas_k',
                                                'rata_praktik',
                                                'rata_produk',
                                                'rata_proyek',
                                                'rapor_k',
                                                'js',
                                                'pk',
                                                'kd'
                                            ));
    }
}
