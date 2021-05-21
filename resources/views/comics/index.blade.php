
@extends('layouts.app')

@section('main')
<a href="/">Home</a>
  <div class="card">
  @foreach($comics as $comic)
    <div class="card-child">
      <a href="{{route('comics.show', ['comic' => $comic->id])}}">
        <img src="{{$comic->thumb}}" alt="">
      </a>
      <h1>{{$comic->title}}</h1>
      <h2>{{$comic->series}}</h2>
      <p>{{$comic->description}}</p>
      <h5>{{$comic->price}} - {{$comic->type}} - {{$comic->sale_date}}</h5>
    </div>
  @endforeach
  </div>

  <a href="{{route('comics.create')}}">crea nuovo comic</a>

@endsection
