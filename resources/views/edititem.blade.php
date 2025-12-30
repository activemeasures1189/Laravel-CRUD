

@extends('layouts.master')

@section('title')
    Edit Item
@endsection

@section('content')
     @foreach ($data as $item)
    <form method="POST" action="/item/{{$item->id}}">
        @csrf
  <label for="name">Item Name:</label><br>
  <input type="text" name="name" value="{{ $item->name }}"><br>
  <label for="description">Description:</label><br>
  <input type="text" name="description" value="{{ $item->description }}"><br><br>
  <input type="submit" value="Edit">
</form>
    @endforeach
@endsection
