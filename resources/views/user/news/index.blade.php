@extends('layouts.user.main')
@section('container')
<section id="berita">
    <div class="container mt-0 px-5 my-5">
        <h1 class="text-data">Berita</h1>
        <div class="row gx-5">
            <?php foreach( $news_data as $data ) : ?>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="/img/berita/<?= $data->image; ?>"
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
                                        <?= date('d-M-Y · h:i A', strtotime($data->created_at)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
@endsection