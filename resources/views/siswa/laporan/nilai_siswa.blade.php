@extends('layouts.app')

@section('judul')
    {{ __('Laporan Nilai') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center" style="padding: 10px;">
                        <div style="font-size: 26px; color: red;">
                            SMKN 1 AMPEK NAGARI
                        </div>
                        <div style="text-align: center; font-size: 16px; color: blue;">
                            LAPORAN NILAI SISWA
                        </div>
                    </div>
                
                    <hr style="border: 1px solid #000; margin-top: -8px">
                    <div style="margin-bottom: 60px">

                    <p>

                    <table width="100%" cellpadding="5">
                        <tr>
                            <td width="10%"><b>Nis</b></td>
                            <td width="1%"><b>:</b></td>
                            <td width="25%">{{ $siswa->nis }}</td>
                            <td width="12%"><b>jurusan</b></td>
                            <td width="1%"><b>:</b></td>
                            <td>{{ $siswa->kelas->jurusan }}</td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><b>:</b></td>
                            <td>{{ $siswa->nama }}</td>
                            <td><b>Tahun Ajaran</b></td>
                            <td><b>:</b></td>
                            <td>{{ $ta->ta }}</td>
                        </tr>
                        <tr>
                            <td><b>Kelas</b></td>
                            <td><b>:</b></td>
                            <td>{{ $siswa->kelas->kelas }}</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                    <p>

                    <table width="100%" border="1" cellspacing="0" cellpadding="3">
                        <tr align="center">
                            <th rowspan="2" width="4%">No</th>
                            <th rowspan="2">Mata Pelajaran</th>
                            <th colspan="2">Nilai</th>
                        </tr>
                        <tr align="center">
                            <th>Pengetahuan</th>
                            <th>Keterampilan</th>
                        </tr>
                            @php $no = 1;  @endphp
                            @foreach($nilai as $mata_pelajaran => $nilai)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $mata_pelajaran }}</td>
                            <td class="text-center">
                                <b>
                                    @if ($nilai['p'] == 0)
                                        {{ '-' }}
                                    @else
                                        {{ $nilai['p'] }}
                                    @endif
                                </b>
                            </td>
                            <td class="text-center">
                                <b>
                                    @if ($nilai['p'] == 0)
                                        {{ '-' }}
                                    @else
                                        {{ $nilai['k'] }}
                                    @endif
                                </b>
                            </td>
                        </tr>
                            @endforeach
                    </table>
                    <a href="{{ url('laporan/cetak') }}" class="btn btn-round btn-primary mt-3">Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection