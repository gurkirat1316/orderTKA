<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Knowledge Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg p-5 text-center">
        <h1 class="mb-3">Welcome to The Knowledge Academy</h1>
        <p class="mb-4">Please click on the button below to give your order.</p>

        <a href="{{ route('orders.create') }}" class="btn btn-primary btn-lg">
            Give Order
        </a>
    </div>

</body>

</html>
