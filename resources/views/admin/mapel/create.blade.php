@extends('layouts.app')

@section('judul')
  Mata Pelajaran
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tambah Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('mata-pelajaran.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_mapel" class="bmd-label-floating">Kode</label>
                                <input type="text" name="kode_mapel" id="kode_mapel" class="form-control{{ $errors->has('kode_mapel') ? ' is-invalid' : '' }}">

                                @if ($errors->has('kode_mapel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kode_mapel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="mapel" class="bmd-label-floating">Mata Pelajaran</label>
                                <input type="text" name="mapel" id="mapel" class="form-control{{ $errors->has('mapel') ? ' is-invalid' : '' }}">

                                @if ($errors->has('mapel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mapel') }}</strong>
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