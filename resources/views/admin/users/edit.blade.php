@extends('layouts.admin.main')
@section('title', 'Users')
@section('container')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Admin</h1>
        <span class="d-none d-sm-inline-block mr-1"><a href="/">Dashboard</a>
            / Admin</span>
    </div>

    <div class="card">
        <form action="/users/{{ $user->id }}" method="post">
        @method('put')
        @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" value="{{ old('nama', $user->name) }}">
                        @error('name') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-6"></div>

                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                        @error('email') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div>

                    {{-- <div class="form-group col-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password') <small class="form-text text-danger mt-0">{{ $message }}</small> @enderror
                    </div> --}}
                </div>
            </div>

            <div class="card-footer bg-white">
                <a href="/users"><button type="button" class="btn btn-secondary col-2">Kembali</button></a>
                <button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
            </div>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

@endsection