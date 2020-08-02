@extends('layouts.admin')

@section('content')
<div class="container mt-3">
  <h2>Detail</h2>
<table class="table table-borderless table-dark" style="width:400px; padding:20px">
    <tr>
      <td width="180px" class="font-weight-bold">Pelayanan</td>
      <td>{{ $service->pelayanan }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">Nama</td>
      <td>{{ $service->nama }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">No Telepon</td>
      <td>{{ $service->no_telepon }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">Email</td>
      <td>{{ $service->email }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">alamat</td>
      <td>{{ $service->alamat }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">Luas Bangunan</td>
      <td>{{ $service->luas_bangunan }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">Deskripsi</td>
      <td>{{ $service->deskripsi }}</td>
    </tr>
    <tr>
      <td width="180px" class="font-weight-bold">Jadwal Survey</td>
      <td>{{ $service->jadwal_survey }}</td>
    </tr>
</table>
</div>
@endsection