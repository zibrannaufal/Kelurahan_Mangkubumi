@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h6>By: {{ $post["author"] }}</h6>
    <p>{{ $post["body"] }}</p>
</article>

<a href="/berita">Kembali</a>
@endsection