<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditItem</title>
</head>
<body>
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

</body>
</html>
