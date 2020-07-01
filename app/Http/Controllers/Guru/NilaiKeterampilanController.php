<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NilaiKeterampilan as Nk;
use App\NilaiUjian as Nu;
use App\Siswa;
use App\Mapel;
use App\Kelas;
use App\Ta;
use App\Kd;

class NilaiKeterampilanController extends Controller
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

        $nu = Nu::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->where('ket', 'K')
                    ->first();

        $nuts = isset($nu->uts) ? $nu->uts : 0;
        $nuas = isset($nu->uas) ? $nu->uas : 0;
            
        
        $rapor = number_format(($rata_praktik + (2 * $rata_produk) + (2 * $rata_proyek) + $nuts + $nuas) / 7);

        
        return view('guru.nilai_keterampilan.index', compact('siswa', 'kelas', 'mapel', 'ta', 'nk', 'nuts', 'nuas', 'rata_praktik', 'rata_produk', 'rata_proyek', 'rapor'));

    }

    public function create($nis, $kode_mapel, $kode_ta)
    {
        $mapel = Mapel::where('kode_mapel', $kode_mapel)->first();
        $siswa = Siswa::where('nis', $nis)->first();
        $kd = Kd::where('kode_mapel', $kode_mapel)->get();

        return view('guru.nilai_keterampilan.create', compact('mapel', 'siswa', 'kd', 'kode_ta'));
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
                        ->where('ket', 'K')
                        ->count();
            
            if ($cek > 0) {

                $nu = Nu::where('kode_mapel', $request->kode_mapel)
                            ->where('nis', $request->nis)
                            ->where('ket', 'K')
                            ->first();
                
                Nu::findOrFail($nu->id)->update([
                        $request->tipe_nilai => $request->nilai,
                        $request->ket => 'K',
                ]);

            } else {

                Nu::create([
                    $request->tipe_nilai => $request->nilai,
                    'ket' => 'K',
                    'nis' => $request->nis,
                    'kode_mapel' => $request->kode_mapel,
                    'kode_ta' => $request->kode_ta,
                ]);
            }
        
        } else  {

            $cek = Nk::where('kode_mapel', $request->kode_mapel)
                        ->where('kode_kd', $request->kode_kd)
                        ->where('nis', $request->nis)
                        ->count();
            
            if ($cek > 0) {
            
                $np = Nk::where('kode_mapel', $request->kode_mapel)
                            ->where('kode_kd', $request->kode_kd)
                            ->where('nis', $request->nis)
                            ->first();

                Nk::findOrFail($np->id)->update([
                    $request->tipe_nilai => $request->nilai,
                ]);

            } else {

                Nk::create([
                    'nis' => $request->nis,
                    'kode_mapel' => $request->kode_mapel,
                    'kode_ta' => $request->kode_ta,
                    'kode_kd' => $request->kode_kd,
                    $request->tipe_nilai => $request->nilai,
                ]);
            }
        }

        $siswa = Siswa::where('nis', $request->nis)->first();

        return redirect()->to('nilai-keterampilan/'.$siswa->nis.'/'.$siswa->kode_kelas.'/'.$request->kode_mapel);
    }
}
