<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create Product</h1>
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
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label>qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label>price</label>
            <input type="int" name="price" placeholder="price">
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="Save New Product">
        </div>
    </form>
</body>

</html>