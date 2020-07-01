@extends('layouts.app')

@section('judul')
    {{ __('Laporan Nilai') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-body">

                @if ($walas_cek > 0)

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
                    
                    <b>
                        KELAS : {{ $kelas->kelas }} - TAHUN AJARAN : {{ $ta->ta }}
                    </b>

                    @foreach ($siswa as $siswa) 
                        <table width="100%" border="1" class="mb-4">
                            <tr>
                                <th class="text-center" colspan="4" bgcolor="#ccc"><i><b>{{ $siswa->nis }} - {{ $siswa->nama }}<b><i></th>
                            </tr>
                            <tr>
                            <tr class="text-center">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Mata Pelajaran</th>
                                <th colspan="2">Nilai</th>
                            <tr class="text-center">
                                <th>Pengetahuan</th>
                                <th>Keterampilan</th>
                            </tr>
                            </tr>
                                @php 
                                    $mapel = App\Mapelkelas::where('kode_kelas', $siswa->kode_kelas)
                                                                ->get();
                                @endphp

                                @foreach ($mapel as $key => $mk)
                                    <tr>
                                        <td width="3%">{{ $key+1 }}</td>
                                        <td>{{ $mk->mapel->mapel }}</td>

                                        @php

                                        $np = App\NilaiPengetahuan::where('nis', $siswa->nis)
                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                    ->get();

                                        $cek_id = App\NilaiPengetahuan::select('nis')
                                                        ->where('nis', $siswa->nis)
                                                        ->where('kode_mapel', $mk->kode_mapel)
                                                        ->count();

                                                        if ($cek_id > 0) {

                                                            $jumlah_t = 0;
                                                            foreach($np as $key => $nps) {
                                                                $rata_t = ($nps->tugas_1 + $nps->tugas_2 + $nps->tugas_3 + $nps->tugas_4) / 4;
                                                                $jumlah_t += $rata_t;
                                                            }
                                                                        
                                                            $rata_tugas = $jumlah_t / count($np);
                                                            $rata_tugas = number_format($rata_tugas);
                                                                                    
                                                            $jumlah_k = 0;
                                                            foreach($np as $key => $nps) {
                                                                $rata_k = ($nps->kuis_1 + $nps->kuis_2 + $nps->kuis_3) / 3;
                                                                        $jumlah_k += $rata_k;
                                                            }
                                                                        
                                                            $rata_kuis = $jumlah_k / count($np);
                                                            $rata_kuis = number_format($rata_kuis);
                                                                        
                                                            } else {
                                                                        
                                                                $rata_tugas = 0;
                                                                $rata_kuis = 0;

                                                            }

                                                        $rata_pengamatan = number_format(App\NilaiPengetahuan::where('nis', $siswa->nis)
                                                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                                                    ->avg('pengamatan'));
                                
                                                        $uh = App\NilaiPengetahuan::select('uh')
                                                                        ->where('nis', $siswa->nis)
                                                                        ->where('kode_mapel', $mk->kode_mapel)
                                                                        ->get();

                                                        if (count($uh) > 0) {
                                            
                                                            $jumlah_uh = 0;
                                                            $bagi = 0;
                                                            foreach ($uh as $key => $uh) {
                                                                            
                                                                if ($uh->uh < 70) {
                                                                                            
                                                                    $uh->uh = 70;
                                                                }
                                                                                    
                                                                $bagi = $key+1;
                                                                $jumlah_uh += $uh->uh;
                                            
                                                            }
                                                                                
                                                            $rata_uh = number_format($jumlah_uh / $bagi);
                                                            
                                                        } else {
                                                                
                                                            $rata_uh = 0;
                                                        }

                                                        $nu_p = App\NilaiUjian::where('nis', $siswa->nis)
                                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                                    ->where('ket', 'P')
                                                                    ->first();
                                
                                                        $nuts_p = isset($nu_p->uts) ? $nu_p->uts : 0;
                                                        $nuas_p = isset($nu_p->uas) ? $nu_p->uas : 0;
                                                                    
                                                        $rapor_p = number_format(((2 * $rata_uh) + $rata_tugas + $rata_kuis + $rata_pengamatan + $nuts_p + $nuas_p) / 7);
                                        
                                        @endphp

                                        <td class="text-center">
                                            <b>
                                                @if ($rapor_p == 0)
                                                    {{ '-' }}
                                                @else
                                                    {{ $rapor_p }}
                                                @endif
                                            </b>
                                        </td>
                                        @php

                                        $nk = App\NilaiKeterampilan::where('nis', $siswa->nis)
                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                    ->get(); 

                                        $cek_id = App\NilaiKeterampilan::select('nis')
                                                    ->where('nis', $siswa->nis)
                                                    ->where('kode_mapel', $mk->kode_mapel)
                                                    ->count();

                                        if ($cek_id > 0) {

                                            $jumlah = 0;
                                            foreach($nk as $nps) {
                                                $jumlah += max([$nps->praktik_1, $nps->praktik_2, $nps->praktik_3, $nps->praktik_4, $nps->praktik_5 ]);
                                            }

                                            $rata_praktik = number_format($jumlah / count($nk));

                                        } else {
                                            $rata_praktik = 0;
                                        } 

                                        $rata_produk = number_format(App\NilaiKeterampilan::where('nis', $siswa->nis)
                                                                ->where('kode_mapel', $mk->kode_mapel)
                                                                ->avg('produk'));
                                        
                                        $rata_proyek = number_format(App\NilaiKeterampilan::where('nis', $siswa->nis)
                                                                ->where('kode_mapel', $mk->kode_mapel)
                                                                ->avg('proyek'));

                                        $cek_id_ujian = App\NilaiUjian::where('nis', $siswa->nis)
                                                                ->where('kode_mapel', $mk->kode_mapel)
                                                                ->where('ket', 'K')
                                                                ->count();

                                        $nu_k = App\NilaiUjian::where('nis', $siswa->nis)
                                                                ->where('kode_mapel', $mk->kode_mapel)
                                                                ->where('ket', 'K')
                                                                ->first();

                                        $nuts_k = isset($nu_k->uts) ? $nu_k->uts : 0;
                                        $nuas_k = isset($nu_k->uas) ? $nu_k->uas : 0;
                                            
                                        $rapor_k = number_format(($rata_praktik + (2 * $rata_produk) + (2 * $rata_proyek) + $nuts_k + $nuas_k) / 7);
                                        
                                        @endphp
                                        <td class="text-center">
                                            <b>
                                                @if ($rapor_k == 0)
                                                    {{ '-' }}
                                                @else
                                                    {{ $rapor_k }}
                                                @endif
                                            </b>
                                        </td>
                                    </tr>

                                @endforeach
                            </tr>
                        </table>
                    @endforeach
                    <a href="{{ url('laporan-nilai-siswa-cetak') }}" class="btn btn-primary btn-round" target="_blank">Cetak</a>
                </div>
                @else
                    
                    <div class="text-danger">
                        <h6>HALAMAN INI HANYA BISA DIAKSES OLEH WALI KELAS !!!</h6>
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection