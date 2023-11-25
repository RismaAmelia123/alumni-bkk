@extends('Admin.Dashboard.index')
@section('Title','Tambah Gallery')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <div class="card-title m-0 me-4"><h4 class="fw-bold">Gallery</h4></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('gallery/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="gallery" class="form-label fw-bold">Gallery</label>
                                    <input type="file" name="gallery" id="gallery" class="form-control" placeholder="Masukan Foto" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn form-control text-white" style="background-color: #696cff">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection