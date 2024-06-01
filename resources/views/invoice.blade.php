@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #DF86A1; min-height: 100vh; padding: 40px">
    <div class="container" style="padding: 50px">
        <h2 class="text-center mb-4" style="color: #fff;">Shopping Cart</h2>
        <div class="col-md-11 text-end" style="padding: 25px;">
            <a href="/order" class="btn btn-primary rounded-pill">Kembali ke Order</a>
            <a href="{{ route('invoice.pdf') }}" class="btn btn-primary rounded-pill">Cetak Invoice</a>
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
                            @foreach($cartItems as $productId => $quantity)
                                @php
                                    $product = \App\Models\Menu::find($productId);
                                    $productName = $product->name; 
                                    $productPrice = $product->price; 
                                    $totalPrice = $productPrice * $quantity;
                                @endphp
                                <tr>
                                    <td>{{ $productName }}</td>
                                    <td>{{ $quantity }}</td>
                                    <td>{{ $productPrice }}</td>
                                    <td>{{ $totalPrice }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm remove-item" data-product-id="{{ $productId }}">Remove</button>
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
    document.addEventListener('DOMContentLoaded', function () {
        // Skrip pertama untuk menghapus item dari keranjang
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function () {
                const productId = this.getAttribute('data-product-id');
                updateCart(productId, 0);
            });
        });

        // Skrip kedua untuk memperbarui keranjang
        function updateCart(productId, quantity) {
            fetch('{{ route('update.cart') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    productId: productId,
                    quantity: quantity
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      location.reload();
                  }
              });
        }
    });
</script>
@endsection