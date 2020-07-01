@extends('layouts.app')

@section('judul')
  Mata Pelajaran
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Data Mata Pelajaran') }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>{{ __('Kode') }}</th>
                        <th>{{ __('Mata Pelajaran') }}</th>
                        <th>{{ __('Aksi') }}</th>
                      </thead>
                      <tbody>
                        @foreach($mapel as $data)
                        <tr>
                          <td>{{ $data->kode_mapel }}</td>
                          <td width="65%">{{ $data->mapel }}</td>
                          <td width="25%">

                            <form action="{{ route('mata-pelajaran.destroy', $data->kode_mapel) }}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('mata-pelajaran.edit', $data->kode_mapel) }}" class="btn btn-sm">edit </a>
                                <button type="submit" class="btn btn-sm">hapus</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $mapel->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ Route('mata-pelajaran.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection