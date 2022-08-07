@extends('layouts.user.main')

@section('container')

<section id="greats">
    <div class="container">
        <div class="section-title">
            <h1>Jurusan</h1>
        </div>
        <div class="row section-item mt-5">
            <div class="col-md-6">
                <img src="{{asset('img/section/jurusan-2.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Teknik Informatika</h3>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
        <div class="row section-item">
            <div class="col-md-6">
                <img src="{{asset('img/section/jurusan-1.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Manajemen Informatika</h3>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
        <div class="row section-item">
            <div class="col-md-6">
                <img src="{{asset('img/section/jurusan-3.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Sistem Informasi</h3>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
        <div class="row section-item">
            <div class="col-md-6">
                <img src="{{asset('img/section/jurusan-4.jpg')}}" class="section-item-thumbnail">
            </div>
            <div class="col-md-6 col-item-right">
                <div class="section-item-title">
                    <h3>Komputerisasi Akuntansi</h3>
                </div>
                <div class="section-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti maxime ratione doloribus, amet, cumque illum voluptatum voluptatibus, autem placeat eligendi velit fuga magnam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection