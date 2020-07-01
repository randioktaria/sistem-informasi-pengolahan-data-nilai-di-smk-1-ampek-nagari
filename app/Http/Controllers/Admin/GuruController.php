<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Guru;
use App\User;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::paginate(5);
        return view('admin.guru.index', compact('guru'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create');
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
            'kode_guru' => 'required|max:30|unique:gurus',
            'nama' => 'required|max:30',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'bln_lahir' => 'required',
            'th_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
            'password' => 'required|string|min:6|confirmed',
        ]); 

        Guru::create([
            'kode_guru' => $request->kode_guru,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir. '-' .$request->bln_lahir. '-' .$request->th_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->kode_guru,
            'password' => Hash::make($request->password),
            'level' => 'guru',
        ]);

        return redirect()->Route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.detail', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
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
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'bln_lahir' => 'required',
            'th_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
        ]); 

        Guru::findOrFail($id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir. '-' .$request->bln_lahir. '-' .$request->th_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        User::where('username', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect()->Route('guru.show', $id);
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
        Guru::findOrFail($id)->delete();
        return redirect()->route('guru.index');
    }
}
