@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Sales Dashboard</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Today's Sales</h5>
                        <p class="card-text">{{ $salesToday }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yesterday's Sales</h5>
                        <p class="card-text">{{ $salesYesterday }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This Month's Sales</h5>
                        <p class="card-text">{{ $salesThisMonth }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Last Month's Sales</h5>
                        <p class="card-text">{{ $salesLastMonth }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
