@extends('layouts.main')

@section('container')
    <div class="container mx-3">
      <p class="text-center mb-4 garis" style="font-size: 25px; font-weight: bold;">Galeri</p>
        <div class="row mb-5">
          <div class="col">
            <img src="images/UMKM.jpeg" class="img-fluid" alt="">
            <p class="text-center">Kegiatan UMKM</p>
          </div>
          <div class="col">
            <img src="images/Posyandu.jpeg" class="img-fluid" alt="">
            <p class="text-center">Kegiatan Posyandu</p>
          </div>
          <div class="col">
            <img src="images/AC.jpeg" class="img-fluid" alt="">
            <p class="text-center">Pelatihan Service AC</p>
          </div>
        </div>
        <div class="row mb-5">
            <div class="col">
              <img src="images/Badan Bayi.jpeg" class="img-fluid" alt="">
              <p class="text-center">Penimbangan Berat Badan Bayi</p>
            </div>
            <div class="col">
              <img src="images/Kegiatan Kebersihan.jpeg" class="img-fluid" alt="">
              <p class="text-center">Kegiatan Kebersihan</p>
            </div>
            <div class="col">
              <img src="images/Dagangan.jpeg" class="img-fluid" alt="">
              <p class="text-center">Usaha Memajukan Dagangan Masyarakat</p>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col">
              <img src="images/Dagangan.jpeg" class="img-fluid" alt="">
              <p class="text-center">Kegiatan Kerja Bakti Kecamatan</p>
            </div>
            <div class="col">
              <img src="images/UMKM.jpeg" class="img-fluid" alt="">
              <p class="text-center">Semarak Lomba 17 Agustus</p>
            </div>
            <div class="col">
              <img src="images/AC.jpeg" class="img-fluid" alt="">
              <p class="text-center">Sosialisasi Masyarakat Mengenai Stunting</p>
            </div>
          </div>
      </div>
@endsection