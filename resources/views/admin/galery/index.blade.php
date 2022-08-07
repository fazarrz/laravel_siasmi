@extends('layouts.admin.main')
@section('title', 'Galery')
@section('container')
    
<div class="container-fluid">

    <?php if( session('success') ) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Galeri</h1>
        <span href="/dashboard" class="d-none d-sm-inline-block mr-1"><a href="">Dashboard</a> / Galeri</span>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="/galeries/create" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Title</th>
                            <th>Gambar</th>
                            <th width="1%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $galeries as $data )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><?= $data['title']; ?></td>
                            <td><img src="/img/galeri/<?= $data['image']; ?>" height="100px"></td>
                            <td>
                                <a href="/galeries/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a>
                                <form action="/galeries/{{ $data->id }}" method="post">
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