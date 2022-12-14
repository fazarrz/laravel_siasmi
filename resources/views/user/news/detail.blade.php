@extends('layouts.user.main')
@section('title', 'News')
@section('container')

<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-3">
                <div class="d-flex align-items-center mt-lg-5 mb-4">
                    <img class="img-fluid rounded-circle" src="/SBAdmin/img/undraw_profile.svg"
                        width="50px" />
                    <div class="ms-3">
                        <div class="fw-bold">Administrator</div>
                        <div class="text-muted">
                            <?= date('d M Y', strtotime($news['created_at'])); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">
                            <?= $news['title']; ?>
                        </h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">
                            <?= date('d M Y · h:i A', strtotime($news['created_at'])); ?>
                        </div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">News</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded"
                            src="/img/berita/{{ $news->image }}" width="900px" />
                    </figure>
                    <!-- Post content-->
                    <section class="mb-5 fs-5">
                        <?= $news['body']; ?>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection