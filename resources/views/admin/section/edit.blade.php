@extends('layouts.admin.main')
@section('title', 'section')
@section('container')
    
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Section
            <?= $section['section']; ?>
        </h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/dashboard">Dashboard</a> / Section</span>
    </div>

    <div class="card">
        <form action="/sections/{{ $section->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="row">

                    <?php if( $section['id'] >= 5 ) : ?>
                    <div class="form-group col-6">
                        <label for="isi">Isi</label>
                        <input type="text" class="form-control" id="isi" name="body" value="{{ old('body', $section->body) }}">
                        @error('body') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>
                    <?php else : ?>
                    <div class="form-group col-6">
                        <label for="gambar">Gambar (.jpg/.jpeg/.png)</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="image">
                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            </div>
                        </div>
                        @error('image') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="body" class="form-label">Isi</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $section->body) }}" required>
                        <trix-editor input="body"></trix-editor>
                        @error('body') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="card-footer bg-white">
                <a href="/sections"><button type="button" class="btn btn-secondary col-2">Kembali</button></a>
                <button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
            </div>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

@endsection