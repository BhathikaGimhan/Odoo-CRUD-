<!-- resources/views/product.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="default_code">Default Code:</label>
            <input type="text" name="default_code" id="default_code">
        </div>
        <div>
            <label for="list_price">List Price:</label>
            <input type="number" name="list_price" id="list_price" step="0.01">
        </div>
        <div>
            <label for="standard_price">Standard Price:</label>
            <input type="number" name="standard_price" id="standard_price" step="0.01">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
