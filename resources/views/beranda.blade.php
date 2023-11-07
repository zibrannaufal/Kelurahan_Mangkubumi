@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="align-self-center">
                    <h4>Sejarah Kelurahan Mangkubumi</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt voluptates pariatur est ipsam! Distinctio nam aliquam aliquid. Lorem, ipsum dolor.</p>
                    <br>
                    <button class="btn btn-primary">Selengkapnya...</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="align-self-center">
                    <img style="width: 630px; height:auto;" src="images/hall.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-white bg-primary">
        <br>
        <h4 class="text-light text-center"><b>Statistik Kelurahan</b></h4>
        <br>
        <div class="row">
            <div class="col-md-auto mx-auto">
                <img style="width: 25rem; height:auto;" src="images/stats_job.png">
            </div>
            <div class="col-md-auto mx-auto">
                <img style="width: 25rem; height:auto;" src="images/stats_job.png">
            </div>
        </div>
    </div>
    <br><br>
    <h4><b>Berita Terbaru</b></h4>
    <br>
    <div class="row">
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 18rem;">
                <img src="images/berita6.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Berita 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 18rem;">
                <img src="images/berita5.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Berita 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya...</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mx-auto">
            <div class="card" style="width: 18rem;">
                <img src="images/berita4.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Berita 3</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus necessitatibus earum exercitationem.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div><br>
@endsection