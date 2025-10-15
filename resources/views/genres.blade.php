<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=i, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halooo</h1>
    <p>ini adalah web genre</p>

    @foreach ($genres as $item)
    <ul>
        <li>{{ $item['horror'] }}</li>
        <li>{{ $item['komedi'] }}</li>
        <li>{{ $item['romansa'] }}</li>
        <li>{{ $item['realistis'] }}</li>
    </ul>
    @endforeach
</body>
</html>