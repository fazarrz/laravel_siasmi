@extends('layouts.admin.main')
@section('title', 'Galery')
@section('container')
    
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Galeri</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a> / Galeri</span>
    </div>

    <div class="card">
        <form action="/galeries" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="title" value="{{ old('title') }}">
                    @error('title') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                </div>

                <div class="form-group col-6">
                    <label for="gambar">Gambar (.jpg/.jpeg/.png)</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="image" required>
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                        </div>
                    </div>
                    @error('record') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                </div>
            </div>
        </div>

        <div class="card-footer bg-white">
            <a href="/galeries"><button type="button" class="btn btn-secondary col-2">Kembali</button></a>
            <button type="submit" class="btn btn-success col-2 float-right">Tambah</button>
        </div>
        </form>
    </div>

</div>

@endsection