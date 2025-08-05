@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Your Cart</h2>
    @if(count($products) == 0)
        <p>Your cart is empty.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6 mb-3">
                    <div class="d-flex">
                        <img src="{{ $product->images->first()?->image_url }}" width="100" alt="{{ $product->name }}">
                        <div class="ms-3">
                            <h5>{{ $product->name }}</h5>
                            <p>₹{{ number_format($product->price, 2) }}</p>
                            <form action="{{ route('cart.remove', $product->id) }}" method="POST" style="display:inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('checkout') }}" class="btn btn-success mt-4">Proceed to Checkout</a>
    @endif
</div>
@endsection