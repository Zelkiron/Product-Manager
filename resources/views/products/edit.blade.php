<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error) 
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method='post'>
        @csrf
        @method('put')
        <div>
            <label for='name'>Name</label>
            <input type='text' name='name' placeholder='Name of Product' value="{{$product->name}}" />
        </div>
        <div>
            <label for='quantity'>Quantity</label>
            <input type='text' name='quantity' placeholder='Quantity of Product' value='{{$product->quantity}}'/>
        </div>
        <div>
            <label for='price'>Price</label>
            <input type='text' name='price' placeholder='Price of Product' value='{{$product->price}}' />
        </div>
        <div>
            <label for='description'>description</label>
            <input type='text' name='description' placeholder='Description of Product' value='{{$product->description}}' />
        </div>
        <div>
            <input type='submit' name='submit' value='Update Product' />
        </div>
    </form>
</body>
</html>