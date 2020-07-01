@extends('layouts.app')

@section('judul')
  {{ __('Detail Kelas') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Detail kelas') }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                            <td width="15%">{{ __('Kode Kelas') }}</td>
                            <td width="2%">:</td>
                            <td>{{ $kelas->kode_kelas }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Kelas') }}</td>
                            <td>:</td>
                            <td>{{ $kelas->kelas }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Jurusan') }}</td>
                            <td>:</td>
                            <td>{{ $kelas->jurusan }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Wali kelas') }}</td>
                            <td>:</td>
                            <td>{{ $kelas->guru->nama }}</td>
                        </tr>
                        <tr>
                            <td><a href="{{ Route('kelas.edit', $kelas->kode_kelas) }}" class="btn btn-sm">edit</a></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection