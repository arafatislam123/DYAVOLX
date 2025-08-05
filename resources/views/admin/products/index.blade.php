<!-- resources/views/admin/products/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Admin: Manage Products</h2>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-4">+ Add New Product</a>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $product->images->first()?->image_url }}" class="card-img-top" alt="{{ $product->name }}" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">₹{{ number_format($product->price, 2) }}</p>
                        <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection