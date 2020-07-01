<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('guru');
    }

    public function index()
    {
        $username = Auth::user()->username;
        $profil = \App\Guru::findOrFail($username);
        
        return view('guru.profil.index', compact('profil'));
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
        
        $file->move('img/faces/guru', $fileName);

        \App\Guru::find($user)
                ->update([
                    'foto' => $fileName,
                ]);

        return redirect()->to('profil-guru');
    }
}
