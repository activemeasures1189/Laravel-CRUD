<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New</title>
</head>
<body>
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
</body>
</html>
