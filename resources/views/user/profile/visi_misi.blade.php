@extends('layouts.user.main')

@section('container')
<section id="visi">
    <div class="container">
        <h1>Visi dan Misi</h1>
        <div class="col-md-12">
            <h3>Visi</h3>
            <div class="text-visi">
                <p class="lead fw-normal text-muted mb-0">
                    <?= $visi->body; ?>
                </p>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Misi</h3>
            <div class="text-visi">
                <p class="lead fw-normal text-muted mb-0">
                    <?= $misi->body; ?>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection