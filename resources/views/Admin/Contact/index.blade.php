@extends('Admin.Dashboard.index')
@section('Title', 'Gallery')
@section('content')
<div class="container py-2">
    <div class="col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table table-bordered">
                            @foreach ($contact as $key => $item)
                            <tr>
                                <td>{{ $key+=1 }}</td>
                                <td>{{ $item->name }}<td>
                                <td>{{ $item->email }}<td>
                                <td>{{ $item->message }}<td>
                                <td>
                                    <a href="contact/delete/{{ $item->id_contact }}"><button type="button" class="btn btn-icon btn-outline-danger btn-sm" ><i class="bx bx-trash-alt"></button></i></a>
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