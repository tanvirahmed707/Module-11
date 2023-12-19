<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <div>
        <h2>Sales Figures</h2>
        <div>
            <strong>Today:</strong> ${{ $todaySales }}
        </div>
        <div>
            <strong>Yesterday:</strong> ${{ $yesterdaySales }}
        </div>
        <div>
            <strong>This Month:</strong> ${{ $thisMonthSales }}
        </div>
        <div>
            <strong>Last Month:</strong> ${{ $lastMonthSales }}
        </div>
    </div>
</body>
</html>
