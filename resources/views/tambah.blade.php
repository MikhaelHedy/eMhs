@extends('layouts.main')
@section('title','Mahasiswa')
@section('Content')
<div class="card mt-4">
    <div class="card-header">
        <div class="card-body">
        <form action="/mahasiswa/simpan" method="POST">
          @csrf
            <div class="form-group">
              <label>NIM</label>
              <input type="number" name="nim" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama"class="form-control">
            </div>

            <div class="form-group">
              <label></label>
              <input type="radio" name="gender" value="Pria"class="form-check-input">
              <label>Pria</label>
            </div>
            <div class="form-group">
              <label></label>
              <input type="radio" name="gender" value="Wanita" class="form-check-input">
              <label>Wanita</label>
            </div>
            
            <div class="form-group">
              <label>Prodi</label>
              <select name="prodi" class="form-control">
                <option value="0">--Pilih Program Studi--</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Biotek">Biotek</option>
                <option value="Sains Komputer">Sains Komputer</option>
              </select>
            </div>

            <label>Minat</label>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="AI"class="form-check-input">
              <label>Artificial Intelligence</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="Web"class="form-check-input">
              <label>Web Engineer</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="DBMS"class="form-check-input">
              <label>Data Scientist</label>
            </div>
            <div class="form-check">
              <label></label>
              <input type="checkbox" name="minat[]" value="Calo"class="form-check-input">
              <label>Penjual Tiket Coldplay</label>
            </div>

            <button type="submit" onclick="info()" class="btn btn-primary">Submit  <i class="bi bi-check2-circle"></i></button>
            <script>
              function info() {
                alert("Data berhasil ditambahkan!");
              }
              </script>
          </form>
        </div>
    </div>
</div>
@endsection