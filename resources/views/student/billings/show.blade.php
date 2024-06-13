<div class="container">
    <h1>Order Details</h1>

    <h2>Order ID: {{ $order->id }}</h2>
    <p>Total: {{ $order->total }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Date: {{ $order->created_at->format('Y-m-d') }}</p>

    <h3>Order Items</h3>

    @if($orderItems->isEmpty())
        <p>No items found for this order.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderItems as $item)
                    <tr>
                        <td>{{ $item->course->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('billings.index') }}" class="btn btn-secondary">Back to Orders</a>
</div>
