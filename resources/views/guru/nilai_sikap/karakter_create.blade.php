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
                <h6 class="title">Penilaian Karakter</h6>
              </div>
              <div class="card-body">
                <form action="{{ url('nilai-sikap/pk/store') }}" method="post">
                    @csrf
                    <input type="text" name="nis" id="nis" value="{{ $nis }}" hidden>
                    <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $kode_mapel }}" hidden>
                    <input type="text" name="kode_ta" id="kode_ta" value="{{ $kode_ta }}" hidden>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="kemandirian">Kemandirian</label>
                          <input type="text" name="kemandirian" id="kemandirian" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="inisiatif">Inisiatif</label>
                          <input type="text" name="inisiatif" id="inisiatif" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="kerjasama">Kerjasama</label>
                          <input type="text" name="kerjasama" id="kerjasama" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="tang_jawab">Tanggung Jawab</label>
                          <input type="text" name="tang_jawab" id="tang_jawab" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="kejujuran">Kejujuran</label>
                          <input type="text" name="kejujuran" id="kejujuran" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="gemar_membaca">Gemar Membaca</label>
                          <input type="text" name="gemar_membaca" id="gemar_membaca" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="menghargai">Menghargai</label>
                          <input type="text" name="menghargai" id="menghargai" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="komunikatif">Komunikatif</label>
                          <input type="text" name="komunikatif" id="komunikatif" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="kepemimpinan">Kepemimpinan</label>
                          <input type="text" name="kepemimpinan" id="kepemimpinan" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="ket">Keterangan</label>
                            <textarea name="ket" id="ket" cols="30" rows="10" class="form-control" required></textarea>
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