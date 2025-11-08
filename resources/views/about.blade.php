@extends('layouts.main')

@section('body-class', 'bg-dark text-white')

@section('container')
<div class="container text-center" style="padding-top: 3rem; padding-bottom: 3rem;">
  
  <h1 class="mb-5 display-5">About Us</h1>

  <div class="row">
    
    <div class="col-md-6 mb-5 mb-md-0">
      
      <img src="{{ asset('img/' . $profile_luki['gambar']) }}" alt="{{ $profile_luki['nama'] }}" class="profile-img">
      
      <h2 class="h4 text-teal">{{ $profile_luki['role'] }}</h2>
      
      <h3 class="h5 mt-3">{{ $profile_luki['nama'] }} ({{ $profile_luki['nim'] }})</h3>
      
    </div>

    <div class="col-md-6">

      <img src="{{ asset('img/' . $profile_ghina['gambar']) }}" alt="{{ $profile_ghina['nama'] }}" class="profile-img">

      <h2 class="h4 text-teal">{{ $profile_ghina['role'] }}</h2>

      <h3 class="h5 mt-3">{{ $profile_ghina['nama'] }} ({{ $profile_ghina['nim'] }})</h3>
      
    </div>

  </div> </div>
@endsection