@extends('layouts.user.main')
@section('title', 'Galery')
@section('container')

<section class="mt-0" id="organisasiMahasiswa">
    <div class="container px-5 my-3">
        <h2 class="text-data mt-0 mb-5">Organisasi Mahasiswa</h2>
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
    </div>
</section>

@endsection