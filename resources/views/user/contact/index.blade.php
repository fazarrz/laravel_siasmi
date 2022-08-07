@extends('layouts.user.main')

@section('container')

<div class="container">
    <h1 class="text-data">Kontak</h1>
    <div class="text-center">
        <h3 class="fs-3 mt-2">Ada yang bisa kami bantu??</h3>
        <p class="lead">Silahkan isi form dibawah ini ya</p>
    </div>
    <div class=" d-flex align-items-center justify-content-center">
        <div class="bg-white col-md-8">
            <div class="p-4 rounded shadow-md">
                <div>
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama kamu" required>
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email kamu" required>
                </div class="mt-3">
                <div class="mt-3">
                    <label for="subject" class="form-label">Subjek</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
                </div>
                <div class="mt-3 mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea name="message" cols="20" rows="6" class="form-control"
                        placeholder="Pesan"></textarea>
                </div>
                <button class="btn btn-new">
                    Kirim
                </button>
            </div>
        </div>
    </div>
    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5 text-center">
        <div class="col text-center">
            <span class="fs-2"><i class="fa-solid fa-location-dot"></i></span>
            <div class="h5">Alamat</div>
            <p class="text-muted mb-0">
                <?= $section[4]['body']; ?>
            </p>
        </div>
        <div class="col text-center">
            <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
            <div class="h5">Telepon</div>
            <p class="text-muted mb-0">
                <?= $section[5]['body']; ?>
            </p>
        </div>
        <div class="col text-center">
            <span class="fs-2"><i class="fa-solid fa-envelope"></i></span>
            <div class="h5">Email</div>
            <p class="text-muted mb-0">
                <?= $section[6]['body']; ?>
            </p>
        </div>
        <div class="col text-center">
            <span class="fs-2"><i class="fa-brands fa-whatsapp"></i></span>
            <div class="h5">Whatsapp</div>
            <p class="text-muted mb-0">
                <?= $section[7]['body']; ?>
            </p>
        </div>
    </div>
</div>

@endsection