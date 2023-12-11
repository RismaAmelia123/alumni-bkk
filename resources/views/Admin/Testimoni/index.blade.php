@extends('Admin.Dashboard.index')
@section('Title', 'Testimoni')
@section('content')
<div class="container  py-2">
    <div class="col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Alumni</th>
                                <th>Lowongan</th>
                                <th>Perusahaan</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table table-bordered text-center">
                            @foreach ($testimoni as $key => $item)
                            <tr>
                                <td>{{ $key+=1 }}</td>
                                <td>{{ $item->alumni->nama_alumni }}</td>
                                <td>{{ $item->lowongan->lowongan }}</td>
                                <td>{{ $item->lowongan->perusahaan->perusahaan }}</td>
                                <td>{{ $item->testimoni }}</td>
                                <td>
                                    <a href="testimoni/delete/{{ $item->id_testimoni }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" onclick="return-window.confirm('Hapus Data Ini?')"><i class="bx bx-trash-alt"></button></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection