@extends('layouts.main')

@section('main-content')
<section id="comics-books">
  <div class="comics-container">
    <div class="info">
      <h1>{{$movie['title']}}</h1>
      <div class="price">
        <div class="price-left">
          <span>U.S. PRICE {{$movie['price']}}</span>
          <span>AVAILABLE</span>
        </div>
        <div class="price-right">
          <span>Check Availability</span>
        </div>
      </div>
      <p>{{$movie['description']}}</p>
    </div>
    <div class="banner">
      <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
    </div>
  </div>
</section>
@endsection