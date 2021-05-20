@extends('layouts.app')

@section('main')

    <img src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <p>{{$comic->description}}</p>
    <h5>{{$comic->price}} - {{$comic->type}} - {{$comic->sale_date}}</h5>
@endsection
