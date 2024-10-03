@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Type Details: {{ $productType->NAME }}</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $productType->PRODUCT_TYPE_CD }}</li>
            <li class="list-group-item"><strong>Name:</strong> {{ $productType->NAME }}</li>
        </ul>

        <a href="{{ route('product_type.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
