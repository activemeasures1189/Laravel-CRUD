

@extends('layouts.master')

@section('title')
    Menu
@endsection

@section('content')
      <ul>
    @foreach ($data as $item)
         <li><a href="item/{{ $item->id }}">{{ $item->name }}</a>  </li>
    @endforeach
</ul>
<p><a href="{{ url('/') }}">Home</a></p>
<p><a href="{{ url('/create') }}">Create New</a></p>
@endsection
