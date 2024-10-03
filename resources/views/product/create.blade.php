@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Product</h1>

        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NAME" class="form-label">Product Name</label>
                <input type="text" name="NAME" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="DATE_OFFERED" class="form-label">Date Offered</label>
                <input type="date" name="DATE_OFFERED" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="DATE_RETIRED" class="form-label">Date Retired (optional)</label>
                <input type="date" name="DATE_RETIRED" class="form-control">
            </div>

            <div class="mb-3">
                <label for="PRODUCT_TYPE_CD" class="form-label">Product Type Code</label>
                <input type="text" name="PRODUCT_TYPE_CD" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Create Product</button>
        </form>
    </div>
@endsection
