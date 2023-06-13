<div>
   @foreach($art as $a)
   <div class="card">
    <div class="card-header">
      <strong>Data Terbaru</strong>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $a->judul }}</h5>
      <p class="card-text">{{ $a->deskripsi }}</p>
      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
      <a href="/mahasiswa" class="btn btn-danger">Mahasiswa</a>
    </div>
  </div>
   @endforeach
</div>
