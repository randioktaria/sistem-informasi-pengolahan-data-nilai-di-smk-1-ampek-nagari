@extends('layouts.app')

@section('judul')
    {{ __('Cek Nilai') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">@isset($siswa) {{ $siswa->kelas->kelas }} @endisset - Tahun Ajaran : @isset($ta) {{ $ta->ta }} @endisset</h6>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($mk as $key => $mk)
                                <tr>
                                    <td width="10%">{{ $key+1 }}</td>
                                    <td>{{ $mk->mapel->mapel }}</td>
                                    <td width="40%">
                                      <a href="{{ url('nilai-cek/'.$mk->kode_mapel) }}" class="btn btn-primary">{{ __('Cek Nilai') }}</a>
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