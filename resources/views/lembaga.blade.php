@extends('layouts.main')

@section('container')
<div class="container mx-3">
    <h4 class="text-center"><b>Kata Sambutan</b></h4>
    <br>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card mb-5" style="max-width: 900px;">
            <div class="row g-0 m-3">
                <div class="col-md-3">
                    <img src="images/profil.png" class="img-fluid rounded-start" >
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur illo maiores soluta, sint minus quos quisquam repudiandae sed nesciunt, aliquam odio enim quae voluptatum mollitia, expedita ad excepturi ipsa iste fugit quas quis incidunt. Deserunt, nulla, laboriosam quaerat accusantium exercitationem quas aliquid quisquam culpa perferendis cumque voluptatem adipisci sapiente dolorum quis modi, magni commodi natus minus veniam iure voluptas voluptate aspernatur odit voluptatum. Ducimus, praesentium possimus ipsum sint corporis sit ullam adipisci repellendus. Fuga tempora eum ullam debitis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-white bg-primary" style="width: 1365px;">
    <br><br>
    <br>
    <div class="row" style="width: 100%">
        <div class="col-md-auto mx-auto">
            <img style="width: 40rem; height:auto;" src="images/struktur.png">
        </div>
    </div><br><br><br>
</div><br><br><br>
<div class="container mx-3">
    <h4 class="text-center"><b>Daftar Nama Pegawai</b></h4><br>
    <div class="d-flex justify-content-center align-items-center">
        <img src="images/pegawai.png">
    </div>
</div>
<br><br><br>
@endsection