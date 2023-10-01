<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    All the products will be shown here. <a href='{{route('products.create')}}'>Create a Product</a>
    <div>
        @if(session()->has('success'))
        {{session('success')}}
        @endif
    </div>
    <div>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href='{{route('products.show', ['product' => $product])}}'>{{$product->name}}</a></td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td><a href='{{route('products.edit', ['product' => $product])}}'>Edit Product</a></td>
                <td>
                    <form method='post' action='{{route('products.destroy', ['product' => $product])}}'>
                        @csrf
                        @method('delete')
                        <input type='submit' value='Delete' />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>