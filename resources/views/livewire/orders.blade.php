<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h3>Orders</h3>
    <table class="myaccount-table table-responsive text-center table table-bordered">
        
        <thead class="thead-light">
        @if (count($orders) > 0)
            <tr>
                <th>Order</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)    
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->order_status }}</td>
                    <td>{{ $item->total_price }}</td>
                    <td><a href="#" class="check-btn sqr-btn">View</a></td>
                </tr>
            @endforeach
            @else
                <b>No order found!</b>
            @endif
        </tbody>
    </table>
</div>
