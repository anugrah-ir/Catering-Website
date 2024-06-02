@extends('layouts.app')
 
@section('content')
<div class="container-fluid" style="background-color: #DF86A1; min-height: 100vh; padding: 40px">
    <div class="container" style="padding: 50px">
        <h2 class="text-center mb-4" style="color: #fff;">Shopping Cart</h2>
        <div class="col-md-11 text-end" style="padding: 15px;">
            <a href="/order" class="btn btn-primary rounded-pill" style="font-size: 18px;">Kembali ke Order</a>
            <a href="{{ route('invoice.pdf') }}" class="btn btn-primary rounded-pill" style="font-size: 18px;">Cetak Invoice</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if(count($cartItems) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" style="color: #fff;">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $item)
                                @php
                                    $product = $item->menu;
                                @endphp
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm remove-item" data-product-id="{{ $item->id }}">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        Your cart is empty.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function () {
            if (confirm('Are you sure you want to remove this item?')) {
                window.location.href = '/remove-from-cart/' + this.dataset.productId;
            }
        });
    });
</script>
@endsection
