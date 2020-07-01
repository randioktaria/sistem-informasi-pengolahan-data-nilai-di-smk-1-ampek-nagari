<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mapelkelas as Mk;
use Auth;

class KelasController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
	{
		$this->middleware('guru');
	}
	
    public function index()
    {
        $kelas = Mk::select('kode_kelas', 'kode_guru')
                        ->distinct()
                        ->where('kode_guru', Auth::user()->username)
                        ->get();

        return view('guru.kelas.index', compact('kelas'));
        
    }
}
