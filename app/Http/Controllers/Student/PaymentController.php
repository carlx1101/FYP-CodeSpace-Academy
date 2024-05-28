<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Student\Order;
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
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'myr',
                        'product_data' => [
                            'name' => $cartItem->course->title,
                            'images' =>  ['https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt4154796%2F&psig=AOvVaw0S0Rg7g18oHJW_BwwEvDP4&ust=1716968559842000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJjLibrsr4YDFQAAAAAdAAAAABAE'],
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

        // foreach ($cartItems as $cartItem) {
        //     OrderItem::create([
        //         'order_id' => $order->id,
        //         'course_id' => $cartItem->course_id,
        //         'quantity' => 1,
        //         'price' => $cartItem->course->price,
        //     ]);
        // }




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
