<?php

namespace App\Http\Controllers\Student;

use App\Models\Student\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Auth::user()->cart()->with('course')->get();
        return view('student.carts', compact('cartItems'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        // Check if the course is already in the cart
        $existingCartItem = Cart::where('user_id', Auth::id())
            ->where('course_id', $request->course_id)
            ->first();

        if ($existingCartItem) {
            return redirect()->back()->with('error', 'Course is already in your cart.');
        }

        // Add the course to the cart
        $cart = Cart::create([
            'user_id' => Auth::id(),
            'course_id' => $request->course_id,
        ]);

        return redirect()->back()->with('success', 'Course added to cart.');
    }

    public function destroy(Cart $cart)
    {
        // Check if the authenticated user owns the cart item
        if ($cart->user_id !== Auth::id()) {
            return redirect()->route('cart.index')->with('error', 'You do not have permission to remove this course from the cart.');
        }

        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Course removed from cart.');
    }

}
