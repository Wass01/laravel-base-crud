@extends('layouts.app')

@section('main')
  <form class="" action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" value="" placeholder="title">
    <input type="text" name="description" value="" placeholder="description">
    <input type="text" name="thumb" value="" placeholder="thumb">
    <input type="number" name="price" value="" placeholder="price">
    <input type="text" name="series" value="" placeholder="series">
    <input type="date" name="sale_date" value="" placeholder="sale_date">
    <input type="text" name="type" value="" placeholder="type">
    <input type="submit" name="create" value="Create">
  </form>
@endsection
