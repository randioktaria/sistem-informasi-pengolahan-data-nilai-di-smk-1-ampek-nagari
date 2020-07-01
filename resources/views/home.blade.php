@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@section('judul')
    Dashboard
@endsection
                    
@if (Auth::check() && Auth::user()->level == 'admin') 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Halaman Administrator</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@elseif (Auth::check() && Auth::user()->level == 'guru')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6>SELAMAT DATANG <span class="text-primary">{{ $guru->nama }}</span> DIHALAMAN GURU <span class="text-primary">SMKN 1 AMPEK NAGARI<span></h6>
                </div>
            </div>
        </div>
    </div>

@elseif (Auth::check() && Auth::user()->level == 'siswa')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6>SELAMAT DATANG <span class="text-primary">{{ $siswa->nama }}</span> DIHALAMAN SISWA <span class="text-primary">SMKN 1 AMPEK NAGARI<span></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="title">Pengumuman</h6>
                </div>
                <div class="card-body">
                    @foreach($pengumuman as $peng)
                        <div class="card">
                            <div class="card-body">
                                <h6 class="title text-primary">{{ $peng->judul }}</h6>
                                <small>{{ $peng->created_at }} oleh: <span class="text-primary">{{ $peng->guru->nama }}</span></small>
                                <p class="text-justify">{{ $peng->isi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
                
@endsection
