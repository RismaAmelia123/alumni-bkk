@extends('Alumni.Landing-page.landing-page')
@section('title','BKK - Tambah Testimoni')
@section('landing-page')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <div class="card-title m-0 me-4"><h4 class="fw-bold">Testimoni</h4></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('riwayat/testimoni/create', $lowongan->id_lowongan) }}" method="post">
                            @csrf
                            <input type="hidden" name="id_lowongan" id="id_lowongan" value="{{ $lowongan->id_lowongan }}">
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="testimoni" class="form-label fw-bold">Testimoni</label>
                                    <input type="text" name="testimoni" id="testimoni" class="form-control" placeholder="Berikan Testimoni">
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