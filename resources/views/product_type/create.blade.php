@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Product Type</h1>

        <form action="{{ route('product_type.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NAME" class="form-label">Product Type Name</label>
                <input type="text" name="NAME" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Create Product Type</button>
        </form>
    </div>
@endsection
