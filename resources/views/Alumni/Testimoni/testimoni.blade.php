@extends('Alumni.Landing-page.landing-page')
@section('title','Riwayat Testimoni')
@section('landing-page')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="section-title">
              <p>Riwayat Saya</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('riwayat') }}"><h5 class="text-primary">Riwayat Perusahaan</h5></a>
            </div>
            <div class="col-2">
                <a class="d-inline tab {{ $siapa == 'me' ? 'tab-active' : ''}}" href="{{ url('riwayat/lowongan') }}"><h5 class="text-primary">Riwayat Lowongan</h5></a>
            </div>
            <div class="col">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('riwayat/testimoni') }}"><h5 class="text-primary">Testimoni</h5></a>
            </div>
        </div>
        
        <div class="col-md-12 mt-3">
            @foreach ($testimoni as $testimoni)
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/storage/{{ $testimoni->alumni->foto }}" alt="Profile" width="200" class="rounded-circle">
                            </div>
                            <div class="col-md-9 mt-5">
                                <h4 class="fw-bold">{{ $testimoni->alumni->nama_alumni }}</h4>
                                <h5 >Perusahaan : {{ $testimoni->lowongan->perusahaan->perusahaan }}</h5>
                                <h5 >Lowongan Pekerjaan : {{ $testimoni->lowongan->lowongan }}</h5>
                                <h5>Testimoni : {{ $testimoni->testimoni }}</h5>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection