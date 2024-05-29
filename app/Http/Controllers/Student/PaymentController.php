<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Student\Order;
use App\Models\Student\OrderItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function checkout()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

        $cartItems = Auth::user()->cart()->with('course')->get();
        $lineItems = [];
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->course->price;
            $imageUrl = asset('storage/' . $cartItem->course->cover_image);

                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'myr',
                        'product_data' => [
                            'name' => $cartItem->course->title,
                            'images' => [$imageUrl],
                        ],
                        'unit_amount' => $cartItem->course->price * 100, // Stripe expects amounts in cents
                    ],
                    'quantity' => 1,
                ];

        }

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true),
            'cancel_url' => route('checkout.cancel',[], true),
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $totalPrice,
            'payment_method' => 'stripe',
            'status' => 'completed',
        ]);

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'course_id' => $cartItem->course_id,
                'quantity' => 1,
                'price' => $cartItem->course->price,
            ]);
        }




        return redirect($checkout_session->url);
    }

    public function success(){
        // Clear the user's cart after successful checkout
        Auth::user()->cart()->delete();
        return view('student.checkout-success');
    }

    public function cancel(){
        return redirect()->back()->with('error', 'Payment was cancelled.');
    }
}
