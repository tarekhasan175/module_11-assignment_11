@extends('layouts.app')

@section('content')
    <div class="container mt-5 border rounded border-primary">
        <h1 class="mb-4 p-3 text-primary"><strong>Sales Dashboard</strong></h1>

        <div class="row text-center">
            <div class="col-md-3">
                <div class="card mb-3 border-primary">
                    <div class="card-body">
                        <p class="card-title border-bottom pb-2 text-primary  border-primary">Today's Sales</p>
                        <h4 class="card-text">{{ $salesToday }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3 border-primary">
                    <div class="card-body">
                        <p class="card-title border-bottom pb-2 text-primary  border-primary">Yesterday's Sales</p>
                        <h4 class="card-text">{{ $salesYesterday }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3 border-primary">
                    <div class="card-body">
                        <p class="card-title border-bottom pb-2 text-primary border-primary">This Month's Sales</p>
                        <h4 class="card-text">{{ $salesThisMonth }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card mb-3 border-primary">
                    <div class="card-body">
                        <p class="card-title border-bottom pb-2 text-primary border-primary">Last Month's Sales</p>
                        <h4 class="card-text">{{ $salesLastMonth }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
