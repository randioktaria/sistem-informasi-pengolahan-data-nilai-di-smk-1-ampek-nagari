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
                  <h4 class="card-title ">Edit Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('mata-pelajaran.update', $mapel->kode_mapel) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode_mapel" class="bmd-label-floating">Kode</label>
                                <input type="text" name="kode_mapel" id="kode_mapel" class="form-control" value="{{ $mapel->kode_mapel }}" disabled required>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="mapel" class="bmd-label-floating">Mata Pelajaran</label>
                                <input type="text" name="mapel" id="mapel" class="form-control" value="{{ $mapel->mapel }}" required>
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
