<div class="container">
    <h1>My Orders</h1>

    @if($orders->isEmpty())
        <p>You have no orders.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                        <td><a href="{{ route('billings.show', $order->id) }}" class="btn btn-primary">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
