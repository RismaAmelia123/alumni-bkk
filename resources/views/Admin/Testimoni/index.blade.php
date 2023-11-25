@extends('Admin.Dashboard.index')
@section('Title', 'Testimoni')
@section('content')
<div class="container  py-2">
    <div class="col-md-12">
        {{-- @if (session('status'))
            <div class="col-md-6 mb-2 top-0 end-0 bs-toast toast fade show bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-medium">Bootstrap</div>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
                </div>
            </div>
        @endif --}}
        <div class="card h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Alumni</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table table-bordered text-center">
                            @foreach ($testimoni as $key => $item)
                            <tr>
                                <td>{{ $key+=1 }}</td>
                                <td>{{ $item->alumni->nama_alumni }}</td>
                                <td>{{ $item->testimoni }}</td>
                                <td>
                                    <a href="testimoni/delete/{{ $item->id_testimoni }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" ><i class="bx bx-trash-alt"></button></i></a>
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