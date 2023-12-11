@extends('Admin.Dashboard.index')
@section('title','Admin')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class=""><a href="{{ url('admin/add') }}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg> Tambah Admin</a></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kontak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-bordered">
                                    @foreach ($admin as $key => $item)
                                    <tr>
                                        <td>{{ $key+=1 }}</td>
                                        <div class="row">
                                            <td>
                                                <img src="/storage/{{ $item->foto }}" alt="Profile" width="50" class="rounded-circle me-2 mb-2">
                                                {{ $item->nama }}
                                            </td>
                                        </div>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->kontak }}</td>
                                        <td>
                                            <a href="admin/delete/{{ $item->id_admin }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" onclick="return-window.confirm('Hapus Data Ini?')"><i class="bx bx-trash-alt"></button></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection