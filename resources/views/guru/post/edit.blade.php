@extends('layouts.app')

@section('judul')

{{ __('Pengumuman') }}

@endsection

@section('content')
    
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h6 class="title">Edit Pengumuman</h6>
              </div>
              <div class="card-body">
                <form action="{{ Route('post.update', $post->id) }}" method="post">
                  @csrf
                  {{ method_field('put') }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="judul">Judul</label>
                          <input type="text" name="judul" id="judul" class="form-control" value="{{ $post->judul }}" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="isi">isi</label>
                          <textarea name="isi" id="isi" cols="30" rows="10" class="form-control">{{ $post->isi }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="kode_kelas">Kelas</label>
                          <select name="kode_kelas" id="kode_kelas" class="form-control">
                            <option value="{{ $post->kode_kelas }}">{{ $post->kelas->kelas }}</option>
                            @foreach($kelas as $kelas)
                            <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kelas->kelas }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection