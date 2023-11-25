@extends('Admin.Dashboard.index')
@section('Title','Edit Gallery')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <div class="card-title m-0 me-4"><h4 class="fw-bold">Gallery</h4></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('gallery/update', $gallery->id_gallery) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="gallery" class="form-label fw-bold">Gallery</label>
                                    <img src="/storage/{{ $gallery->gallery }}" alt="Gallery" width="150" class="mb-3">
                                    <input type="file" name="gallery" id="gallery" class="form-control" value="{{ $gallery->gallery }}"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn form-control text-white" style="background-color: #696cff">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection