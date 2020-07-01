<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\Siswa;
use App\User;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::paginate(5);   
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kelas = Kelas::select('kode_kelas', 'kelas.kelas')->get();
        return view('admin.siswa.create', compact('kelas'));
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
            'nis' => 'required|max:10|unique:siswas',
            'nama' => 'required|max:30',
            'tempat_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'bln_lahir' => 'required',
            'th_lahir' => 'required', 
            'alamat' => 'required|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
            'kode_kelas' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir. '-' .$request->bln_lahir. '-' .$request->th_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'kode_kelas' => $request->kode_kelas,
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->nis,
            'password' => Hash::make($request->password),
            'level' => 'siswa',
        ]);

        return redirect()->Route('siswa.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.siswa.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);

        $kelas = Kelas::select('kode_kelas', 'kelas')
                        ->where('kode_kelas', '<>', $siswa->kode_kelas)
                        ->get();

        return view('admin.siswa.edit', compact('siswa', 'kelas'));
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
            'nama' => 'required|max:30',
            'tempat_lahir' => 'required|max:100',
            'tgl_lahir' => 'required',
            'bln_lahir' => 'required',
            'th_lahir' => 'required', 
            'alamat' => 'required|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
            'kode_kelas' => 'required',
        ]);

        Siswa::findOrFail($id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir. '-' .$request->bln_lahir. '-' .$request->th_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'kode_kelas' => $request->kode_kelas,
        ]);

        User::where('username', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect()->Route('siswa.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('username', $id)->delete();
        Siswa::findOrFail($id)->delete();
        return redirect()->route('siswa.index');
    }
}
