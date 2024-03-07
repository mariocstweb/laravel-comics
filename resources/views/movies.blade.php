@extends('layouts.main')

@section('main-content')
<div class="card-container">
  @foreach($movies as $movie)
  <div class="series-card">
    <img src="{{$movie['thumb']}}" alt="">
    <p>{{$movie['series']}}</p>
  </div>
  @endforeach
</div>
@endsection

<!-- <img src="{{$movie['thumb']}}" alt=""> -->