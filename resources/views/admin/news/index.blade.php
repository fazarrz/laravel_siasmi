@extends('layouts.admin.main')
@section('title', 'Berita')
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
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a> / Berita</span>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <?php if( $allNews < 6 ) : ?>
                    <a href="/news/create" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a>
                <?php else : ?>
                    <a class="btn btn-sm btn-primary float-right ml-3" onclick="return alert('Maksimal hanya bisa membuat 6 Berita.');">Tambah Data</a>
                <?php endif; ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Isi</th>
                            <th>Tanggal</th>
                            <th width="1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $news as $data )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><?= $data['title']; ?></td>
                            <td><img src="/img/berita/<?= $data['image']; ?>" height="100px"></td>
                            <td>{{ Str::limit(strip_tags($data->body), 75, ' ...') }}</td>
                            <td><?= date('d/m/Y - h:i A', strtotime($data['created_at'])); ?></td></td>
                            <td>
                                <a href="/news/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a>
                                <form action="/news/{{ $data->id }}" method="post">
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