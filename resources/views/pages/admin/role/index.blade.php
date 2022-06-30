@extends('layouts.admin')

@section('title', 'Role')
@section('content')
<div class="container-fluid">

    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="font-weight-bold text-dark">
                    <p>List data</p>
                </div>

                <a href="" class="btn btn-s btn-outline-primary">
                    <i class="fas fa-sm fa-plus-circle"></i>
                    Tambah data
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" width="100%" cellspacing="0" id="dataTalbe">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Role</th>
                            <th>Desc</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
