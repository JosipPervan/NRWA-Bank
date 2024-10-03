@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Type List</h1>
        <a href="{{ route('product_type.create') }}" class="btn btn-primary">Add New Product Type</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productTypes as $productType)
                    <tr>
                        <td>{{ $productType->PRODUCT_TYPE_CD }}</td>
                        <td>{{ $productType->NAME }}</td>
                        <td>
                            <a href="{{ route('product_type.show', $productType->PRODUCT_TYPE_CD) }}" class="btn btn-info">View</a>
                            <a href="{{ route('product_type.edit', $productType->PRODUCT_TYPE_CD) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('product_type.destroy', $productType->PRODUCT_TYPE_CD) }}" method="POST" style="display:inline;">
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
