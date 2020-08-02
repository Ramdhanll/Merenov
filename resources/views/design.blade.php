@extends('layouts.h')

@section('title', 'Membangun '. ucfirst($service))

@section('content')
    <section class="create-rumah m-auto p-4">
      <h2>Membuat {{ucfirst($service)}}</h2>
      <p>
        Membuat {{$service}} anda adalah kepuasan tersendiri bagi kami Mitra Merenov sebagai
        penyedia jasa bangun {{$service}} selalu memberikan solusi yang inovatif,
        silahkan isi form dibawah ini
      </p>
      <form action="{{ route('service.store')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="hidden" name="pelayanan" class="form-control text-dark @error('pelayanan') is-invalid @enderror" id="pelayanan" value=" {{ucfirst($value)}}">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control text-dark @error('alamat') is-invalid @enderror" id="alamat">
          @error('alamat')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="luas_bangunan">Luas Bangunan</label>
          <input type="text" name="luas_bangunan" class="form-control text-dark @error('luas_bangunan') is-invalid @enderror" id="luas_bangunan">
          <small class="text-white">*Masukan luas bangunan  yang hendak dibangun (luas bangunan saja, bukan luas tanah) jika bangunan lebih dari satu lantai jumlahkan luasnya (misal lantai dasar 100m2, lantai 2 50m2, masukan 150m2)</small>
          @error('luas_bangunan')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi"  class="form-control text-dark @error('deskripsi') is-invalid @enderror" id="deskripsi" cols="30" rows="10"></textarea>
          <small class="text-white">*Jelaskan sedetail mungkin kebutuhan anda, gaya bangunan, spesifikasi, bahan dan material yang anda inginkan, juga budget pembangunan anda</small>

          @error('deskripsi')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control text-dark @error('nama') is-invalid @enderror" id="nama">
          @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="no_telepon">No Telepon</label>
          <input type="text" name="no_telepon" class="form-control text-dark @error('no_telepon') is-invalid @enderror" id="no_telepon>">
          @error('no_telepon')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group ">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control text-dark @error('email') is-invalid @enderror" id="email">
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="jadwal_survey">Jadwal Survey</label>
          <input type="date" name="jadwal_survey" class="form-control text-dark @error('jadwal_survey') is-invalid @enderror" id="jadwal_survey">
          @error('jadwal_survey')
            <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <button class="btn btn-submit btn-primary px-4 mt-3 float-right">Submit</button>
      </form>
    </section>
@endsection    