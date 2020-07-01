@extends('layouts.app')

@section('judul')
  Kelas
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tambah Kelas</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('kelas.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_kelas" class="bmd-label-floating">{{ __('Kode') }}</label>
                                <input type="text" name="kode_kelas" id="kode_kelas" class="form-control{{ $errors->has('kode_kelas') ? ' is-invalid' : '' }}">

                                @if ($errors->has('kode_kelas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kode_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="kelas" class="bmd-label-floating">{{ __('Kelas') }}</label>
                                <input type="text" name="kelas" id="kelas" class="form-control{{ $errors->has('kelas') ? ' is-invalid' : '' }}">

                                @if ($errors->has('kelas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="jurusan" class="bmd-label-floating">{{ __('Jurusan') }}</label>
                                <input type="text" name="jurusan" id="jurusan" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}">

                                @if ($errors->has('jurusan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_guru" class="bmd-label-floating">{{ __('Wali Kelas') }}</label>
                                <select name="kode_guru" id="kode_guru" class="form-control">
                                    @foreach($guru as $data)
                                        <option value="{{ $data->kode_guru }}">{{ $data->kode_guru. ' - ' .$data->nama }}</option>
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