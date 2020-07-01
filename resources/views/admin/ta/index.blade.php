@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">
@endsection

@section('judul')
  {{ __('Tahun Ajaran') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Data Tahun Ajaran') }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Tahun Ajaran') }}</th>
                        <th>{{ __('Aksi') }}</th>
                      </thead>
                      <tbody>
                        @foreach($ta as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td width="65%">{{ $data->ta }}</td>
                            <td width="25%">
                            <form action="{{ route('ta.destroy', $data->kode_ta) }}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ Route('ta.edit', $data->kode_ta) }}" class="btn btn-sm">edit </a>
                                <button type="submit" class="btn btn-sm">hapus</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $ta->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ Route('ta.create') }}" class="btn btn-sm btn-round btn-fill btn-info pull-right"><i class="material-icons">add</i> Tambah Data</a>
            </div>
          </div>
        </div>
@endsection

@section('script')

<script src="{{ asset('js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>

@endsection