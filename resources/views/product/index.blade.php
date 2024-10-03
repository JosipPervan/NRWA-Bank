@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date Offered</th>
                    <th>Date Retired</th>
                    <th>Product Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                    <tr>
                        <td>{{ $product->PRODUCT_CD }}</td>
                        <td>{{ $product->NAME }}</td>
                        <td>{{ $product->DATE_OFFERED }}</td>
                        <td>{{ $product->DATE_RETIRED ?? 'N/A' }}</td>
                        <td>{{ $product->productType->TYPE_NAME ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('product.show', $product->PRODUCT_CD) }}" class="btn btn-info">View</a>
                            <a href="{{ route('product.edit', $product->PRODUCT_CD) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('product.destroy', $product->PRODUCT_CD) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
