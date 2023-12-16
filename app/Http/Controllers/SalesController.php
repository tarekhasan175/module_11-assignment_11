<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class SalesController extends Controller
{
    public function dashboard()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $thisMonth = Carbon::now()->startOfMonth();
        $lastMonth = Carbon::now()->subMonth()->startOfMonth();

        $salesToday = $this->getSales($today);
        $salesYesterday = $this->getSales($yesterday);
        $salesThisMonth = $this->getSales($thisMonth);
        $salesLastMonth = $this->getSales($lastMonth);

        return view('sales.dashboard', compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth'));
    }

    public function transactions()
    {
        $transactions = Product::orderBy('created_at', 'asc')->get();

        return view('sales.transactions', compact('transactions'));
    }

    private function getSales($date)
    {
        return Product::whereDate('created_at', $date)->sum('price');
    }
}
