@extends('Admin.Dashboard.index')
@section('title','Edit Lowongan Pekerjaan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-4">Edit Lowongan Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('lowongan/update', $lowongan->id_lowongan) }}" method="post">
                            @csrf
                            <div class="row ">
                                <div class="col mb-3">
                                    <label for="lowongan" class="form-label">Bidang Pekerjaan</label>
                                    <input type="text" id="lowongan" name="lowongan" class="form-control" value="{{ $lowongan->lowongan }}" />
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col mb-3">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <select id="id_perusahaan" name="id_perusahaan" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="">Pilih Perusahaan</option>
                                        @foreach ($perusahaan as $item)
                                            <option selected value="{{ $item->id_perusahaan }}">{{ $item->perusahaan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="syarat" class="form-label">Syarat</label>
                                    <textarea name="syarat" id="syarat" cols="30" rows="4" class="form-control">{{ $lowongan->syarat }}</textarea>
                                </div>
                                <div class="col mb-0">
                                    <label for="keahlian" class="form-label">Keahlian</label>
                                    <textarea name="keahlian" id="keahlian" cols="30" rows="4" class="form-control">{{ $lowongan->keahlian }}</textarea>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="kualifikasi" class="form-label">Kualifikasi</label>
                                    <textarea name="kualifikasi" id="kualifikasi" cols="30" rows="4" class="form-control">{{ $lowongan->kualifikasi }}</textarea>
                                </div>
                                <div class="col mb-0">
                                    <label for="jam_kerja" class="form-label">Waktu Bekerja</label>
                                    <input type="text" id="jam_kerja" name="jam_kerja" class="form-control" value="{{ $lowongan->jam_kerja }}" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="gaji" class="form-label">Gaji</label>
                                    <input type="text" id="gaji" name="gaji" class="form-control" value="{{ $lowongan->gaji }}" />
                                </div>
                                <div class="col mb-0">
                                    <label for="pendidikan" class="form-label">Pendidikan</label>
                                    <input type="text" id="pendidikan" name="pendidikan" class="form-control" value="{{ $lowongan->pendidikan }}" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="tipe_pekerjaan" class="form-label">Tipe Pekerjaan</label>
                                    <input type="text" id="tipe_pekerjaan" name="tipe_pekerjaan" class="form-control" value="{{ $lowongan->tipe_pekerjaan }}" />
                                </div>
                                <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Tanggal Expired</label>
                                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" value="{{ $lowongan->tgl_akhir }}">
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="select2 form-select form-select-1" data-allow-clear="true">
                                            @if ($lowongan->status == '0')
                                                <option selected value="0">Pending</option>
                                                <option value="Posting">Posting</option>
                                            @else
                                                <option value="0">Pending</option>
                                                <option selected value="Posting">Posting</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection