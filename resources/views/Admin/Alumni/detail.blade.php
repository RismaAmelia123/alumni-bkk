@extends('Admin.Dashboard.index')
@section('title','Detail Alumni')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Detail Siswa</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="align-middle text-center">
                                            <img src="/storage/{{ $alumni->foto }}" alt="Profile" class="rounded-circle" width="200">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nisn</th>
                                        <td>:</td>
                                        <td>{{ $alumni->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nis</th>
                                        <td>:</td>
                                        <td>{{ $alumni->nis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alumni</th>
                                        <td>:</td>
                                        <td>{{ $alumni->nama_alumni }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ktp</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->ktp }}" alt="Ktp" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Ijazah Pendidikan</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->ijazah_pendidikan }}" alt="Ijazah Pendidikan" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Transkrip Nilai</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->transkrip_nilai }}" alt="Transkrip Nilai" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Skck</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->skck }}" alt="Skck" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Kartu Kuning</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->kartu_kuning }}" alt="Kartu Kuning" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Sks</th>
                                        <td>:</td>
                                        <td><img src="/storage/{{ $alumni->sks }}" alt="Sks" width="50"></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>:</td>
                                        <td>{{ $alumni->ttl }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>
                                            @if ($alumni->jk == 'L')
                                                <p>Laki - Laki</p>
                                            @else
                                                <p>Perempuan</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td>{{ $alumni->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kontak</th>
                                        <td>:</td>
                                        <td>{{ $alumni->kontak }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tahun Angkatan</th>
                                        <td>:</td>
                                        <td>{{ $alumni->thn_angkatan }}</td>
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