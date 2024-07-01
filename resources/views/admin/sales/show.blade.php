<div class="container">
    <h1>Order Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order #{{ $sale->id }}</h5>
            <p><strong>User:</strong> {{ $sale->user->name }}</p>
            <p><strong>Total:</strong> {{ $sale->total }}</p>
            <p><strong>Payment Method:</strong> {{ $sale->payment_method }}</p>
            <p><strong>Status:</strong> {{ $sale->status }}</p>
            <p><strong>Order Date:</strong> {{ $sale->created_at->format('d-m-Y') }}</p>

            <h5>Order Items</h5>
            <ul>
                @foreach($sale->orderItems as $item)
                <li>
                    <strong>{{ $item->course->title }}</strong> - {{ $item->quantity }} x ${{ $item->price }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="{{ route('admin.sales.index') }}" class="btn btn-secondary mt-3">Back to Sales</a>
</div>
