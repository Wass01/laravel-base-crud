@extends('layouts.app')

@section('main')

    <img src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <p>{{$comic->description}}</p>
    <h5>{{$comic->price}} - {{$comic->type}} - {{$comic->sale_date}}</h5>
    <a href="{{route('comics.edit',['comic' => $comic->id])}}">Edit</a>
    <a href="{{route('comics.index')}}">torna alla lista</a>
    <a href="/">torna home</a>
    <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
      @csrf
      @method('DELETE')
      <input class="delete" onclick="return confirm('sicuro di voler eliminare questo elemento')" type="submit" value="DELETE">
    </form>

@endsection
