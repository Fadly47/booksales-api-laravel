<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=i, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halooo</h1>
    <p>ini adalah web author</p>

    @foreach ($authors as $item)
    <ul>
        <li>{{ $item['a'] }}</li>
        <li>{{ $item['b'] }}</li>
        <li>{{ $item['c'] }}</li>
        <li>{{ $item['d'] }}</li>
    </ul>
    @endforeach
</body>
</html>