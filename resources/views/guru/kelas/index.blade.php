@extends('layouts.app')

@section('judul')  
    {{ __('Kelas Yang Diajar') }}
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        @foreach($kelas as $kelas)
        <div class="card">
            <div class="card-header">
                <h6 class="card-title"> {{ $kelas->kelas->kelas }}</h6>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th width="30%">Input</th>
                        </thead>
                        <tbody>
                            @php
                            $mapel = App\Mapelkelas::where('kode_kelas', $kelas->kode_kelas)
                                                        ->where('kode_guru', $kelas->kode_guru)
                                                        ->get()
                            @endphp
                            @foreach($mapel as $key => $mapel)
                                <tr>
                                    <td width="10%">{{ $key+1 }}</td>
                                    <td>{{ $mapel->mapel->mapel }}</td>
                                    <td>
                                      <a href="{{ url('kompetensi-dasar/'.$mapel->kode_mapel) }}" class="btn btn-primary">{{ __('Kompetensi Dasar') }}</a>
                                      <a href="{{ url('nilai/'.$kelas->kode_kelas.'/'.$mapel->kode_mapel) }}" class="btn btn-primary">{{ __('Nilai') }}</a>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection