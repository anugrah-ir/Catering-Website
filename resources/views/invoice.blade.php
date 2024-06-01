<div class="container" style="padding: 50px">
    <h2 class="text-center mb-4">Invoice</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(count($cartItems) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $item)
                            @php
                                $product = $item->menu;
                                $totalAmount = $item->sum('total_price');
                            @endphp
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $item->total_price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h4 class="text-end">Total Amount: {{ $totalAmount }}</h4>
                </div>
            @else
                <div class="alert alert-info text-center">
                    Your cart is empty.
                </div>
            @endif
        </div>
    </div>
</div>