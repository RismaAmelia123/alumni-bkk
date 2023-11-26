@extends('Alumni.Landing-page.landing-page')
@section('title','BKK - Profile')
@section('landing-page')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title m-0 me-4"><h4 class="fw-bold">Profil Saya</h4></div>
                </div>
                <div class="card-body">
                    @foreach ($alumni as $alumni)
                        <form action="{{ url('profile/alumni', $alumni->nisn) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="/storage/{{ $alumni->foto }}" alt="Profile" class="d-block rounded mb-3" height="150" width="150" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="foto" class="btn btn-primary me-2 mb-3" tabindex="0">
                                        <span class="d-none d-sm-block">Upload foto baru</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="foto" name="foto" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                    </label>
                                </div>
                            </div>
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
                                    <label for="ktp" class="form-label">KTP</label><br>
                                    <img src="/storage/{{ $alumni->ktp }}" class="mb-3" alt="Ktp" width="200">
                                    <input type="file" name="ktp" id="ktp" class="form-control"/>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="ijazah_pendidikan" class="form-label">Ijazah Pendidikan</label><br>
                                    <img src="/storage/{{ $alumni->ijazah_pendidikan }}" class="mb-3" alt="Ijazah Pendidikan" width="200">
                                    <input type="file" name="ijazah_pendidikan" id="ijazah_pendidikan" class="form-control"/>
                                </div>
                                <div class="col mb-0">
                                    <label for="transkrip_nilai" class="form-label">Transkrip Nilai</label><br>
                                    <img src="/storage/{{ $alumni->transkrip_nilai }}" class="mb-3" alt="Transkrip Nilai" width="200">
                                    <input type="file" name="transkrip_nilai" id="transkrip_nilai" class="form-control"/>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="skck" class="form-label">SKCK</label><br>
                                    <img src="/storage/{{ $alumni->skck }}" class="mb-3" alt="SKCK" width="200">
                                    <input type="file" name="skck" id="skck" class="form-control"/>
                                </div>
                                <div class="col mb-0">
                                    <label for="kartu_kuning" class="form-label">Kartu Kuning</label><br>
                                    <img src="/storage/{{ $alumni->kartu_kuning }}" class="mb-3" alt="Kartu Kuning" width="200">
                                    <input type="file" name="kartu_kuning" id="kartu_kuning" class="form-control"/>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="sks" class="form-label">SKS</label><br>
                                    <img src="/storage/{{ $alumni->sks }}" class="mb-3" alt="SKS" width="200">
                                    <input type="file" name="sks" id="sks" class="form-control"/>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="ttl" class="form-label">Ttl</label>
                                    <input type="date" name="ttl" id="ttl" class="form-control" value="{{ $alumni->ttl }}}} "/>
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
                            {{-- <div class="row">
                                <div class="col mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <img src="/storage/{{ $alumni->foto }}" alt="Profile" width="2200" class="py-4 rounded-circle">
                                    <input type="file" name="foto" id="foto" class="form-control" value="{{ $alumni->foto }}" />
                                </div>
                            </div> --}}
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container py-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title m-0 me-2">Edit Alumni</h5>
                </div>
                <div class="card-body">
                    @foreach ($alumni as $alumni)
                        <form action="{{ url('profile/alumni', $alumni->nisn) }}" method="post" enctype="multipart/form-data">
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
                                    <img src="/storage/{{ $alumni->foto }}" alt="Profile" width="2200" class="py-4 rounded-circle">
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
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection