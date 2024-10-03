@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product Type: {{ $productType->NAME }}</h1>

        <form action="{{ route('product_type.update', $productType->PRODUCT_TYPE_CD) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="NAME" class="form-label">Product Type Name</label>
                <input type="text" name="NAME" class="form-control" value="{{ $productType->NAME }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product Type</button>
        </form>
    </div>
@endsection
