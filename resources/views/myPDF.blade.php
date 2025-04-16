<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>

    <link rel="stylesheet" href="{{ public_path('css/bootstrap-5.3.5-dist/css/bootstrap.min.css') }}">

    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>

   <table>
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
             <td><img src="{{ public_path('storage/uploads/' . $product->image) }}" alt="{{ $product->name }}" width="80"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
