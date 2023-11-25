@extends('Admin.Dashboard.index')
@section('title'.'Tambah Alumni')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Tambah Alumni</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('alumni/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="nisn" class="form-label">Nisn</label>
                                    <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukan Nisn" />
                                </div>
                                <div class="col mb-0">
                                    <label for="nis" class="form-label">Nis</label>
                                    <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukan Nis" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="alumni" class="form-label">Nama Alumni</label>
                                    <input type="text" name="nama_alumni" id="nama_alumni" class="form-control" placeholder="Masukan Nama Alumni" />
                                </div>
                                <div class="col mb-0">
                                    <label for="ktp" class="form-label">KTP</label>
                                    <input type="file" name="ktp" id="ktp" class="form-control" placeholder="Masukan Ktp" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="ijazah_pendidikan" class="form-label">Ijazah Pendidikan</label>
                                    <input type="file" name="ijazah_pendidikan" id="ijazah_pendidikan" class="form-control" placeholder="Masukan Nama Alumni" />
                                </div>
                                <div class="col mb-0">
                                    <label for="transkrip_nilai" class="form-label">Transkrip Nilai</label>
                                    <input type="file" name="transkrip_nilai" id="transkrip_nilai" class="form-control" placeholder="Masukan Ktp" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="skck" class="form-label">SKCK</label>
                                    <input type="file" name="skck" id="skck" class="form-control" placeholder="Masukan Nama Alumni" />
                                </div>
                                <div class="col mb-0">
                                    <label for="kartu_kuning" class="form-label">Kartu Kuning</label>
                                    <input type="file" name="kartu_kuning" id="kartu_kuning" class="form-control" placeholder="Masukan Ktp" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="sks" class="form-label">SKS</label>
                                    <input type="file" name="sks" id="sks" class="form-control" placeholder="Masukan Nama Alumni" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="ttl" class="form-label">Ttl</label>
                                    <input type="date" name="ttl" id="ttl" class="form-control" placeholder="Masukan Tanggal Lahir" />
                                </div>
                                <div class="col mb-0">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="jk" selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                                <div class="col mb-0">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukan Kontak" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukan Foto" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="thn_angkatan" class="form-label">Tahun Angkatan</label>
                                    <input type="text" name="thn_angkatan" id="thn_angkatan" class="form-control" placeholder="Masukan Tahun Angkatan" />
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