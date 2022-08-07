@extends('layouts.admin.main')
@section('title', 'Users')
@section('container')
  
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if( session('success') ) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a>
            / Admin</span>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <!-- <a href="" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th width="1%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $users as $data )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><a href="/users/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection