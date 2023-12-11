@extends('Alumni.Landing-page.landing-page')
@section('title','Riwayat Perusahaan')
@section('landing-page')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('status') }}
                </div>
            @endif
            <div class="section-title">
              <p>Riwayat Saya</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('/riwayat') }}"><h5 class="text-primary">Riwayat Perusahaan</h5></a>
            </div>
            <div class="col-md-2">
                <a class="d-inline tab {{ $siapa == 'me' ? 'tab-active' : ''}}" href="{{ url('/riwayat/lowongan') }}"><h5 class="text-primary">Riwayat Lowongan</h5></a>
            </div>
            <div class="col-md-2">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('riwayat/testimoni') }}"><h5 class="text-primary">Testimoni</h5></a>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <h5><a href="{{ url('pengajuan/perusahaan') }}" class="btn btn-primary btn-sm mb-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg> Tambah Perusahaan</a></h5>
            @foreach ($perusahaan as $perusahaan)
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/storage/{{ $perusahaan->foto }}" alt="Logo" width="200" class="rounded-circle">
                            </div>
                            <div class="col-md-9 mt-5">
                                <h4 class="fw-bold">Perusahaan {{ $perusahaan->perusahaan }}</h4>
                                <h5>{{ $perusahaan->alamat }}</h5>
                                @if ($perusahaan->status == '0')
                                    <a href="" class="badge bg-warning">Pending</a>
                                @else
                                    <a href="" class="badge bg-success">Posting</a>
                                @endif
                            </div>
                            <div class="col-md-1 mt-5">
                                @if ($perusahaan->status == '0')
                                    <a href="delete/perusahaan/{{ $perusahaan->id_perusahaan }}"><button type="button" class="btn btn-icon btn-outline-danger" onclick="return-window.confirm('Hapus Data Ini?')"><i class="bx bx-trash-alt"></button></i></a>
                                @else
                                    
                                @endif
                            </div>
                            <hr>
                            <div class="row mt-2">
                                <h5 class="fw-bold">Kontak : </h5><h5>{{ $perusahaan->kontak }}</h5><br>
                                <h5 class="fw-bold">Deskripsi : </h5><h5>{{ $perusahaan->deskripsi }}</h5>
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