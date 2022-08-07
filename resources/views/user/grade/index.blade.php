@extends('layouts.user.main')

@section('container')

<section id="greats">
    <div class="container mb-5">
        <h1 class="text-data">Prestasi</h1>
        <div class="row section-item mt-4">
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
    </div>
</section>

@endsection