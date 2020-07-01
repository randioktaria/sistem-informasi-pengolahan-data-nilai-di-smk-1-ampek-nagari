<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NilaiPengetahuan as Np;
use App\NilaiUjian as Nu;
use App\Siswa;
use App\Mapel;
use App\Kelas;
use App\Ta;
use App\Kd;

class NilaiPengetahuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('guru');
    }

    public function index($nis, $kode_kelas, $kode_mapel)
    {
        $siswa = Siswa::find($nis);
        $kelas = Kelas::find($kode_kelas);
        $mapel = Mapel::find($kode_mapel);
        $ta    = Ta::orderBy('created_at', 'desc')->first();

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

        
        $nu = Nu::where('nis', $nis)
                            ->where('kode_mapel', $kode_mapel)
                            ->where('ket', 'P')
                            ->first();

        $nuts = isset($nu->uts) ? $nu->uts : 0;
        $nuas = isset($nu->uas) ? $nu->uas : 0;

        $rapor = number_format(((2 * $rata_uh) + $rata_tugas + $rata_kuis + $rata_pengamatan + $nuts + $nuas) / 7);
                        


        return view('guru.nilai_pengetahuan.index', compact('siswa', 
                                                'kelas', 
                                                'mapel', 
                                                'ta', 
                                                'np', 
                                                'rata_tugas', 
                                                'rata_kuis', 
                                                'rata_pengamatan', 
                                                'rata_uh', 
                                                'rata_remedial',
                                                'nuts',
                                                'nuas',  
                                                'rapor'));
    }

    public function create($nis, $kode_mapel, $kode_ta)
    {
        $mapel = Mapel::where('kode_mapel', $kode_mapel)->first();
        $siswa = Siswa::where('nis', $nis)->first();
        $kd = Kd::where('kode_mapel', $kode_mapel)->get();

        return view('guru.nilai_pengetahuan.create', compact('mapel', 'siswa', 'kd', 'kode_ta'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tipe_nilai' => 'required',
            'kode_kd' => ($request->tipe_nilai == 'uts' || $request->tipe_nilai == 'uas') ? '' : 'required',
            'nilai' => 'required|max:3',
        ]);

        if ($request->tipe_nilai == 'uts' || $request->tipe_nilai == 'uas') {

            $cek = Nu::where('kode_mapel', $request->kode_mapel)
                        ->where('nis', $request->nis)
                        ->where('ket', 'P')
                        ->count();
            
            if ($cek > 0) {

                $nu = Nu::where('kode_mapel', $request->kode_mapel)
                            ->where('nis', $request->nis)
                            ->where('ket', 'P')
                            ->first();
                
                Nu::findOrFail($nu->id)->update([
                        $request->tipe_nilai => $request->nilai,
                        $request->ket => 'P',
                ]);

            } else {

                Nu::create([
                    $request->tipe_nilai => $request->nilai,
                    'ket' => 'P',
                    'nis' => $request->nis,
                    'kode_mapel' => $request->kode_mapel,
                    'kode_ta' => $request->kode_ta,
                ]);
            }
        
        } else  {

            $cek = Np::where('kode_mapel', $request->kode_mapel)
                        ->where('kode_kd', $request->kode_kd)
                        ->where('nis', $request->nis)
                        ->count();
            
            if ($cek > 0) {
            
                $np = Np::where('kode_mapel', $request->kode_mapel)
                            ->where('kode_kd', $request->kode_kd)
                            ->where('nis', $request->nis)
                            ->first();

                Np::findOrFail($np->id)->update([
                    $request->tipe_nilai => $request->nilai,
                ]);

            } else {

                Np::create([
                    'kode_kd' => $request->kode_kd,
                    'nis' => $request->nis,
                    'kode_mapel' => $request->kode_mapel,
                    'kode_ta' => $request->kode_ta,
                    $request->tipe_nilai => $request->nilai,
                ]);
            }
        }

        $siswa = Siswa::where('nis', $request->nis)->first();

        return redirect()->to('nilai-pengetahuan/'.$siswa->nis.'/'.$siswa->kode_kelas.'/'.$request->kode_mapel);
    }
}
