@extends('layouts.app')

@section('judul')
  {{ __('Siswa') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Siswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>{{ __('Nis') }}</th>
                        <th>{{ __('Nama') }}</th>
                        <th>{{ __('Aksi') }}</th>
                      </thead>
                      <tbody>
                        @foreach($siswa as $data)
                        <tr>
                          <td>{{ $data->nis }}</td>
                          <td width="65%">{{ $data->nama }}</td>
                          <td width="25%">

                            <form action="{{ route('siswa.destroy', $data->nis) }}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('siswa.show', $data->nis) }}" class="btn btn-sm">detail </a>
                                <a href="{{ Route('siswa.edit', $data->nis) }}" class="btn btn-sm">edit </a>
                                <button type="submit" class="btn btn-sm">hapus </button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $siswa->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ Route('siswa.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection