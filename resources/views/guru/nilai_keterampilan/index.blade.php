@extends('layouts.app')

@section('judul')

{{ __('Nilai Keterampilan') }}

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
                            <tr align="center">
                                <th rowspan="2">KD</th>
                                <th colspan="6">Kinerja</th>
                                <th colspan="4">Hasil</th>
                                <th rowspan="2">UTS</th>
                                <th rowspan="2">UAS</th>
                                <th rowspan="2">Nilai Rapror Keterampilan</th>
                            </tr>
                            <tr>
                                <th>Praktik 1</th>
                                <th>Praktik 2</th>
                                <th>Praktik 3</th>
                                <th>Praktik 4</th>
                                <th>Praktik 5</th>
                                <th>Nilai Optimal</th>
                                <th>Produk</th>
                                <th>Nilai Optimal</th>
                                <th>Proyek</th>
                                <th>Nilai Optimal</th>
                            </tr>
                            @foreach($nk as $key => $nk)
                                <tr>
                                    <td>{{ $nk->kd->no_kd }}</td>
                                    <td>{{ $nk->praktik_1 }}</td>
                                    <td>{{ $nk->praktik_2 }}</td>
                                    <td>{{ $nk->praktik_3 }}</td>
                                    <td>{{ $nk->praktik_4 }}</td>
                                    <td>{{ $nk->praktik_5 }}</td>
                                    <td>{{ max([$nk->praktik_1, $nk->praktik_2, $nk->praktik_3, $nk->praktik_4, $nk->praktik_5]) }}</td>
                                    <td>{{ $nk->produk }}</td>
                                    <td>{{ $nk->produk }}</td>
                                    <td>{{ $nk->proyek }}</td>
                                    <td>{{ $nk->proyek }}</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td></td>
                                    <td colspan="5" align="center"><strong>Rata - Rata</strong></td>
                                    <td>{{ $rata_praktik }}</td>
                                    <td></td>
                                    <td>{{ $rata_produk }}</td>
                                    <td></td>
                                    <td>{{ $rata_proyek }}</td>
                                    <td>{{ $nuts }}</td>
                                    <td>{{ $nuas }}</td>
                                    <td>{{ $rapor }}</td>
                                </tr>
                        </table>
                </div>
                <a href="{{ url('/nilai-keterampilan/'.$siswa->nis.'/'.$mapel->kode_mapel.'/'.$ta->kode_ta.'/create') }}" class="btn btn-primary btn-round">Input Nilai</a>
            </div>
        </div>
    </div>
</div>
@endsection 