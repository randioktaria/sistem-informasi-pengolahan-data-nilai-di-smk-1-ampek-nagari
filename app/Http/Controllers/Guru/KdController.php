<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mapel;
use App\Kd;
use Auth;

class KdController extends Controller
{

    public function __construct() 
    {
        $this->middleware('guru');    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_mapel)
    {
        $mapel = mapel::where('kode_mapel', $kode_mapel)
                            ->first();

        $kd = Kd::where('kode_mapel', $kode_mapel)
                    ->where('kode_guru', Auth::user()->username)
                    ->get();

        return view('guru.kd.index', compact('mapel', 'kd'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kd' => 'required|max:3',
            'nama_kd' => 'required',
            'kode_mapel' => 'required|max:10',
        ]);

        Kd::create([
            'no_kd' => $request->no_kd,
            'nama_kd' => $request->nama_kd,
            'kode_guru' => Auth::User()->username,
            'kode_mapel' => $request->kode_mapel,
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $kde = Kd::findorFail($id);
        $kd = Kd::where('kode_mapel', $kde->kode_mapel)
                    ->where('kode_guru', Auth::user()->username)
                    ->get();

        return view('guru.kd.index', compact('kde', 'kd'));
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
            'no_kd' => 'required|max:3',
            'nama_kd' => 'required',
            'kode_mapel' => 'required|max:10',
        ]);

        Kd::findorFail($id)->update([
            'no_kd' => $request->no_kd,
            'nama_kd' => $request->nama_kd,
            'kode_guru' => Auth::User()->username,
            'kode_mapel' => $request->kode_mapel,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kd::find($id)->delete();
        return redirect()->back();
    }
}
