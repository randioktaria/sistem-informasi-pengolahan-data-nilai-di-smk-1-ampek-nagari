<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mapelkelas as Mk;
use App\Post;
use Auth;

class PostController extends Controller
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
    public function index()
    {
        $kelas = Mk::select('kode_kelas')
                        ->distinct()
                        ->where('kode_guru', Auth::user()->username)
                        ->get();

        return view('guru.post.index', compact('kelas', 'post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Mk::select('kode_kelas')
                        ->distinct()
                        ->where('kode_guru', Auth::user()->username)
                        ->get();

        return view('guru.post.create', compact('kelas'));
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
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Post::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kode_guru' => Auth::user()->username,
            'kode_kelas' => $request->kode_kelas,
        ]);

        return redirect()->Route('post.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $kelas = Mk::select('kode_kelas')
                        ->distinct()
                        ->where('kode_guru', Auth::user()->username)
                        ->where('kode_kelas', '<>', $post->kode_kelas)
                        ->get();

        return view('guru.post.edit', compact('post', 'kelas'));
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
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Post::find($id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'kode_guru' => Auth::user()->username,
                'kode_kelas' => $request->kode_kelas,
            ]);

        return redirect()->Route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->Route('post.index');
    }
}
