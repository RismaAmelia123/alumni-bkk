@extends('Admin.Dashboard.index')
@section('title','Edit Perusahaan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Edit Perusahaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('perusahaan/update', $perusahaan->id_perusahaan) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <input type="text" name="perusahaan" id="perusahaan" class="form-control" value="{{ $perusahaan->perusahaan }}">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" value="{{ $perusahaan->kontak }}">
                                </div>
                                <div class="col mb-0">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $perusahaan->alamat }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="deskripsi" class="form-label">Deskripsi Perusahann</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="6" class="form-control">{{ $perusahaan->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="foto" class="form-label">Logo Perusahaan</label>
                                    <img src="/storage/{{ $perusahaan->foto }}" alt="Logo" width="300" class="rounded-circle py-4">
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>
                                <div class="col mb-0">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="select2 form-select form-select-1" data-allow-clear="true">
                                        @if ($perusahaan->status == '0')
                                            <option selected value="0">Pending</option>
                                            <option value="Posting">Posting</option>
                                        @else
                                            <option value="0">Pending</option>
                                            <option selected value="Posting">Posting</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection