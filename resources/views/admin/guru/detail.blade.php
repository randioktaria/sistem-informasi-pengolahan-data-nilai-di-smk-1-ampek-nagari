@extends('layouts.app')

@section('judul')
  Guru Pengajar
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Detail Guru</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                            <td width="15%">Kode Guru (Username)</td>
                            <td width="2%">:</td>
                            <td>{{ $guru->kode_guru }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $guru->nama }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{ $guru->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $guru->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $guru->alamat }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td>{{ $guru->email }}</td>
                        </tr>
                        <tr>
                            <td>No Hp (WhatsApp)</td>
                            <td>:</td>
                            <td>{{ $guru->no_hp }}</td>
                        </tr>
                        <tr>
                            <td><a href="{{ Route('guru.edit', $guru->kode_guru) }}" class="btn btn-sm btn-round">edit</a></td>
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