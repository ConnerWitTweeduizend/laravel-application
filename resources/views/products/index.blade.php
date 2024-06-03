<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    table tr:hover {
        background-color: #f2f2f2;
    }
</style>

<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <table>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Price €
                </th>
                <th>
                    Description
                </th>
                <th>

                </th>
                <th>

                </th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    {{$product->qty}}
                </td>
                <td>
                    {{$product->price}}
                </td>
                <td>
                    {{$product->description}}
                </td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>