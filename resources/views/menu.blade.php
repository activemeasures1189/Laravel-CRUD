<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    {{-- <h1>Menu home page</h1>
    <p>You have arrived at Menu page.</p> --}}
    <ul>
    @foreach ($data as $item)
         <li><a href="item/{{ $item->id }}">{{ $item->name }}</a>  </li>
    @endforeach
</ul>
<p><a href="{{ url('/') }}">Home</a></p>
<p><a href="{{ url('/create') }}">Create New</a></p>

</body>
</html>
