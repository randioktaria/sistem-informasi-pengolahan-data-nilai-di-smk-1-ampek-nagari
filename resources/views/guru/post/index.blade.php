@extends('layouts.app')

@section('judul')
    {{ __('Posting Pengumuman') }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    @foreach($kelas as $kelas)
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">{{ $kelas->kelas->kelas }}</h6>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Pengumuman</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php 
                                $posts = App\Post::where('kode_kelas', $kelas->kode_kelas)
                                                    ->where('kode_guru', Auth::user()->username)
                                                    ->get();
                                $no = 1;
                            @endphp
                            @foreach($posts as $post)
                                <tr>
                                    <td width="5%">{{ $no++ }}</td>
                                    <td><strong>{{ $post->judul }}</strong>
                                        <br><small>{{ $post->created_at }}</small>
                                        <p class="text-justify">{{ $post->isi }}</p>
                                    </td>
                                    <td width="20%">
                                        <form action="{{ Route('post.destroy', $post->id) }}" method="post">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <a href="{{ Route('post.edit', $post->id) }}" class="btn btn-primary"><i class="now-ui-icons ui-2_settings-90"></i> </a>
                                        <button type="submit" class="btn btn-primary"><i class="now-ui-icons ui-1_simple-remove"></i> </button>
                                        </form>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
        <a href="{{ Route('post.create') }}" class="btn btn-primary btn-round">Tambah</a>
    </div>
</div>
@endsection