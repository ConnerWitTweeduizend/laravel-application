<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
            <label>qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}">
        </div>
        <div>
            <label>price</label>
            <input type="int" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>
</body>

</html>