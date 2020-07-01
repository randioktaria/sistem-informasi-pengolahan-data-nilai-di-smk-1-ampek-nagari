@extends('layouts.app')

@section('judul')

{{ __('input nilai') }}

@endsection

@section('content')
    
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">{{ $mapel->mapel }}</h5>
              </div>
              <div class="card-body">
                <form action="{{ url('nilai-keterampilan/store') }}" method="post">
                  @csrf
                    <input type="text" name="kode_ta" id="kode_ta" value="{{ $kode_ta }}" hidden>
                    <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $mapel->kode_mapel }}" hidden>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="nis">Nis</label>
                              <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" class="form-control" readonly>
                            </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Nama Siswa</label>
                            <input type="text" name="" id="" value="{{ $siswa->nama }}" class="form-control" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="kode_kd">Kompetensi Dasar</label>
                            @foreach($kd as $kd)
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kode_kd" id="exampleRadios1" value="{{ $kd->kode_kd }}">
                                    {{ $kd->no_kd. ' ' .$kd->nama_kd }}
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                          @endforeach
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <label for="tipe_nilai">Tipe Nilai</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="praktik_1" >
                                  Praktik 1
                                  <span class="form-check-sign"></span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="praktik_2" >
                                  Praktik 2
                                  <span class="form-check-sign"></span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="praktik_3" >
                                  Praktik 3
                                  <span class="form-check-sign"></span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="praktik_4" >
                                  Praktik 4
                                  <span class="form-check-sign"></span>
                              </label>
                          </div>
                          <div class="form-check form-check-radio">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="praktik_5" >
                                  Praktik 5
                                  <span class="form-check-sign"></span>
                              </label>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="produk" >
                                    Produk
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="proyek" >
                                    Proyek
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                          <div class="col-md-2">
                          <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="uts" >
                                    UTS
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="tipe_nilai" id="exampleRadios1" value="uas" >
                                    UAS
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <label for="nilai">Nilai</label>
                          <input type="number" name="nilai" id="nilai" class="form-control" required>
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