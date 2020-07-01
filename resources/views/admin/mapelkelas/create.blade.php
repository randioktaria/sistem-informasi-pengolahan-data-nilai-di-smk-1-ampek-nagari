@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
    Kelas / Mata Pelajaran / Guru Pengajar
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tambah Relasi Kelas / Mata Pelajaran / Guru</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('mata-pelajaran-kelas.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kode_kelas" class="bmd-label-floating">Kelas</label>
                                <select name="kode_kelas" id="kode_kelas" class="form-control">
                                    @foreach($kelas as $kelas)
                                        <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_mapel" class="bmd-label-floating">Mata Pelajaran</label>
                                <select name="kode_mapel" id="kode_mapel" class="form-control">
                                    @foreach($mapel as $mapel)
                                        <option value="{{ $mapel->kode_mapel }}">{{ $mapel->mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_guru" class="bmd-label-floating">Guru pengajar</label>
                                <select name="kode_guru" id="kode_guru" class="form-control">
                                    @foreach($guru as $guru)
                                        <option value="{{ $guru->kode_guru }}">{{ $guru->nama }}</option>
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