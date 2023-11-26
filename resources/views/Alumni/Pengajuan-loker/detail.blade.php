@extends('Alumni.Landing-page.landing-page')
@section('title','BKK - Detail Lowongan Pekerjaan')
@section('landing-page')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-md-7 col-lg-7 py-2 px-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="fw-bold">Lowongan Kerja {{ $lowongan->lowongan }}</h4>
                            <div class="row">
                                <h5>{{ $lowongan->alamat }}</h5>
                            </div>
                            <hr>
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
                            </div>
                            <hr>
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
                        <a href="/lamar/loker/{{ $lowongan->id_lowongan }}"><input type="submit" value="Lamar Pekerjaan" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="fw-bold">Profil Perusahaan</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <img src="/storage/{{ $lowongan->perusahaan->foto }}" alt="Logo" class="rounded-circle" width="70">
                        </div>
                        <div class="row mt-3">
                            <h5 class="fw-bold">Nama Perusahaan</h5><br>
                            <h5>{{  $lowongan->perusahaan->perusahaan  }}</h5>
                        </div>
                        <div class="row">
                            <h5 class="fw-bold">Deskripsi Perusahaan</h5><br>
                            <h5>{{ $lowongan->perusahaan->deskripsi }}</h5>
                        </div>
                        <div class="row">
                            <h5 class="fw-bold">Kontak Perusahaan</h5><br>
                            <h5>{{ $lowongan->perusahaan->kontak }}</h5>
                        </div>
                        <div class="row">
                            <h5 class="fw-bold">Lokasi Perusahaan</h5><br>
                            <h5>{{ $lowongan->perusahaan->alamat }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection