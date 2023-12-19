<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales History</title>
</head>
<body>
    <h1>Sales History</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sold At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->name }}</td>
                    <td>${{ $sale->price }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->sold_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
