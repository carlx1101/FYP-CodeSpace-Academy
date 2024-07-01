<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student\Order;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Order::with(['user', 'orderItems.course'])
            ->where('status', 'completed')
            ->get();

        return view('admin.sales.index', compact('sales'));
    }

    public function show($id)
    {
        $sale = Order::with(['user', 'orderItems.course'])->findOrFail($id);

        return view('admin.sales.show', compact('sale'));
    }
}
