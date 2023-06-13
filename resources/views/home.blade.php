@extends('layouts.main')
@section('tittle','Home')
@section('Content')
<div class="jumbotron">
    <h1 class="display-4">Hello, manusia gabut!</h1>
    <p class="lead">Halaman ini membantu untuk mengambil dokumentasi dari Laravel</p>
    <hr class="my-4">
    <p>Link Dokumentasi Laravel</p>
    <p class="lead">
      <a class="btn btn-outline-primary btn-lg" href="https://www.laravel.com/" role="button">Laravel  <i class="bi bi-view-list"></i></a>
      <a class="btn btn-outline-info btn-lg" href="/index" role="button">Index  <i class="bi bi-view-list"></i></a>
      {{-- <a class="btn btn-outline-danger btn-lg" href="/logout" role="button">Log out<i class="bi bi-view-list"></i></a> --}}
    </p>
  </div>
@endsection
    
