<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>


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
</body>
</html>
