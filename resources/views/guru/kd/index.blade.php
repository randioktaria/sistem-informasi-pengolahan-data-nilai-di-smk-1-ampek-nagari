@extends('layouts.app')

@section('judul')

{{ __('Kompetensi Dasar') }}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ isset($kde->kode_kd) ? 'Edit' : 'Tambah' }} Kompetensi Dasar</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url(isset($kde->kode_kd) ? 'kompetensi-dasar/update/'.$kde->kode_kd : 'kompetensi-dasar/store') }}" method="post">
                        @csrf
                        {{ isset($kde->kode_kd) ? method_field('PUT') : '' }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kode_mapel">Mata Pelajaran</label>
                                    <input type="text" name="kode_mapel" id="kode_mapel" class="form-control" value="{{ isset($kde->kode_mapel) ? $kde->kode_mapel : $mapel->kode_mapel }}" hidden>
                                    <input type="text" name="" id="" class="form-control" value="{{ isset($kde->kode_mapel) ? $kde->mapel->mapel : $mapel->mapel }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="no_kd">No Kompetensi Dasar</label>
                                    <input type="text" name="no_kd" id="no_kd" class="form-control" value="{{ isset($kde->no_kd) ? $kde->no_kd : ''}}" required>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="nama_kd">Nama Kompetensi Dasar</label>
                                    <input type="text" name="nama_kd" id="nama_kd" class="form-control" value="{{ isset($kde->nama_kd) ? $kde->nama_kd : ''}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Kompetensi Dasar</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($kd as $key => $kd)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td width="80%">{{ $kd->no_kd. ' ' .$kd->nama_kd }}</td>
                                    <td>
                                        <form action="{{ url('kompetensi-dasar/delete/'.$kd->kode_kd) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ url('kompetensi-dasar/'.$kd->kode_kd.'/edit') }}" class="btn btn-sm btn-primary"><i class="now-ui-icons ui-2_settings-90"></i> </a> 
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="now-ui-icons ui-1_simple-remove"></i> </button>
                                        </form>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection