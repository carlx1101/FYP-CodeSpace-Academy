<?php

namespace App\Http\Controllers\Student;

use App\Models\Student\Cart;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cartItems = Auth::user()->cart()->with('course')->get();

        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }

        return view('student.carts', compact('cartItems', 'categories','studentProgress'));
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
