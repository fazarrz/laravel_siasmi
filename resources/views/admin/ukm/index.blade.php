@extends('layouts.admin.main')
@section('title', 'Ukm')
@section('container')

<div class="container-fluid">

    <?php if( session('success') ) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data UKM berhasil <strong>
            <?= session('success'); ?>
        </strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UKM</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="dashboard">Dashboard</a> / UKM</span>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="/ukm/create" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th width="1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $ukm as $data )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><?= $data['name']; ?></td>
                            <td><img src="/img/ukm/<?= $data['image']; ?>" height="100px"></td></td>
                            <td>
                                <a href="/ukm/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a>
                                <form action="/ukm/{{ $data->id }}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection