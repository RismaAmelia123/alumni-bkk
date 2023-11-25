@extends('Admin.Dashboard.index')
@section('title','Tambah Perusahaan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Perusahaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('perusahaan/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <input type="text" name="perusahaan" id="perusahaan" class="form-control" placeholder="Masukan Perusahaan">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukan Kontak">
                                </div>
                                <div class="col mb-0">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
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
                                <div class="col mb-0">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="status" selected>Pilih Status</option>
                                        <option value="0">Pending</option>
                                        <option value="Posting">Posting</option>
                                    </select>
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