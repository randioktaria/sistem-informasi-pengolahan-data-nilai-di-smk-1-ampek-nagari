@extends('layouts.app')

@section('judul')

{{ __('Nilai Sikap') }}

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
                            <th>Aksi</th>
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
                                <td>
                                    <form action="{{ url('nilai-sikap/js/'.$js->id) }}" method="post">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="now-ui-icons ui-1_simple-remove"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <a href="{{ url('nilai-sikap/js/'. $siswa->nis .'/'. $mapel->kode_mapel .'/'. $ta->kode_ta .'/create') }}" class="btn btn-primary btn-round">Input Nilai Jurnal Sikap</a>
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
                            <th colspan="9">Aspak Karakter</th>
                            <th rowspan="3">Keterangan</th>
                            <th rowspan="3">Aksi</th>
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
                                <td>
                                    <form action="{{ url('nilai-sikap/pk/'. $pk->id) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="now-ui-icons ui-1_simple-remove"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <a href="{{ url('nilai-sikap/pk/'. $siswa->nis .'/'. $mapel->kode_mapel .'/'. $ta->kode_ta .'/create') }}" class="btn btn-primary btn-round">Input Nilai Karakter</a>
            </div>
        </div>
    </div>
</div>

@endsection