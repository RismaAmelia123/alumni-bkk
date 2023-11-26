@extends('Alumni.Landing-page.landing-page')
@section('title','BKK - Lamaran Pekerjaan')
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
                            <div class="row g-2 mt-1">
                                @if ($alumni[0]->ktp)
                                    <div class="col mb-0">
                                        <label for="ktp" class="form-label fw-bold">KTP</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                <div class="col mb-0">
                                    <label for="ktp" class="form-label fw-bold">KTP</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                        <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                    </div>
                                </div>
                                @endif
                                @if ($alumni[0]->ijazah_pendidikan)
                                    <div class="col mb-0">
                                        <label for="ijazah_pendidikan" class="form-label fw-bold">Ijazah Pendidikan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col mb-0">
                                        <label for="ijazah_pendidikan" class="form-label fw-bold">Ijazah Pendidikan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @endif
                                @if ($alumni[0]->transkrip_nilai)
                                    <div class="col mb-0">
                                        <label for="transkrip_nilai" class="form-label fw-bold">Transkrip Nilai</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col mb-0">
                                        <label for="transkrip_nilai" class="form-label fw-bold">Transkrip Nilai</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @endif
                                @if ($alumni[0]->skck)
                                    <div class="col mb-0">
                                        <label for="skck" class="form-label fw-bold">SKCK</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col mb-0">
                                        <label for="skck" class="form-label fw-bold">SKCK</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @endif
                                @if ($alumni[0]->kartu_kuning)
                                    <div class="col mb-0">
                                        <label for="kartu_kuning" class="form-label fw-bold">Kartu Kuning</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col mb-0">
                                        <label for="kartu_kuning" class="form-label fw-bold">Kartu Kuning</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @endif
                                @if ($alumni[0]->sks)
                                    <div class="col mb-0">
                                        <label for="sks" class="form-label fw-bold">SKS</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="col mb-0">
                                        <label for="sks" class="form-label fw-bold">SKS</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="row mt-3">
                                <p class="text-danger">*lengkapi berkas - berkas yang dibutuhkan</p>
                            </div>
                            <div class="row">
                                <div class="col mt-1">
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