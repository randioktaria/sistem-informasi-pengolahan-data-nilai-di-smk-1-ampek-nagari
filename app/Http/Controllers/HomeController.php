<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 'siswa') {
            $siswa = \App\Siswa::where('nis', Auth::user()->username)
                                    ->first();

            $pengumuman = \App\Post::where('kode_kelas', $siswa->kode_kelas)
                                        ->get();

        } elseif (Auth::user()->level == 'guru') {
            $guru = \App\Guru::where('kode_guru', Auth::user()->username)
                                    ->first();
        }

        return view('home', compact('siswa', 
                                    'pengumuman', 
                                    'guru'
                                ));
    }
}
