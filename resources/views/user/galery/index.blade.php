@extends('layouts.user.main')
@section('title', 'Galery')
@section('container')

<section id="galeri">
    <div class="container">
        <h1 class="text-data">Galeri</h1>
        <div class="row">
            @foreach($galery as $a)
            <div class="col-sm-6 col-md-4 mb-3">
                <img src="/img/galeri/<?= $a->image?>" class="fluid img-thumbnail" width="600" height="400">      
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection