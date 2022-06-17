<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/show2.css">

    <title>Document</title>
</head>
<body>
@foreach($cars as $car)
    <div class="cart-cars">
        <div class="">
            <img class="img" src="/image/{{ $car->image }}" alt="...">
        </div>
        <div class="cart-content">
            <p>{{ $car->model }}</p>
            <p>Price: {{ $car->price }}</p>
            <button class="button">Buy Now</button>
        </div>
    </div>
@endforeach
</body>
</html>
