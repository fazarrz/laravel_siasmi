@extends('layouts.user.main')
@section('title', 'Home')
@section('container')
    
<section id="slider-area">
    <div id="slider-hero-nav"></div>
    <div class="owl-carousel" id="slider-hero">
        <div class="slider-item">
            <div class="slider-item-img">
                <img src="{{asset('img/section/wisuda.jpg')}}" class="img-fluid">
            </div>
            <div class="slider-item-content">
                <h1>Kampus STMIK Mardira Sudah Dibuka Kembali!!!!</h1>
                <p class="fs-small">STMIK Mardira Indonesia telah membuka pemenerimaan mahasiswa baru tahun 2022, Ayo segera daftarkan sekarang juga.</p>
                <a href="/daftar_mahasiswa" class="btn btn-new">DAFTAR SEKARANG</a>
            </div>
        </div>
        <div class="slider-item">
            <div class="slider-item-img">
                <img src="{{asset('img/section/wisuda.jpg')}}" class="img-fluid">
            </div>
            <div class="slider-item-content">
                <h1>Biaya Pendidikan Gratis!!!</h1>
                <p class="fs-small">Kami menyediakan layanan untuk orang semangat ingin belajar tapi memiliki ekonomi yang sangat terbatas.</p>
                <a href="/daftar_mahasiswa" class="btn btn-new">DAFTAR SEKARANG</a>
            </div>
        </div>
        <div class="slider-item">
            <div class="slider-item-img">
                <img src="{{asset('img/section/wisuda.jpg')}}" class="img-fluid">
            </div>
            <div class="slider-item-content">
                <h1>Jaminan Masuk Kerja!!!!</h1>
                <p class="fs-small">Kami telah bekerja sama dengan banyak industri agar mahasiswa bisa berkesempatan untuk bisa melanjutkan jenjang karirnya.</p>
                <a href="/daftar_mahasiswa" class="btn btn-new">DAFTAR SEKARANG</a>
            </div>
        </div>
    </div>
</section>
<section id="welcome">
    <div class="container">
        <h1>Profil STMIK Mardira Indonesia</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="video-wrapper">
                    <iframe src="{{asset('img/section/video.mp4')}}" width="560" height="310" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen 
                    ></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Sambutan Ketua Kampus</h3>
                <p>Program Studi Teknik Informatika Pada tahun 2020 Menjadi Program studi Teknik Informatika yang menghasilkan sumber daya manusia memiliki kompetensi dalam bidang Rekayasa Perangkat Lunak dan Sistem Informasi yang profesional.</p>
                <p>STMIK Mardira Indonesia Pada tahun 2020 Menjadi Perguruan Tinggi Yang Mampu Memberikan Kontribusi Dalam Pengembangan Bidang Teknologi Informatika di Jawa Barat Menyelenggarakan proses pembelajaran yang berkualitas di bidang teknologi informasi.Menyelenggarakan penelitian untuk membangun dan mengembangkan teknologi informasi sesuai dengan perkembangan teknologi global. Berperan aktif dalam kegiatan kemasyarakatan dalam memanfaatkan dan menerapkan teknologi informasi.Membangun jejaring kerjasama dengan dunia usaha dan industri serta berbagai institusi di bidang teknologi informasi</p>
                <a href="/profile/sejarah" class="btn btn-new">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
</section>

<section id="greats">
    <div class="container mb-5">
        <div class="section-title mt-5">
            <h2>Prestasi Terbaru</h2>
        </div>
        <div class="row section-item mt-5">
            <div class="col-md-6">
                <img src="{{asset('img/section/prestasi-1.jpeg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Juara 1 Python-Programming Goodness</h3>
                    <div class="section-item-meta">
                        <span><i class="fa-solid fa-calendar-alt"></i> 12 Januari 2022</span>
                    </div>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
        <div class="row section-item">
            <div class="col-md-6">
                <img src="{{asset('img/section/prestasi-2.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Juara 1 Jawa Barat dalam IOT Project Greates di Bandung</h3>
                    <div class="section-item-meta">
                        <span><i class="fa-solid fa-calendar-alt"></i> 20 Agustus 2022</span>
                    </div>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
        <div class="row section-item">
            <div class="col-md-6">
                <img src="{{asset('img/section/prestasi-3.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Juara 2 Desain Web Terbaik dalam Ajang Web Design Project TA</h3>
                    <div class="section-item-meta">
                        <span><i class="fa-solid fa-calendar-alt"></i> 29 Mei 2022</span>
                    </div>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>

        <div class="button-more">
            <a href="/prestasi" class="btn btn-more">Tampilkan lebih banyak</a>
        </div>
    </div>
</section>

<section class="py-1 bg-light" id="organisasiMahasiswa">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="text-data">Organisasi Mahasiswa</h2>
            <div class="mb-5"></div>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <?php foreach( $ukm as $data ) : ?>
            <div class="col mb-5 mb-5 mb-xl-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4"
                        src="/img/ukm/<?= $data->image; ?>" width="150px" height="150px" />
                    <h5 class="fw-bolder">
                        <?= $data->name; ?>
                    </h5>
                    <!-- <div class="fst-italic text-muted">Founder &amp; CEO</div> -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="button-more mt-5">
            <a href="/ukms" class="btn btn-more">Tampilkan lebih banyak</a>
        </div>
    </div>
</section>

<section id="dosen">
    <div class="container mb-5">
        <div class="section-title mt-5">
            <h2>Tenaga Pendidik</h2>
        </div> 
        <div class="section-body">
            <div id="slider-tools-1"></div>
            <div class="owl-carousel mt-5" id="dosen-pengajar">
                <div class="section-item-slider">
                    <img class="img-dosen" src="{{asset('img/section/dosen.jpg')}}">
                    <div class="section-caption">
                        <h5>Dr. Nadim S.pd</h5>
                        <h6>Dosen Bahasa Inggris</h6>
                    </div>
                </div>
                <div class="section-item-slider">
                    <img class="img-dosen" src="{{asset('img/section/dosen-1.jpg')}}">
                    <div class="section-caption">
                        <h5>Dr. Mark Zukerberg S.Kom</h5>
                        <h6>Dosen Struktur Data</h6>
                    </div>
                </div>
                <div class="section-item-slider">
                    <img class="img-dosen" src="{{asset('img/section/dosen-3.jpg')}}">
                    <div class="section-caption">
                        <h5>Dr. Elon Musk S.Kom</h5>
                        <h6>Dosen IOT</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-more mt-5">
            <a href="/profile/tenaga_pendidik" class="btn btn-more">Tampilkan lebih banyak</a>
        </div>
    </div>
</section>

<section id="grade">
    <div class="container">
        <div class="section-title">
            <h2>Profil Alumni</h2>
        </div> 
        <div class="section-body mt-5">
            <div id="slider-tools-2"></div>
            <div class="owl-carousel" id="grade-slider">
                <div class="section-item-slider">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset('img/section/alumni.jpg')}}" class="img-grade" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="section-item-content">
                                <h3>William Tanuwidjaya</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt autem quisquam corporis. In, unde voluptate. Nihil deleniti voluptate, odit eveniet provident officiis quaerat hic unde quidem consequuntur, quo aperiam dignissimos!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-item-slider">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset('img/section/alumni-2.jpg')}}" class="img-grade" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="section-item-content">
                                <h3>Achmad Dzaky</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt autem quisquam corporis. In, unde voluptate. Nihil deleniti voluptate, odit eveniet provident officiis quaerat hic unde quidem consequuntur, quo aperiam dignissimos!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dosen">
    <div class="container">
        <div class="section-title mt-5">
            <h2>Galeri</h2>
        </div> 
        <div class="section-body">
            <div id="slider-tools-3"></div>
            <div class="owl-carousel mt-5" id="galeri-slider">
                @foreach($galery as $g)
                <div class="section-item-slider">
                    <img class="img-dosen" src="{{asset('img/galeri/'.$g->image)}}">
                    <div class="section-caption">
                        <h5>{{$g->title}}</h5>
                        <h6>{{date('d M Y · h:i A', strtotime($g->created_at));}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="button-more mt-5">
                <a href="/galeri" class="btn btn-more">Tampilkan lebih banyak</a>
            </div>
        </div>
    </div>
</section>

<section class="py-2" id="berita">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="text-data mb-5">Berita</h2>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <?php foreach( $news as $data ) : ?>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="/img/berita/<?= $data['image']; ?>"
                        width="316px" height="184px" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a href="/berita/<?= $data['id']; ?>" class="text-decoration-none link-dark stretched-link">
                            <h5 class="card-title mb-3">
                                <?= $data['judul']; ?>
                            </h5>
                        </a>
                        <p class="card-text mb-0">
                            <?= Str::limit(strip_tags($data->body), 75, ' ...') ?>
                        </p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3"
                                    src="/SBAdmin/img/undraw_profile.svg" width="40px" />
                                <div class="small">
                                    <div class="fw-bold">Administrator</div>
                                    <div class="text-muted">
                                        <?= date('d-M-Y · h:i A', strtotime($data['created_at'])); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="button-more mt-5">
            <a href="/berita" class="btn btn-more">Tampilkan lebih banyak</a>
        </div>
    </div>
</section>



@endsection