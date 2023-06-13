@extends('layouts.main')
@section('title','Mahasiswa')
@section('Content')
<div class="container-fluid mt-4 rounded">
  <h1>Formulir Update Mahasiswa</h1>
  @php
      $minat = explode(',',$mahasiswa->minat);
  @endphp
  
  <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST" class = "pt-2 pb-2">
  @csrf
  @method('PUT')
  <div class="form-group w-25">
    <label>NIM</label>
    <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
  </div>

  <div class="form-group w-25">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
  </div>

  <div class="form-group w-25">
    <label></label>
    <input type="radio" name="gender" value="Pria"class="form-check-input" value="{{ $mahasiswa->gender == 'Pria' ? 'checked': ''}}">
    <label>Pria</label>
  </div>
  <div class="form-group w=25">
    <label></label>
    <input type="radio" name="gender" value="Pria"class="form-check-input" value="{{ $mahasiswa->gender == 'Wanita' ? 'checked': ''}}">
    <label>Wanita</label>
  </div>

  <div class="form-group w-25">
    <label>Prodi</label>
    <select name="prodi" class="form-control">
      <option value="0">--Pilih Program Studi--</option>
      <option value="Sistem Informasi" value="{{ $mahasiswa->prodi == 'Sistem Informasi' ? 'selected':'' }}">Sistem Informasi</option>
      <option value="Informatika" value="{{ $mahasiswa->prodi == 'Informatika' ? 'selected':'' }}">Informatika</option>
      <option value="Biotek" value="{{ $mahasiswa->prodi == 'Biotek' ? 'selected':'' }}">Biotek</option>
      <option value="Sains Komputer" value="{{ $mahasiswa->prodi == 'Sains Komputer' ? 'selected':'' }}">Sains Komputer</option>
    </select>
  </div>

  <label>Minat</label>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="AI" {{ in_array('ai',$minat) ? 'checked':'' }} 
              class="form-check-input">
              <label>Artificial Intelligence</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="Web" {{ in_array('web',$minat) ? 'checked':'' }} 
              class="form-check-input">
              <label>Web Engineer</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="DBMS" {{ in_array('dbms',$minat) ? 'checked':'' }} 
              class="form-check-input">
              <label>Data Scientist</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="Calo" {{ in_array('coldplay',$minat) ? 'checked':'' }} 
              class="form-check-input">
              <label>Penjual Tiket Coldplay</label>
            </div>
            <button type="submit" onclick="info()" class="btn btn-primary">Submit  <i class="bi bi-check2-circle"></i></button>
            <script>
              function info() {
                alert("Data berhasil diperbaharui!");
              }
              </script>
    </form>
</div>
@endsection