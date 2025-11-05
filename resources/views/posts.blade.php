@extends('layouts.main')

@section('container')
  <h1 class="mb-3">Halaman Postingan</h1>

  <h4>Total Postingan Saat Ini: {{ $total_posts }}</h4>
  <hr>

  @foreach ($posts as $post)
    <article class="mb-4">
        <h4>{{ $post["title"] }}</h4>
        <h6>Oleh: {{ $post["author"] }}</h6>
        <p>{{ $post["body"] }}</p>
    </article>
  @endforeach

@endsection