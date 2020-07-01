<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('siswa');
    }

    public function index()
    {
        $username = Auth::user()->username;
        $profil = \App\Siswa::findOrFail($username);
        
        return view('siswa.profil.index', compact('profil'));
    }

    public function createFoto(Request $request)
    {
        $user = Auth::user()->username;

        $this->validate($request, [
            'foto' => 'required'
        ]);

        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = $user.'.'.$extension;
        
        $file->move('img/faces/siswa', $fileName);

        \App\Siswa::find($user)
                ->update([
                    'foto' => $fileName,
                ]);

        return redirect()->to('profil-siswa');
    }
}
