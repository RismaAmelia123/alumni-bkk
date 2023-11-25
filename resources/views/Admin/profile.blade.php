@extends('Admin.Dashboard.index')
@section('title','Profile')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Profil Saya</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($admin as $admin)
                            <form action="{{ url('admin/update', $admin->id_admin) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="/storage/{{ $admin->foto }}" alt="Profile" class="d-block rounded mb-3" height="150" width="150" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="foto" class="btn btn-primary me-2 mb-3" tabindex="0">
                                            <span class="d-none d-sm-block">Upload foto baru</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="foto" name="foto" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $admin->nama }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="{{ $admin->username}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $admin->email}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
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
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="kontak" class="form-label">Kontak</label>
                                        <input type="number" name="kontak" id="kontak" class="form-control" value="{{ $admin->kontak}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-3">
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
@endsection