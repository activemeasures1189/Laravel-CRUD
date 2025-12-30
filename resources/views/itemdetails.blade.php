

@extends('layouts.master')

@section('title')
  Item Details

@endsection

@section('content')
    @foreach ($data as $item)
        <p>Item details - {{ $item->name }}</p>
        <p>{{ $item->description }}</p>
    @endforeach

    <a href="{{ url('/menu') }}">Menu</a>
    <a href="/edit/{{ $item->id }}">Edit Item</a>
    <form method="POST" action="/menu/{{ $item->id }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Item"/>
    </form>
@endsection
