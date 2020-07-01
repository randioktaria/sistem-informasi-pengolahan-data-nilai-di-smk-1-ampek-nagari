@extends('layouts.app')

@section('judul')
  {{ __('Kelas / Mata Pelajaran / Guru Pengajar') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($kelas as $kelas)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ $kelas->kelas. ' - ' .$kelas->jurusan }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Mata Pelajaran') }}</th>
                        <th>{{ __('Guru') }}</th>
                        <th>{{ __('Aksi')}}</th>
                      </thead>
                      <tbody>
                      
                        @php 
                        $mapelkelas = App\Mapelkelas::where('kode_kelas', $kelas->kode_kelas)->get() 
                        @endphp

                        @foreach($mapelkelas as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ empty($data->mapel->mapel) ? '-': $data->mapel->mapel }}</td>
                            <td width="50%">{{ empty($data->guru->nama) ? '-': $data->guru->nama }}</td>
                            <td width="25%">
                            <form action="{{ Route('mata-pelajaran-kelas.destroy', $data->kode_mapel_kelas) }}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('mata-pelajaran-kelas.edit', $data->kode_mapel_kelas) }}" class="btn btn-sm">edit</a>
                                <button type="submit" class="btn btn-sm">hapus</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <a href="{{ Route('mata-pelajaran-kelas.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection