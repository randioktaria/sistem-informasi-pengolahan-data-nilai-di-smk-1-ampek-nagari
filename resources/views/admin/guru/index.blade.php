@extends('layouts.app')

@section('judul')
  Guru Pengajar
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Guru</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        @foreach($guru as $data)
                        <tr>
                          <td>{{ $data->kode_guru }}</td>
                          <td width="55%">{{ $data->nama }}</td>
                          <td width="25%">

                            <form action="{{ route('guru.destroy', $data->kode_guru) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('guru.show', $data->kode_guru) }}" class="btn btn-sm">datail</a>
                                <a href="{{ Route('guru.edit', $data->kode_guru) }}" class="btn btn-sm">edit</a>
                                <button type="submit" class="btn btn-sm">hapus</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $guru->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ Route('guru.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection