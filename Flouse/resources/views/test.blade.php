<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($carts as $cart)
        <h1>{{ $cart->cart_id }}</h1>
        @foreach ($cart->product as $product)
            {{ $product->name }}
        @endforeach
        <hr>
    @endforeach
</body>
</html>