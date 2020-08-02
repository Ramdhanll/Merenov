@extends('layouts.admin')

@section('content')
  <div class="container mt-3">
    <h2>Data Pelayanan Customer</h2>
    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pelayanan</th>
          <th scope="col">Nama</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Jadwal Survey</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($services as $service)
        <tr>
          <td>{{$loop->index + 1}}</td>
          <td>{{ $service->pelayanan }}</td>
          <td>{{ $service->nama }}</td>
          <td>{{ $service->no_telepon }}</td>
          <td>{{ $service->jadwal_survey }}</td>
          <td style="display:flex;">
            <a href="{{route('service.show', $service->id)}}" class="btn btn-primary mr-2">Detail</a>
            <form action="{{route('service.destroy', $service->id)}}" method="post">
              @csrf
              @method('delete')
              {{-- <a href="/service/{{$service->id}}" class="badge badge-danger">Delete</a> --}}
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center">Data Masih Kosong</td>
        </tr>
        @endforelse
        
      </tbody>
    </table>
  </div>
@endsection