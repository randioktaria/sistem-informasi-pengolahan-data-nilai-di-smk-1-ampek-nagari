@extends('layouts.app')

@section('judul')
  {{ __('Profil Siswa') }}
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Profil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Nis</label>
                        <input type="text" class="form-control" value="{{ $profil->nis }}" disabled>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control"  value="{{ $profil->nama }}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control"  value="{{ $profil->kelas->kelas}}" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control"  value="{{ $profil->kelas->jurusan}}" disabled >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control"  value="{{ $profil->tempat_lahir}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control"  value="{{ $profil->tgl_lahir}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea cols="30" rows="10" class="form-control">{{ $profil->alamat }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" value="{{ $profil->email}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" class="form-control"  value="{{ $profil->no_hp }}">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="{{ asset('img/bg5.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ asset(isset($profil->foto) ? 'img/faces/siswa/'.$profil->foto : 'img/default-avatar.png') }}" alt="...">
                    <h5 class="title">{{ $profil->nama }}</h5>
                  </a>
                </div>
                <hr>
                <p class="description text-center">
                  kelas : {{ $profil->kelas->kelas }} 
                  <small><br>{{ $profil->tempat_lahir. ' ' .$profil->tgl_lahir }}
                  <br>Hp. {{ $profil->no_hp }}</small>
                  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('profil-siswa/create/photo') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="foto"><b>INPUT FOTO PROFIL</b></label>
                              <input type="file" name="foto" id="foto" class="form-control" required>
                          </div>
                          <button type="file" class="btn btn-primary btn-round">
                              Simpan
                          </button>
                        </form>
                    <div>
                 </div>
            </div>
        </div>
    </div>

@endsection