@extends('Admin.Dashboard.index')
@section('title','Detail Lowongan')
@section('content')
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title m-0 me-2">Detail Lowongan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="align-middle text-center">
                                            <img src="/storage/{{ $lowongan->perusahaan->foto }}" alt="Logo" class="rounded-circle" width="200">
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        @if {{ (Auth::guard('admins')->check()) }}
                                            <th>Pengisi Lowongan Pekerjaan</th>
                                            <td>:</td>
                                            <td> <img src="/storage/{{ $lowongan->admin->foto }}" alt="Profile" width="40" class="rounded-circle me-2">{{ $lowongan->admin->nama }}</td>
                                        @else 
                                            <th>Pengisi Lowongan Pekerjaan</th>
                                            <td>:</td>
                                            <td> <img src="/storage/{{ $lowongan->alumni->foto }}" alt="Profile" width="40" class="rounded-circle me-2">{{ $lowongan->alumni->nama_alumni }}</td>
                                        @endif
                                    </tr> --}}
                                    <tr>
                                        <th>Bidang</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->lowongan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Perusahaan</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->perusahaan->perusahaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Syarat</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->syarat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keahlian</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->keahlian }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kualifikasi</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->kualifikasi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Bekerja</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->jam_kerja }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gaji</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->gaji }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->pendidikan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tipe Pekerjaan</th>
                                        <td>:</td>
                                        <td>{{ $lowongan->tipe_pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>
                                            @if ($lowongan->status == '0')
                                            <a href="" class="badge bg-warning">Pending</a>
                                            @else
                                                <a href="" class="badge bg-success">Posting</a>
                                            @endif
                                        </td>
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