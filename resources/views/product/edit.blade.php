@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product: {{ $product->NAME }}</h1>

        <form action="{{ route('product.update', $product->PRODUCT_CD) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="NAME" class="form-label">Product Name</label>
                <input type="text" name="NAME" class="form-control" value="{{ $product->NAME }}" required>
            </div>

            <div class="mb-3">
                <label for="DATE_OFFERED" class="form-label">Date Offered</label>
                <input type="date" name="DATE_OFFERED" class="form-control" value="{{ $product->DATE_OFFERED }}" required>
            </div>

            <div class="mb-3">
                <label for="DATE_RETIRED" class="form-label">Date Retired</label>
                <input type="date" name="DATE_RETIRED" class="form-control" value="{{ $product->DATE_RETIRED }}">
            </div>

            <div class="mb-3">
                <label for="PRODUCT_TYPE_CD" class="form-label">Product Type Code</label>
                <input type="text" name="PRODUCT_TYPE_CD" class="form-control" value="{{ $product->PRODUCT_TYPE_CD }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
