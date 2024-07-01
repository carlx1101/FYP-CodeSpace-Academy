<div class="container">
    <h1>Sales</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Total</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Order Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->user->name }}</td>
                <td>{{ $sale->total }}</td>
                <td>{{ $sale->payment_method }}</td>
                <td>{{ $sale->status }}</td>
                <td>{{ $sale->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('admin.sales.show', $sale->id) }}" class="btn btn-primary btn-sm">Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
