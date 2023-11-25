@extends('Admin.Dashboard.index')
@section('title'.'Edit Alumni')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Edit Alumni</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('alumni/update', $alumni->nisn) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="nisn" class="form-label">Nisn</label>
                                    <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $alumni->nisn }}" readonly/>
                                </div>
                                <div class="col mb-0">
                                    <label for="nis" class="form-label">Nis</label>
                                    <input type="text" name="nis" id="nis" class="form-control" value="{{ $alumni->nis }}" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="alumni" class="form-label">Nama Alumni</label>
                                    <input type="text" name="nama_alumni" id="nama_alumni" class="form-control" value="{{ $alumni->nama_alumni }}" />
                                </div>
                                <div class="col mb-0">
                                    <label for="ktp" class="form-label">KTP</label>
                                    <input type="text" name="ktp" id="ktp" class="form-control" value="{{ $alumni->ktp }}" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="ttl" class="form-label">Ttl</label>
                                    <input type="date" name="ttl" id="ttl" class="form-control" value="{{ $alumni->ttl }} "/>
                                </div>
                                <div class="col mb-0">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="select2 form-select form-select-1" data-allow-clear="true">
                                        @if ($alumni->jk =='L')
                                            <option selected value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        @else
                                            <option value="L">Laki - Laki</option>
                                            <option selected value="P">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alumni->alamat }}" />
                                </div>
                                <div class="col mb-0">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" value="{{ $alumni->kontak }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <img src="/storage/{{ $alumni->foto }}" alt="Profile" width="250" class="py-4 rounded-circle">
                                    <input type="file" name="foto" id="foto" class="form-control" value="{{ $alumni->foto }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="thn_angkatan" class="form-label">Tahun Angkatan</label>
                                    <input type="text" name="thn_angkatan" id="thn_angkatan" class="form-control" value="{{ $alumni->thn_angkatan }} "/>
                                </div>
                                <div class="col mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label mt-2" for="password">Kata Sandi</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
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