<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STMIK Mardira Indonesia</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    </head>
    <body>
        
        <section id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="top-contact">
                            <li><a href="#"><i class="fa-solid fa-phone"></i>+021 332 245 220</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope"></i>stmik-mi@ac.id</a></li>
                            <li><a href="#"><i class="fa-solid fa-bullhorn"></i>Penerimaan mahasiswa baru dibuka!!</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="sosmed">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <nav class="navbar navbar-expand-lg bg-new">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('img/section/mardira.jpg')}}" alt="" width="40" height="45">
                      </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/profile/sejarah">Tentang STMIK</a></li>
                                    <li><a class="dropdown-item" href="/profile/visi_misi">Visi & Misi</a></li>
                                    <li><a class="dropdown-item" href="/profile/tenaga_pendidik">Tenaga Pendidik</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/prestasi">Prestasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kampus
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/jurusan">Jurusan</a></li>
                                    <li><a class="dropdown-item" href="/ukms">Unit Kemahasiswaan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/berita">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kontak">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/daftar_mahasiswa">Daftar Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        {{-- container --}}
        @yield('container')
    <!-- Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-col">
                        <div class="brand mb-3">
                            <h1>STMIK Mardira Indonesia</h1>
                        </div>
                        <p class="about">Program Studi Teknik Informatika Pada tahun 2020 Menjadi Program studi Teknik Informatika yang menghasilkan sumber daya manusia memiliki kompetensi dalam bidang Rekayasa Perangkat Lunak dan Sistem Informasi yang profesional</p>
                        <ul class="sosmed-footer">
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Kontak Kami</h2>
                        <p class="address">Silahkan jika ada pertanyaan atau informasi lebih lanjut hub dibawah ini ya.</p>
                        <ul class="kontak">
                            <li><i class="fa-solid fa-phone"></i> Telp/Fax : 0234-4456-123</li>
                            <li><i class="fa-solid fa-envelope"></i> Email : stmik-mi@ac.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Navigasi</h2>
                        <ul class="navigation">
                            <li><a href="/profile/sejarah">Tentang STMIK</a></li>
                            <li><a href="/profile/visi_misi">Visi & Misi</a></li>
                            <li><a href="/jurusan">Jurusan</a></li>
                            <li><a href="/daftar_mahasiswa">Pendaftaran Mahasiswa Baru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <h6>Hak Cipta dilindungi @ 2022 STMIK Mardira Indonesia</h6>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="/Startbootstrap/js/scripts.js"></script>
    <script src="/js/script.js"></script>