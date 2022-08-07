@extends('layouts.admin.main')
@section('title', 'Section')
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
        <h1 class="h3 mb-0 text-gray-800">Section</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a> / Section</span>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th width="1%">Section</th>
                            <th>Isi</th>
                            <th>Gambar</th>
                            <th width="1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $sections as $data )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><?= $data['section']; ?></td>
                            <td>{{ Str::limit(strip_tags($data->body), 100, ' ...') }}</td>
                            @if ($data->image)
                            <td><img src="/img/section/<?= $data['image']; ?>" height="100px"></td></td>
                            <td><a href="/sections/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a></td>
                            @else
                            <td colspan="2" align="right"><a href="/sections/{{ $data->id }}/edit" class="btn btn-sm btn-success mb-1">Ubah</a></td>
                            @endif
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