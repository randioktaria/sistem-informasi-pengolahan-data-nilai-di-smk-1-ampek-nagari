<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mapelkelas;
use App\Kelas;
use App\Guru;
use App\Mapel;

class MapelKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::get();
        return view('admin.mapelkelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::select('kode_kelas', 'kelas')->get();
        $guru = Guru::select('kode_guru', 'nama')->get();
        $mapel = Mapel::select('kode_mapel', 'mapel')->get();
        return view('admin.mapelkelas.create', compact('kelas', 'guru', 'mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'kode_mapel' => 'required',
            'kode_guru' => 'required',
        ]);

        Mapelkelas::create($request->all());
        return redirect()->Route('mata-pelajaran-kelas.index');
    }

    public function edit($id)
    {
        $mapelkelas = Mapelkelas::find($id);

        $kelas = Kelas::where('kode_kelas', '<>', $mapelkelas->kode_kelas)->get();
        $guru  = Guru::where('kode_guru', '<>', $mapelkelas->kode_guru)->get();
        $mapel = Mapel::where('kode_mapel', '<>', $mapelkelas->kode_mapel)->get();

        return view('admin.mapelkelas.edit', compact('mapelkelas', 'kelas', 'guru', 'mapel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'kode_mapel' => 'required',
            'kode_guru' => 'required',
        ]);

        Mapelkelas::find($id)
                    ->update($request->all());
                    
        return redirect()->Route('mata-pelajaran-kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapelkelas::find($id)->delete();
        return redirect()->Route('mata-pelajaran-kelas.index');
    }
}
