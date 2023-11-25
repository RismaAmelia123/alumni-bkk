@extends('Admin.Dashboard.index')
@section('title','Tambah Lowongan Pekerjaan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-4">Tambah Lowongan Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('lowongan/create') }}" method="post">
                            @csrf
                            <div class="row ">
                                <div class="col mb-3">
                                    <label for="lowongan" class="form-label">Bidang Pekerjaan</label>
                                    <input type="text" id="lowongan" name="lowongan" class="form-control" placeholder="Masukan Bidang Pekerjaan" />
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col mb-3">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <select id="id_perusahaan" name="id_perusahaan" class="select2 form-select form-select-1" data-allow-clear="true">
                                        <option value="">Pilih Perusahaan</option>
                                        @foreach ($perusahaan as $item)
                                            <option value="{{ $item->id_perusahaan }}">{{ $item->perusahaan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="syarat" class="form-label">Syarat</label>
                                    <textarea name="syarat" id="syarat" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="col mb-0">
                                    <label for="keahlian" class="form-label">Keahlian</label>
                                    <textarea name="keahlian" id="keahlian" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="kualifikasi" class="form-label">Kualifikasi</label>
                                    <textarea name="kualifikasi" id="kualifikasi" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="col mb-0">
                                    <label for="jam_kerja" class="form-label">Waktu Bekerja</label>
                                    <input type="text" id="jam_kerja" name="jam_kerja" class="form-control" placeholder="Masukan Waktu Bekerja" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="gaji" class="form-label">Gaji</label>
                                    <input type="text" id="gaji" name="gaji" class="form-control" placeholder="Masukan Nominal Gaji" />
                                </div>
                                <div class="col mb-0">
                                    <label for="pendidikan" class="form-label">Pendidikan</label>
                                    <input type="text" id="pendidikan" name="pendidikan" class="form-control" placeholder="Masukan Pendidikan" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="tipe_pekerjaan" class="form-label">Tipe Pekerjaan</label>
                                    <input type="text" id="tipe_pekerjaan" name="tipe_pekerjaan" class="form-control" placeholder="Masukan Tipe Pekerjaan" />
                                </div>
                                <div class="col mb-0">
                                    <label for="tgl_akhir" class="form-label">Tanggal Expired</label>
                                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control">
                                </div>
                                <div class="row-g-2">
                                    <div class="col mb-0">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="select2 form-select form-select-1" data-allow-clear="true">
                                            <option value="status" selected>Pilih Status</option>
                                            <option value="0">Pending</option>
                                            <option value="Posting">Posting</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection