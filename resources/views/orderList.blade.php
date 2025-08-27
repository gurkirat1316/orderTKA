<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Orders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-5">

    <div class="container">
        <h2 class="mb-4 text-center text-primary">All Orders 📋</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-lg">
            <div class="card-body">
                @if ($orders->count())
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Placed At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->order_desc }}</td>
                                    <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center text-muted">No orders found yet.</p>
                @endif
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('orders.create') }}" class="btn btn-primary">➕ Add New Order</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
