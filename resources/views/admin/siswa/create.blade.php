@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
  Siswa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tambah Siswa</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('siswa.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nis" class="bmd-label-floating">Nis</label>
                                <input type="text" name="nis" id="nis" class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}">

                                @if ($errors->has('nis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="nama" class="bmd-label-floating">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}">

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}">

                                @if ($errors->has('tempat_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tgl_lahir" class="bmd-label-floating">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir" id="tgl_lahir" class="form-control{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}">

                                @if ($errors->has('tgl_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="bln_lahir" class="bmd-label-floating">Bulan Lahir</label>
                                <input type="number" name="bln_lahir" id="bln_lahir" class="form-control{{ $errors->has('bln_lahir') ? ' is-invalid' : '' }}">

                                @if ($errors->has('bln_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bln_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="th_lahir" class="bmd-label-floating">Tahun Lahir</label>
                                <input type="number" name="th_lahir" id="th_lahir" class="form-control{{ $errors->has('th_lahir') ? ' is-invalid' : '' }}">

                                @if ($errors->has('th_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('th_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat" class="bmd-label-floating">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"></textarea>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="bmd-label-floating">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ho_hp" class="bmd-label-floating">No Hp</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}">

                                @if ($errors->has('no_hp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kode_kelas" class="bmd-label-floating">Kelas</label>
                                <select name="kode_kelas" id="kode_kelas" class="form-control">
                                    @foreach($kelas as $kelas)
                                        <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kode_kelas. ' - ' .$kelas->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="bmd-label-floating">Password</label>
                                <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation" class="bmd-label-floating">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
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