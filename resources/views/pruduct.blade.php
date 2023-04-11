<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @if (is_array($product))
                    <h1>{{ $product['name'] }}</h1>
                    <p>{{ $product['description'] }}</p>
                    <p>{{ $product['list_price'] }}</p>
                    <p>{{ $product['default_code'] }}</p>
                    <p>{{ $product['type'] }}</p>
                    <p>{{ $product['standard_price'] }}</p>
                @endif
            @endforeach

        </tbody>
    </table>
</body>
</html>
