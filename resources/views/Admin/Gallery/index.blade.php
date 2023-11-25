@extends('Admin.Dashboard.index')
@section('Title', 'Gallery')
@section('content')
<div class="container  py-2">
    <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-primary alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('status') }}
            </div>
        @endif
        <div class="card h-100">
            <div class="card-body">
                <div class="card-header">
                    <h6 class=""><a href="{{ url('gallery/add') }}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg> Tambah gallery</a></h6>
                </div>
                <div class="table-responsive">
                    <table class="table" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Gallery</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table table-bordered text-center">
                            @foreach ($gallery as $key => $item)
                            <tr>
                                <td>{{ $key+=1 }}</td>
                                <td>
                                    <img src="/storage/{{ $item->gallery }}" alt="Gallery" width="150">
                                </td>
                                <td>
                                    <a href="gallery/edit/{{ $item->id_gallery }}"><button type="button" class="btn btn-icon btn-outline-primary btn-sm"><i class="bx bx-edit-alt me-1"></button></i></a>
                                    <a href="gallery/delete/{{ $item->id_gallery }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" ><i class="bx bx-trash-alt"></button></i></a>
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
@endsection