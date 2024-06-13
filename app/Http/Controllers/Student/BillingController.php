<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Student\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders;

        return view('student.billings.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // Ensure the user can only view their own orders
        if ($order->user_id != Auth::id()) {
            abort(403);
        }

        $orderItems = $order->orderItems;

        return view('student.billings.show', compact('order', 'orderItems'));
    }

}
