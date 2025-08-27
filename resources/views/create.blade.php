<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Place Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg p-5" style="max-width: 500px; width: 100%;">
        <h2 class="mb-4 text-center text-primary">Place Your Order</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" id="name" class="form-control" required
                    value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="order" class="form-label">Your Order</label>
                <input type="text" name="order" id="order" class="form-control" required
                    value="{{ old('order') }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">Add Order</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
