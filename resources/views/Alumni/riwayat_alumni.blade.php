@extends('Alumni.Landing-page.landing-page')
@section('title','Riwayat Lowongan')
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
            <div class="col-2">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('/riwayat') }}"><h5 class="text-primary">Riwayat Perusahaan</h5></a>
            </div>
            <div class="col-2">
                <a class="d-inline tab {{ $siapa == 'me' ? 'tab-active' : ''}}" href="{{ url('/riwayat/lowongan') }}"><h5 class="text-primary">Riwayat Lowongan</h5></a>
            </div>
            <div class="col">
                <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}}" href="{{ url('riwayat/testimoni') }}"><h5 class="text-primary">Testimoni</h5></a>
            </div>
        </div>
        
        <div class="col-md-12 mt-3">
            <h5><a href="{{ url('pengajuan/loker') }}" class="btn btn-primary btn-sm mb-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg> Tambah Lowongan</a></h5>
            
            @foreach ($lowongan as $lowongan)
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="fw-bold">Lowongan Kerja {{ $lowongan->lowongan }}</h4>
                            <div class="row">
                                <div class="col-md-11">
                                    <h5>{{ $lowongan->perusahaan->alamat }}</h5>
                                </div>
                                <div class="col">
                                    @if ($lowongan->status == '0')
                                        <a href="/loker/delete/{{ $lowongan->id_lowongan }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" onclick="return-window.confirm('Hapus Data Ini?')"><i class="bx bx-trash-alt"></button></i></a>
                                    @else
                                        
                                    @endif
                                </div>
                            </div>
                            <hr class="mt-2">
                            <div class="row">
                                <div class="col">
                                    Gaji : <h5>{{ $lowongan->gaji }}</h5>
                                </div>
                                <div class="col">
                                    Pendidikan : <h5>{{ $lowongan->pendidikan }}</h5>
                                </div>
                                <div class="col">
                                    Tipe Pekerjaan : <h5>{{ $lowongan->tipe_pekerjaan }}</h5>
                                </div>
                                <div class="col">
                                    Status : <br>
                                    @if ($lowongan->status == '0')
                                        <a href="" class="badge bg-warning">Pending</a>
                                    @else
                                        <a href="" class="badge bg-success">Posting</a>
                                    @endif
                                </div>
                            </div>
                            <hr class="mt-3">
                            <div class="row mt-2">
                                <h5 class="fw-bold">Tanggal Posting : {{ $lowongan->tgl_post }}</h5>
                            </div>
                            <div class="row mt-2">
                                <h5 class="fw-bold">Keahlian : </h5><h5>{{ $lowongan->keahlian }}</h5><br>
                                <h5 class="fw-bold">Kualifikasi : </h5><h5>{{ $lowongan->kualifikasi }}</h5><br>
                                <h5 class="fw-bold">Syarat : </h5><h5>{{ $lowongan->syarat }}</h5><br>
                                <h5 class="fw-bold">Waktu Bekerja : </h5><h5>{{ $lowongan->jam_kerja }}</h5><br>
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