@extends('layouts.main')

@section('body-class', 'bg-dark text-white')

@section('container')
<div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">

  <h1 class="text-center display-5 mb-5">All Blog Posts</h1>

  <h4 class="text-center text-teal mb-4">
    Total Postingan Saat Ini: {{ $total_posts }}
  </h4>

  <div class="row">

    @foreach ($posts as $post)
      
      <div class="col-md-4 mb-4">
        
        <div class="card h-100 bg-black text-white" style="border-radius: 15px; border: 1px solid #333;">
          
          <img src="{{ asset('img/' . $post->image) }}" 
               class="card-img-top" 
               alt="{{ $post->title }}" 
               style="height: 200px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="card-body d-flex flex-column">
            
            <h5 class="card-title text-teal">{{ $post->title }}</h5>
            
            <h6 class="card-subtitle mb-2 text-muted">
              Oleh: {{ $post->author }}
            </h6>
            
            <p class="card-text">
              {{ $post->body }}
            </p>
            
            <a href="#" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    @endforeach

  </div> </div>
@endsection