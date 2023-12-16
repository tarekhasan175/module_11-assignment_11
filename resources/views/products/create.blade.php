@extends('layouts.app')

@section('content')
    <div class="container text-start w-50 border rounded p-3">
        <h2 class="p-2 text-center text-primary"><strong>Add Product</strong></h2>
        <div class="mb-3">
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                <label for="name" class="form-label"><strong><h4>Product Name:</h4></strong></label>
                <input type="text" name="name" class="form-control" placeholder="Enter product name" required>

                <label for="quantity" class="form-label"><strong><h4 class="mt-2">Quantity:</h4></strong></label>
                <input type="number" name="quantity" class="form-control" required>

                <label for="price" class="form-label"><strong><h4 class="mt-2">Price:</h4></strong></label>
                <input type="number" step="0.01" name="price" class="form-control" required>

                <button type="submit" class="btn btn-primary mt-3 w-100">Add Product</button>
            </form>
        </div>
    </div>
@endsection
