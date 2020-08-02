@extends('layouts.h')

@section('title', 'Home')

@section('content')
    <header>
      <h1>Renove Rumah Menjadi Indah</h1>
      <p>
        We Build Your Dreams
      </p>
      <a href="#gallery" class="btn btn-primary py-2 px-4">Lihat Design</a>
    </header>
    <div class="container">
      <section id="about" class="section-about">
        <h3 class="title-about text-left mt-4 mb-5">Tentang Merenov</h3>
        <div class="row">
          <div class="col-md-6">
            <p class="text-justify">
              Pesatnya pertumbuhan hunian setiap tahunnya membuat pentingnya peran Jasa Kontraktor Rumah. Yaitu Jasa Kontraktor Rumah Profesional yang bisa memberi solusi, bukan hanya dapat membangun rumah atau merenovasi rumah, tetapi juga memberi solusi lain seperti kredit KPR dan kemudahan lainnya. 
              <br>
              Merenov hadir untuk membantu seseorang membangun rumah impianya yang :
              
            </p>
          </div>
          <div class="col-md-6">
            <ul>
              <li>Tidak punya referensi Arsitek atau design rumah yang kompeten</li>
              <li>Tidak Mengerti penghitungan RAB dalam membangun rumah</li>
              <li>Sibuk bekerja sehingga tidak memonitor pekerjaan rumah</li>
              <li>Jauh antara lokasi yang akan dibangun dengan tempat tinggal saat ini</li>
            </ul>
          </div>
        </div>
      </section>
      <section id="service" class="section-service">
        <h3 class="title-service text-left mt-4 mb-5">Services</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/services/hammer.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="/service/rumah" class="card-title badge badge-primary py-2 px-4 text-white font-weight-normal">Membangun Rumah</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/services/hotel.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="/service/kostan" class="card-title badge badge-primary py-2 px-4 text-white font-weight-normal">Membangun Kost-kostan</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/services/pen.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="/service/design" class="card-title badge badge-primary py-2 px-4 text-white font-weight-normal">Membuat Design</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="partners" class="section-partners">
        <h3 class="title-partners text-left mt-5 mb-5">Partners</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/partners/toto.png')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/partners/american-standart.png')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/partners/jotun.png')}}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </section>
      <section id="gallery" class="section-gallery">
        <h3 class="title-gallery text-left mt-5 mb-5">Gallery</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/1.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/2.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/3.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/4.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/5.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('/images/gallery/6.jpg')}}" class="card-img-top" alt="...">
            </div>
          </div>
          </div>
        </div>
      </section>
    </div>
@endsection