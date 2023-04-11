<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['list_price'] }}</td>

                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['list_price'] }}</td>
                    <td>{{ $product['default_code'] }}</td>
                    <td>{{ $product['type'] }}</td>
                    <td>{{ $product['standard_price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
