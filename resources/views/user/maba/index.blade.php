@extends('layouts.user.main')

@section('container')

<section id="maba">
    <div class="container">
        <div class="p-5 text-center bg-light">
            <h1 class="mb-3">Selamat Datang Calon Mahasiswa</h1>
            <p class="mb-3">Jika kalian mau daftar mahasiswa di STMIK Mardira ikuti arahan dibawah ini ya</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="led">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero culpa nisi earum eum maiores ipsam voluptas possimus, magni nulla sunt error similique esse est molestiae nam laboriosam natus alias delectus?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nostrum tempora quos eum odio nemo in accusantium odit! Est nulla quis reiciendis necessitatibus maxime iusto itaque consequuntur cupiditate perspiciatis rerum.</p>
            </div>
            <div class="image-maba mt-5 text-center">
                <img src="{{'img/section/Capture.png'}}" class="img-fluid">
            </div>
            <div class="text-center mt-5">
                <h3 class="fs-3 mt-2">Form Pendaftaran Awal</h3>
                <p class="lead">Silahkan isi form dibawah ini, lalu cetak hasil pendaftaran awal ini.</p>
            </div>
            <div class=" d-flex align-items-center justify-content-center">
                <div class="bg-white col-md-8">
                    <div class="p-4 rounded shadow-md">
                        <div>
                            <label for="name" class="form-label">NISN</label>
                            <input type="text" name="name" class="form-control" placeholder="NISN" required>
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mt-3">
                            <label for="subject" class="form-label">Asal Sekolah</label>
                            <input type="text" name="subject" class="form-control" placeholder="Sekolah Asal" required>
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="name" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="message" class="form-label">Alamat</label>
                            <textarea name="message" cols="20" rows="6" class="form-control"
                                placeholder="Alamat"></textarea>
                        </div>
                        <button class="btn btn-new">
                            Kirim
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection