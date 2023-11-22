@extends('layouts.main')

@section('container')
    <div class="container mx-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="align-self-center" style="margin-bottom: 65px">
                    <h4><b>Sejarah Kelurahan Mangkubumi</b></h4>
                    <p style="text-align: justify; padding-right: 2rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt voluptates pariatur est ipsam! Distinctio nam aliquam aliquid. Lorem, ipsum dolor.</p>
                    
                    <button type="button" class="btn btn-primary w-40 rounded-pill">Selengkapnya...</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="align-self-center">
                    <img style="width: 600px; height:auto;" src="images/hall.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-white bg-primary" style="width: 1349px;">
        <br><br>
        <h4 class="text-light text-center"><b>Statistik Kelurahan</b></h4>
        <br>
        <div class="row" style="width: 100%">
            <div class="col-md-auto mx-auto">
                <img style="width: 25rem; height:18rem;" src="images/data1.png">
            </div>
            <div class="col-md-auto mx-auto">
                <img style="width: 25rem; height:18rem;" src="images/stats_job.png">
            </div>
        </div><br><br><br>
    </div>
    <br><br>
    <div class="container mx-3">
        <h4 class="garis"><b>Berita Terbaru</b></h4>
    <br><br>
    <div class="row">
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 20rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); border-radius: 20px;">
                <img src="images/berita6.jpg" style="border-top-left-radius: 20px; border-top-right-radius: 20px" class="card-img-top">
                <div class="card-body p-5">
                    <h5 class="card-title"><b>Berita 1</b></h5>
                    <p class="card-text"><small class="text-muted">Minggu, 19 Nov 2023</small></p>
                    <p style="text-align: justify; font-size: 14px" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a style="margin-left: 89px; margin-top: 10px; font-size:12px" href="#" class="btn btn-primary rounded-pill w-50">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 20rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); border-radius: 20px;">
                <img src="images/berita5.jpg" style="border-top-left-radius: 20px; border-top-right-radius: 20px" class="card-img-top">
                <div class="card-body p-5">
                    <h5 class="card-title"><b>Berita 2</b></h5>
                    <p class="card-text"><small class="text-muted">Senin, 20 Nov 2023</small></p>
                    <p style="text-align: justify; font-size: 14px" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a style="margin-left: 89px; margin-top: 10px; font-size:12px" href="#" class="btn btn-primary rounded-pill w-50">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 20rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); border-radius: 20px;">
                <img src="images/berita4.jpg" style="border-top-left-radius: 20px; border-top-right-radius: 20px" class="card-img-top">
                <div class="card-body p-5">
                    <h5 class="card-title"><b>Berita 3</b></h5>
                    <p class="card-text"><small class="text-muted">Selasa, 21 Nov 2023</small></p>
                    <p style="text-align: justify; font-size: 14px" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a style="margin-left: 89px; margin-top: 10px; font-size:12px" href="#" class="btn btn-primary rounded-pill w-50">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection