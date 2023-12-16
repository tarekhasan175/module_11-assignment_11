<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoreKeeper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 mb-5 text-center bg-light border rounded p-3">
        <h1>Welcome To StoreKeeper</h1>
    </div>

    <div class="container mt-5 mb-5 text-center bg-light border rounded p-3">
        <h3>All Route for this application.</h3>
        <h3><i><a href="{{ route('products.create') }}">Products creation</a></i></h3>
        <h3><i><a href="{{ route('dashboard') }}">Sales Dashboard</a></i></h3>
        <h3><i><a href="{{ route('transactions') }}">Transaction</a></i></h3>
    </div>
</body>

</html>
