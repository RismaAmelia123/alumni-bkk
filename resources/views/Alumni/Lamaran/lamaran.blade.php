@extends('Alumni.Landing-page.landing-page')
@section('landing-page')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <div class="card-title m-0 me-4"><h4 class="fw-bold">Lamaran Pekerjaan</h4></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('lamar/loker', $lowongan->id_lowongan) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_lowongan" id="id_lowongan" value="{{ $lowongan->id_lowongan }}">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="surat_lamaran" class="form-label fw-bold">Surat Lamaran</label>
                                    <input type="file" name="surat_lamaran" id="surat_lamaran" class="form-control">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="cv" class="form-label fw-bold">CV</label>
                                    <input type="file" name="cv" id="cv" class="form-control">
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