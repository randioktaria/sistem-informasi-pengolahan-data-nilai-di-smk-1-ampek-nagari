@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
  Tahun Ajaran
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Tahun Ajaran</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('ta.update', $ta->kode_ta) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ta" class="bmd-label-floating">Tahun Ajaran</label>
                                <input type="text" name="ta" id="ta" class="form-control" value="{{ $ta->ta }}" required>
                            </div>
                        </div>
                    </div>
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