@extends('layouts.app')

@section('judul')
  Guru Pengajar
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Guru</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('guru.update', $guru->kode_guru) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_guru" class="bmd-label-floating">Kode</label>
                                <input type="text" name="kode_guru" id="kode_guru" class="form-control" value="{{ $guru->kode_guru }}"  disabled>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="nama" class="bmd-label-floating">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $guru->nama }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $guru->tempat_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tgl_lahir" class="bmd-label-floating">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ substr($guru->tgl_lahir, 0, 2) }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="bln_lahir" class="bmd-label-floating">Bulan Lahir</label>
                                <input type="number" name="bln_lahir" id="bln_lahir" class="form-control" value="{{ substr($guru->tgl_lahir, 3, 2) }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="th_lahir" class="bmd-label-floating">Tahun Lahir</label>
                                <input type="number" name="th_lahir" id="th_lahir" class="form-control" value="{{ substr($guru->tgl_lahir, 6, 4) }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat" class="bmd-label-floating">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required>{{ $guru->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="bmd-label-floating">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $guru->email }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ho_hp" class="bmd-label-floating">No Hp</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{ $guru->no_hp }}" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-round btn-fill btn-info pull-right">Update</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection