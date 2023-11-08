@extends('layouts.main')

@section('container')
    <p class="text-center mb-5" style="font-weight: bold; font-size:22px; text-align:center; margin-left: 200px">Berita Terbaru</p>
    @foreach ($berita as $post)
    <div class="container mx-3">
        <div class="card mb-5" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $post["image"] }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/berita/{{ $post["slug"] }}">{{ $post["title"] }}</a>
                        </h5>
                        <p class="card-text"><small class="text-muted">By: {{ $post["author"] }}</small></p>
                        <p class="card-text">{{ $post["body"] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection