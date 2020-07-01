@extends('layouts.app')

@section('judul')
    {{ __('Input Nilai') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">{{ __('Kelas : '). $kelas->kelas }} - {{ __('Mata Pelajaran : '). $mapel->mapel }}</h6>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Input Nilai</th>
                        </thead>
                        <tbody>
                            @foreach($siswa as $key => $siswa)
                                <tr>
                                    <td width="10%">{{ $key+1 }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td width="40%">
                                      <a href="{{ url('/nilai-pengetahuan/'.$siswa->nis.'/'.$kelas->kode_kelas.'/'.$mapel->kode_mapel) }}" class="btn btn-primary">{{ __('Pengetahuan') }}</a>
                                      <a href="{{ url('/nilai-keterampilan/'.$siswa->nis.'/'.$kelas->kode_kelas.'/'.$mapel->kode_mapel) }}" class="btn btn-primary">{{ __('Keterampilan') }}</a>
                                      <a href="{{ url('/nilai-sikap/'.$siswa->nis.'/'.$kelas->kode_kelas.'/'.$mapel->kode_mapel) }}" class="btn btn-primary">{{ __('Sikap') }}</a>
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