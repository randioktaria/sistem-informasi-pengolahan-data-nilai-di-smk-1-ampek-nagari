@extends('layouts.app')

@section('judul')
    {{ __('Kelas') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Data Kelas') }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>{{ __('Kode') }}</th>
                        <th>{{ __('Kelas') }}</th>
                        <th>{{ __('Aksi') }}</th>
                      </thead>
                      <tbody>
                        @foreach($kelas as $data)
                        <tr>
                          <td>{{ $data->kode_kelas }}</td>
                          <td width="65%">{{ $data->kelas }}</td>
                          <td width="25%">

                            <form action="{{ route('kelas.destroy', $data->kode_kelas) }}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('kelas.show', $data->kode_kelas) }}" class="btn btn-sm">detail </a>
                                <a href="{{ Route('kelas.edit', $data->kode_kelas) }}" class="btn btn-sm">edit </a>
                                <button type="submit" class="btn btn-sm">hapus </button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $kelas->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ Route('kelas.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection