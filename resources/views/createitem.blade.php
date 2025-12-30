

@extends('layouts.master')


@section('title')
  Create Item
@endsection

@section('content')
<div>
        <form method="POST" action="/menu">
            @csrf
            <label for="name">Item name:</label><br>
            <input type="text" name="name"><br>
            <label for="description">Description:</label><br>
            <input type="text" name="description"><br>
            <input type="submit" value="Create">

        </form>


    </div>

@endsection
