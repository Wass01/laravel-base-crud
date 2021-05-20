
@extends('layouts.app')

@section('main')
<a href="/">Home</a>
  @foreach($comics as $comic)
  <a href="{{route('comics.show', ['comic' => $comic->id])}}">
    <img src="{{$comic->thumb}}" alt="">
  </a>
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <p>{{$comic->description}}</p>
    <h5>{{$comic->price}} - {{$comic->type}} - {{$comic->sale_date}}</h5>
  @endforeach
@endsection
