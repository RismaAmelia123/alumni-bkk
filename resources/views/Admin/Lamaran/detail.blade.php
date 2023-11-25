@extends('Admin.Dashboard.index')
@section('title', 'Lamaran')
@section('content')
<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title m-0 me-2">Detail Lamaran Pekerjaan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>NISN</th>
                                    <td>:</td>
                                    <td>{{ $lamaran->alumni->nisn }}</td>
                                </tr>
                                <tr>
                                    <th>Alumni</th>
                                    <td>:</td>
                                    <td>{{ $lamaran->alumni->nama_alumni }}</td>
                                </tr>
                                <tr>
                                    <th>Lowongan Pekerjaan</th>
                                    <td>:</td>
                                    <td>{{ $lamaran->lowongan->lowongan }}</td>
                                </tr>
                                <tr>
                                    <th>Perusahaan</th>
                                    <td>:</td>
                                    <td>{{ $lamaran->lowongan->perusahaan->perusahaan }}</td>
                                </tr>
                                <tr>
                                    <th>Surat Lamaran</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->surat_lamaran }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>CV</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->cv }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>KTP</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->ktp }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>Ijazah Pendidikan</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->ijazah_pendidikan }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>Transkrip Nilai</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->transkrip_nilai }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>SKCK</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->skck }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>Kartu Kuning</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->kartu_kuning }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                                <tr>
                                    <th>SKS</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $lamaran->alumni->sks }}" alt="Surat Lamaran" width="150"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection