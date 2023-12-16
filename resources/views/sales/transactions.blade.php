@extends('layouts.app')

@section('content')
    <div class="container mt-2 border rounded w-75">
        <h1 class="mb-4 p-3 text-primary text-center">Transaction History</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-primary text-primary">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->price }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
