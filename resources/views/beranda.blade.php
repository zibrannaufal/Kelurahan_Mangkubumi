@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="align-self-center">
                    <h4>Sejarah Kelurahan Mangkubumi</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt voluptates pariatur est ipsam! Distinctio nam aliquam aliquid, beatae porro exercitationem sapiente? Odit sed exercitationem accusamus repellendus, adipisci cumque aperiam eius.</p>
                    <br>
                    <button class="btn btn-primary">Selengkapnya...</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="align-self-center">
                    <img style="width: 672px; height:504px;" src="images/hall.png" alt="">
                </div>
            </div>
        </div>
    </div>
        
    <nav class="navbar navbar-expand-lg navbar-light text-white bg-primary">
        <h4 class="text-light text-center">Statistik Kelurahan</h4>
        <div class="row justify-content-center bg-primary">
            <div class="col-md-6">
                <img style="width: 25rem; height:auto;" src="images/stats_job.png">
            </div>
            <div class="col-md-6">
                <img style="width: 25rem; height:auto;" src="images/stats_job.png">
            </div>
        </div>
    </nav>
    <br>
@endsection