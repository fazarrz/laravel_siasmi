@extends('layouts.user.main')

@section('container')
<section id="history">
    <div class="container mt-0">
        <h1>Tentang STMIK Mardira Indonesia</h1>
        <div class="text-center">
            <img src="{{asset('img/section/'.$history->image)}}" class="img-thumbnail">
        </div>
        <div class="history-content">
            <h1 class="text-center mt-0">STMIK Mardira Indonesia</h1>
            <p class="lead text-muted mb-0">
                <?= $history->body; ?>
            </p>
            
        </div>
    </div>
</section>
@endsection