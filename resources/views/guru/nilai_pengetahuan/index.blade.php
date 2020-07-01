@extends('layouts.app')

@section('judul')

{{ __('Nilai Pengetahuan') }}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table cellpadding="5">
                        <tr>
                            <td width="10%"><strong>Nis</strong></td>
                            <td width="1%"><strong>:</strong></td>
                            <td width="25%">{{ $siswa->nis }}</td>
                            <td width="13%"><strong>Mata Pelajaran</strong></td>
                            <td width="1%"><strong>:</strong></td>
                            <td>{{ $mapel->mapel }}</td>
                        </tr>
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>:</strong></td>
                            <td>{{ $siswa->nama }}</td>
                            <td><strong>Kelas</strong></td>
                            <td><strong>:</strong></td>
                            <td>{{ $kelas->kelas }}</td>
                        </tr>
                        <tr>
                            <td><strong>Jurusan</strong></td>
                            <td><strong>:</strong></td>
                            <td>{{ $kelas->jurusan }}</td>
                            <td><strong>Tahun Ajaran</strong></td>
                            <td><strong>:</strong></td>
                            <td>{{ $ta->ta }}</td>
                        </tr>
                    </table>
                    <p>
                        <table class="table table-bordered">
                            <tr>
                                <th>KD</th>
                                <th>Tugas 1</th>
                                <th>Tugas 2</th>
                                <th>Tugas 3</th>
                                <th>Tugas 4</th>
                                <th>Rata-rata Tugas</th>
                                <th>Kuis 1</th>
                                <th>Kuis 2</th>
                                <th>Kuis 3</th>
                                <th>Rata-rata Kuis</th>
                                <th>Pengamatan</th>
                                <th>UH</th>
                                <th>Ket</th>
                                <th>Perbaikan UH/ Remedial</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Nilai Rapor Pengetahuan</th>
                            </tr>
                                @foreach($np as $key => $np)
                                <tr>
                                    <td>{{ $np->kd->no_kd }}</td>
                                    <td>{{ $np->tugas_1 }}</td>
                                    <td>{{ $np->tugas_2 }}</td>
                                    <td>{{ $np->tugas_3 }}</td>
                                    <td>{{ $np->tugas_4 }}</td>
                                    <td>
                                        {{ number_format(($np->tugas_1 + $np->tugas_2 + $np->tugas_3 + $np->tugas_4) / 4) }}
                                    
                                    </td>
                                    <td>{{ $np->kuis_1 }}</td>
                                    <td>{{ $np->kuis_2 }}</td>
                                    <td>{{ $np->kuis_3 }}</td>
                                    <td>{{ number_format(($np->kuis_1 + $np->kuis_2 + $np->kuis_3) / 3) }}</td>
                                    <td>{{ $np->pengamatan }}</td>
                                    <td>{{ $np->uh }}</td>
                                    <td>
                                        @if ($np->uh < 70)
                                            {{ isset($np->uh) ? 'Remedi' : '' }}
                                        @else 
                                            {{ isset($np->uh) ? 'Tidak Remedi' : '' }}
                                        @endif
                                    </td>
                                    <td>{{ $np->uh_remedial }}</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="5" align="center"><strong>Rata - Rata</strong></td>
                                    <td>{{ $rata_tugas }}</td>
                                    <td colspan="3" align="center"></td>
                                    <td>{{ $rata_kuis }}</td>
                                    <td>{{ $rata_pengamatan }}</td>
                                    <td>{{ $rata_uh }}</td>
                                    <td>&nbsp;</td>
                                    <td>{{ $rata_remedial }}</td>
                                    <td>{{ $nuts }}</td>
                                    <td>{{ $nuas }}</td>
                                    <td>{{ $rapor }}</td>
                                </tr>
                        </table>
                </div>
                <a href="{{ url('/nilai-pengetahuan/'.$siswa->nis.'/'.$mapel->kode_mapel.'/'.$ta->kode_ta.'/create') }}" class="btn btn-primary btn-round">Input Nilai</a>
            </div>
        </div>
    </div>
</div>
@endsection 