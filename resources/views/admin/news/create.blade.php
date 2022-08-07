@extends('layouts.admin.main')
@section('title', 'Berita')
@section('container')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a> / Berita</span>
    </div>

    <div class="card">
        <form action="/news" method="post" enctype="multipart/form-data">
        @csrf

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="Judul" name="title" value="{{ old('title') }}">
                        @error('title') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="image">Gambar (.jpg/.jpeg/.png)</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" value="{{ old('image') }}">
                                <label class="custom-file-label" for="image">Pilih Gambar</label>
                            </div>
                        </div>
                        @error('image') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="body">Isi</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white">
                <a href="/news"><button type="button" class="btn btn-secondary col-2">Kembali</button></a>
                <button type="submit" class="btn btn-success col-2 float-right">Tambah</button>
            </div>

        </form>
    </div>

</div>

@endsection