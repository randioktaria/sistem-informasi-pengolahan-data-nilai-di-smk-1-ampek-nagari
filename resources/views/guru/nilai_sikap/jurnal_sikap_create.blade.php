@extends('layouts.app')

@section('judul')

{{ __('input nilai Sikap') }}

@endsection

@section('content')
    
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h6 class="title">Jurnal Sikap</h6>
              </div>
              <div class="card-body">
                <form action="{{ url('nilai-sikap/js/store') }}" method="post">
                  @csrf
                    <input type="text" name="nis" id="nis" value="{{ $nis }}" hidden>
                    <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $kode_mapel }}" hidden>
                    <input type="text" name="kode_ta" id="kode_ta" value="{{ $kode_ta }}" hidden>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="catatan_perilaku">Catatan Perilaku</label>
                          <textarea name="catatan_perilaku" id="catatan_perilaku" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nilai_utama">Nilai Utama Penguatan Pendidikan Karaktar</label>
                          <textarea name="nilai_utama" id="nilai_utama" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                        </div>
                      </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection