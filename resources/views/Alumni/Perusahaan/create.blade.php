@extends('Alumni.LAnding-page.landing-page')
@section('title','BKK - Tambah Perusahaan')
@section('landing-page')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title m-0 me-4"><h4 class="fw-bold">Perusahaan </h4></div>
                </div>
                <div class="card-body">
                    <form action="{{ url('pengajuan/perusahaan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col mb-0">
                                <label for="perusahaan" class="form-label">Perusahaan</label>
                                <input type="text" name="perusahaan" id="perusahaan" class="form-control" placeholder="Masukan Perusahaan">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col mb-0">
                                <label for="kontak" class="form-label">Kontak</label>
                                <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukan Kontak">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="deskripsi" class="form-label">Deskripsi Perusahann</label>
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="6" class="form-control" placeholder="Masukan Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="foto" class="form-label">Logo Perusahaan</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="submit" class="btn btn-primary" style="width: 100%">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection