@extends('Admin.Dashboard.index')
@section('title', 'Tambah Admin')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Tambah Admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                                </div>
                                <div class="col mb-0">
                                    <label for="nama" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
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
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="number" name="kontak" id="kontak" class="form-control" placeholder="Masukan Kontak">
                                </div>
                                <div class="col mb-3">
                                    <label for="foto" class="form-label">Profile</label>
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