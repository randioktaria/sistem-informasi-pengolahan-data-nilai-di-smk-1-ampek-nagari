@extends('layouts.app')

@section('judul')

{{ 'Nilai '.$mapel->mapel }}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="title">Nilai Pengetahuan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                    <td>{{ $nuts_p }}</td>
                                    <td>{{ $nuas_p }}</td>
                                    <td>{{ $rapor_p }}</td>
                                </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
                <h6 class="title">Nilai Keterampilan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                    <td>{{ $nuts_k }}</td>
                                    <td>{{ $nuas_k }}</td>
                                    <td>{{ $rapor_k }}</td>
                                </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Catatan Jurnal Sikap</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Catatan Perilaku</th>
                            <th>Nilai Utama Penguatan Pendidikan Karakter</th>
                        </tr>
                        @foreach($js as $key => $js)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @php
                                        $thn = substr($js->created_at, 0, 4);
                                        $bln = substr($js->created_at, 5, 2);
                                        $tgl = substr($js->created_at, 8, 2);
                                    @endphp

                                    {{ $tgl. '/' .$bln. '/' .$thn }}
                                </td>
                                <td>{{ $js->catatan_perilaku }}</td>
                                <td>{{ $js->nilai_utama }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Penilaian Karakter</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Tanggal</th>
                            <th colspan="9">Aspek Karakter</th>
                            <th rowspan="3">Keterangan</th>
                        </tr>
                        <tr class="text-center">
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                        </tr>
                        <tr class="text-center">
                            <th>Kemandirian</th>
                            <th>Inisiatif</th>
                            <th>kerjasama</th>
                            <th>Tang. Jawab</th>
                            <th>kejujuran</th>
                            <th>Gemar Membaca</th>
                            <th>menghargai</th>
                            <th>Komunikatif</th>
                            <th>kepemimpinan</th>
                        </tr>
                        @foreach($pk as $key => $pk)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @php
                                        $thn = substr($pk->created_at, 0, 4);
                                        $bln = substr($pk->created_at, 5, 2);
                                        $tgl = substr($pk->created_at, 8, 2);
                                    @endphp

                                    {{ $tgl. '/' .$bln. '/' .$thn }}
                                </td>
                                <td>{{ $pk->kemandirian }}</td>
                                <td>{{ $pk->inisiatif }}</td>
                                <td>{{ $pk->kerjasama }}</td>
                                <td>{{ $pk->tang_jawab }}</td>
                                <td>{{ $pk->kejujuran }}</td>
                                <td>{{ $pk->gemar_membaca }}</td>
                                <td>{{ $pk->menghargai }}</td>
                                <td>{{ $pk->komunikatif }}</td>
                                <td>{{ $pk->kepemimpinan }}</td>
                                <td>{{ $pk->ket }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Keterangan KD (Kompetensi Dasar)</h6>
            </div>
            <div class="card-body text-primary">
                @foreach($kd as $kd)
                    {{ $kd->no_kd }} {{ $kd->nama_kd }}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection 