@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details: {{ $product->NAME }}</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $product->PRODUCT_CD }}</li>
            <li class="list-group-item"><strong>Name:</strong> {{ $product->NAME }}</li>
            <li class="list-group-item"><strong>Date Offered:</strong> {{ $product->DATE_OFFERED }}</li>
            <li class="list-group-item"><strong>Date Retired:</strong> {{ $product->DATE_RETIRED ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Product Type:</strong> {{ $product->productType->TYPE_NAME ?? 'N/A' }}</li>
        </ul>

        <a href="{{ route('product.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
