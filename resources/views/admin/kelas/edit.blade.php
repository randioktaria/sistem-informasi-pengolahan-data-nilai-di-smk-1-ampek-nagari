@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
  Kelas
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Edit Kelas') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('kelas.update', $kelas->kode_kelas) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_kelas" class="bmd-label-floating">{{ __('Kode') }}</label>
                                <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" value="{{ $kelas->kode_kelas }}" disabled required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="kelas" class="bmd-label-floating">{{ __('Kelas') }}</label>
                                <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $kelas->kelas }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="jurusan" class="bmd-label-floating">{{ __('Jurusan') }}</label>
                                <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $kelas->jurusan }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_guru" class="bmd-label-floating">{{ __('Wali Kelas') }}</label>
                                <select name="kode_guru" id="kode_guru" class="form-control">
                                    <option value="{{ $kelas->kode_guru }}">{{ $kelas->kode_guru. ' - ' .$kelas->guru->nama }}</option>
                                    @foreach($guru as $guru)
                                        <option value="{{ $guru->kode_guru }}">{{ $guru->kode_guru. ' - ' .$guru->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-sm btn-round btn-fill btn-default pull-right ">{{ __('Reset') }}</button>
                    <button type="submit" class="btn btn-sm btn-round btn-fill btn-info pull-right">{{ __('Simpan')}}</button>
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