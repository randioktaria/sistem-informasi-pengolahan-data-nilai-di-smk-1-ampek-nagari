@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
  {{ __('Siswa') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Tambah Siswa') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('siswa.update', $siswa->nis) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nis" class="bmd-label-floating">Nis</label>
                                <input type="text" name="nis" id="nis" class="form-control" value="{{ $siswa->nis }}" disabled required>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="nama" class="bmd-label-floating">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $siswa->nama }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tgl_lahir" class="bmd-label-floating">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ substr($siswa->tgl_lahir, 0, 2) }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="bln_lahir" class="bmd-label-floating">Bulan Lahir</label>
                                <input type="number" name="bln_lahir" id="bln_lahir" class="form-control" value="{{ substr($siswa->tgl_lahir, 3, 2) }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="th_lahir" class="bmd-label-floating">Tahun Lahir</label>
                                <input type="number" name="th_lahir" id="th_lahir" class="form-control" value="{{ substr($siswa->tgl_lahir, 6, 4) }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat" class="bmd-label-floating">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required>{{ $siswa->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="bmd-label-floating">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $siswa->email }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ho_hp" class="bmd-label-floating">No Hp</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{ $siswa->no_hp }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kode_kelas" class="bmd-label-floating">Kelas</label>
                                <select name="kode_kelas" id="kode_kelas" class="form-control">
                                    <option value="{{ $siswa->kode_kelas }}">{{ $siswa->kode_kelas. ' - ' .$siswa->kelas->kelas }}</option>
                                    @foreach($kelas as $kelas)
                                        <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kode_kelas. ' - ' .$kelas->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-sm btn-round btn-fill btn-default pull-right ">Reset</button>
                    <button type="submit" class="btn btn-sm btn-round btn-fill btn-info pull-right">Simpan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('script')

<script src="{{ asset('js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>

@endsection