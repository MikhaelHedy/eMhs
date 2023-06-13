@extends('layouts.main')
@section('title','Mahasiswa')
@section('Content')
<h1>Formulir Data Mahasiswa</h1>
<div class="card mt-4">
  
    <div class = "card-header">
      
      <a href="/mahasiswa/tambah" class="btn btn-success" role="button">Add  <i class="bi bi-person-fill-add"></i></a>
        <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name=q class="form-control mr-sm-2" type="search" placeholder="Cari berdasar nama" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search <i class="bi bi-search"></i> </button>
          </form>
    </div>
    <div class='card-body'> 
      @if(session('flash'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ (session('flash')) }}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Prodi</th>
      <th scope="col">Minat</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($mhs as $idx => $data)
    <tr>
      <th scope="row">{{$mhs->firstItem() + $idx}}</th>
      <td>{{$data -> nim}}</td>
      <td>{{$data -> nama}}</td>
      <td>{{$data -> gender}}</td>
      <td>{{$data -> prodi}}</td>
      <td>{{$data -> minat}}</td>
      <td>
          <a href="/mahasiswa/edit/{{ $data->id }}" class="btn btn-outline-primary" role="button">Ubah  <i class="bi bi-pencil-square"></i></i></a>
          <a href="/mahasiswa/delete/{{$data->id}}" onclick="confirm()" class="btn btn-outline-danger" role="button">Hapus  <i class="bi bi-trash-fill"></i></i></a>
          <script>
            function info() {
              alert("Data berhasil dihapus!");
            }
            </script>
      </td>
    </tr>
    
        @endforeach
  </tbody>
</table>
    <span>Jumlah data halaman : {{$mhs->count()}}</span>
    <p><span>Jumlah data total : {{$mhs->total()}}</span></p> 
    <span class="float-right">{{$mhs->links()}}</span>
</div>
</div>
@endsection