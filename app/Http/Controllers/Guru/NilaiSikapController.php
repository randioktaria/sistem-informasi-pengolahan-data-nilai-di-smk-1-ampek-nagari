<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PenilaianKarakter as Pk;
use App\JurnalSikap as Js;
use App\Siswa;
use App\Kelas;
use App\Mapel;
use App\Ta;

class NilaiSikapController extends Controller
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

        $js = JS::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get();

        $pk = Pk::where('nis', $nis)
                    ->where('kode_mapel', $kode_mapel)
                    ->get();

        return view('guru.nilai_sikap.index', compact('kelas', 'mapel', 'siswa', 'ta', 'js', 'pk'));
    }

    public function create_jurnal_sikap($nis, $kode_mapel, $kode_ta)
    {   
        return view('guru.nilai_Sikap.jurnal_sikap_create', compact('nis', 'kode_mapel', 'kode_ta'));
    }

    public function create_penilaian_karakter($nis, $kode_mapel, $kode_ta)
    {   
        return view('guru.nilai_Sikap.karakter_create', compact('nis', 'kode_mapel', 'kode_ta'));
    }

    public function store_jurnal_sikap(Request $request) 
    {
        $this->validate($request, [
            'catatan_perilaku' => 'required',
            'nilai_utama' => 'required',
        ]);

        Js::create([
            'catatan_perilaku' => $request->catatan_perilaku,
            'nilai_utama' => $request->nilai_utama,
            'nis' => $request->nis,
            'kode_mapel' => $request->kode_mapel,
            'kode_ta' => $request->kode_ta,
        ]);

        $siswa = Siswa::where('nis', $request->nis)->first();

        return redirect()->to('nilai-sikap/'.$siswa->nis.'/'.$siswa->kode_kelas.'/'.$request->kode_mapel);
        
    }

    public function store_penilaian_karakter(Request $request)
    {
        $this->validate($request, [
                'kemandirian' => 'required', 
                'inisiatif' => 'required',
                'kerjasama' => 'required',
                'tang_jawab' => 'required',
                'kejujuran' => 'required',
                'gemar_membaca' => 'required',
                'menghargai' => 'required',
                'komunikatif' => 'required',
                'kepemimpinan' => 'required',
                'ket' => 'required',
        ]);

        Pk::create($request->all());

        $siswa = Siswa::where('nis', $request->nis)->first();

        return redirect()->to('nilai-sikap/'.$siswa->nis.'/'.$siswa->kode_kelas.'/'.$request->kode_mapel);
    }

    public function delete_jurnal_sikap($id)
    {
        Js::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function delete_penilaian_karakter($id)
    {
        Pk::findOrFail($id)->delete();
        return redirect()->back();
    }
}
