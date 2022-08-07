@extends('layouts.user.main')

@section('container')


<div class="container mt-2">
    <h1 class="text-data mb-4">Tenaga Pendidik</h1>
    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-0"><img src="{{asset('img/section/dosen.jpg')}}" alt="" class="w-100 card-img-top">
              <div class="p-4 text-center">
                <h5 class="text-dosen mb-0">Dr. Nadim S.pd</h5>
                <p class="text-dosen-p">Dosen Bahasa Inggris</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card shadow-sm border-0 rounded">
              <div class="card-body p-0"><img src="{{asset('img/section/ois.jpg')}}" alt="" class="w-100 card-img-top">
                <div class="p-4 text-center">
                  <h5 class="text-dosen mb-0">Dr. Albert Enstein</h5>
                  <p class="text-dosen-p">Dosen Matematika</p>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card shadow-sm border-0 rounded">
              <div class="card-body p-0"><img src="{{asset('img/section/dosen-1.jpg')}}" alt="" class="w-100 card-img-top">
                <div class="p-4 text-center">
                  <h5 class="text-dosen mb-0">Dr. Mark S.Kom</h5>
                  <p class="text-dosen-p">Dosen Struktur Data</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card shadow-sm border-0 rounded">
              <div class="card-body p-0"><img src="{{asset('img/section/dosen-3.jpg')}}" alt="" class="w-100 card-img-top">
                <div class="p-4 text-center">
                  <h5 class="text-dosen mb-0">Dr. Elon Musk S.Kom</h5>
                  <p class="text-dosen-p">Dosen IOT</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection