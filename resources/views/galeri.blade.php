@extends('layouts.main')

@section('container')
    <div class="container mx-3">
      <p class="text-center mb-4 garis" style="font-size: 25px; font-weight: bold;">Galeri</p>
        <div class="row mb-2">
          <div class="col">
            <a href="#gambar-1">
              <img src="images/UMKM.jpeg" class="img-fluid" alt="Kegiatan UMKM">
            </a>
              <p style="font-size: 15px" class="text-center">Kegiatan UMKM</p>
              <div class="overlay" id="gambar-1">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/UMKM.jpeg" alt="Kegiatan UMKM">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-2">
              <img src="images/Posyandu.jpeg" class="img-fluid" alt="Kegiatan Posyandu">
            </a>
              <p style="font-size: 15px" class="text-center">Kegiatan Posyandu</p>
              <div class="overlay" id="gambar-2">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/Posyandu.jpeg" alt="Kegiatan Posyandu">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-3">
              <img src="images/AC.jpeg" class="img-fluid" alt="Pelatihan Service AC">
            </a>
              <p style="font-size: 15px" class="text-center">Pelatihan Service AC</p>
              <div class="overlay" id="gambar-3">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/AC.jpeg" alt="Pelatihan Service AC">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-4">
              <img src="images/Dagangan.jpeg" class="img-fluid" alt="Kegiatan Kerja Bakti Kecamatan">
            </a>
              <p style="font-size: 15px" class="text-center">Kegiatan Kerja Bakti Kecamatan</p>
              <div class="overlay" id="gambar-4">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/Dagangan.jpeg" alt="Kegiatan Kerja Bakti Kecamatan">
              </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col">
            <a href="#gambar-5">
              <img src="images/Kegiatan Kebersihan.jpeg" class="img-fluid" alt=">Kegiatan Kebersihan">
            </a>
              <p style="font-size: 15px" class="text-center">>Kegiatan Kebersihan</p>
              <div class="overlay" id="gambar-5">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/Kegiatan Kebersihan.jpeg" alt=">Kegiatan Kebersihan">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-6">
              <img src="images/Dagangan.jpeg" class="img-fluid" alt="Usaha Memajukan Dagangan Masyarakat">
            </a>
              <p style="font-size: 15px" class="text-center">Usaha Memajukan Dagangan Masyarakat</p>
              <div class="overlay" id="gambar-6">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/Dagangan.jpeg" alt="Usaha Memajukan Dagangan Masyarakat">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-7">
              <img src="images/Badan Bayi.jpeg" class="img-fluid" alt="Penimbangan Berat Badan Bayi">
            </a>
              <p style="font-size: 15px" class="text-center">Penimbangan Berat Badan Bayi</p>
              <div class="overlay" id="gambar-7">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/Badan Bayi.jpeg" alt="Penimbangan Berat Badan Bayi">
              </div>
          </div>
          <div class="col">
            <a href="#gambar-8">
              <img src="images/UMKM.jpeg" class="img-fluid" alt="Semarak Lomba 17 Agustus">
            </a>
              <p style="font-size: 15px" class="text-center">Semarak Lomba 17 Agustus</p>
              <div class="overlay" id="gambar-8">
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                <img src="images/UMKM.jpeg" alt="Semarak Lomba 17 Agustus">
              </div>
          </div>
        </div>
      </div>
@endsection