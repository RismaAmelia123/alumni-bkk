@extends('Admin.Dashboard.index')
@section('title','Perusahaan')
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
                        <h6 class=""><a href="{{ url('perusahaan/add') }}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg> Tambah Perusahaan</a></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Kontak</th>
                                        <th>Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        {{-- <th>Dibuat Oleh</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-bordered text-center">
                                    @foreach ($perusahaan as $key => $item)
                                    <tr>

                                        <td>{{ $key=+1 }}</td>
                                        <div class="row">
                                            <td>
                                                <img src="/storage/{{ $item->foto }}" alt="Logo" width="50" class="rounded-circle mb-2"><br>
                                                {{ $item->perusahaan }}
                                            </td>
                                        </div>
                                        <td>{{ $item->kontak }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            @if ($item->status == '0')
                                            <a href="" class="badge bg-warning">Pending</a>
                                            @else
                                                <a href="" class="badge bg-success">Posting</a>
                                            @endif
                                        </td>
                                        <td>
                                        <a href="perusahaan/edit/{{ $item->id_perusahaan }}"><button type="button" class="btn btn-icon btn-outline-primary btn-sm mb-1"><i class="bx bx-edit-alt"></button></i></a>
                                        <a href="perusahaan/delete/{{ $item->id_perusahaan }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" onclick="return-window.confirm('Hapus Data Ini?')"><i class="bx bx-trash-alt"></button></i></a>
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