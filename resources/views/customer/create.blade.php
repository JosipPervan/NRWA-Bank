@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Customer</h1>
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ADDRESS">Address:</label>
                <input type="text" name="ADDRESS" id="ADDRESS" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="CITY">City:</label>
                <input type="text" name="CITY" id="CITY" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="CUST_TYPE_CD">Customer Type Code:</label>
                <input type="text" name="CUST_TYPE_CD" id="CUST_TYPE_CD" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="POSTAL_CODE">Postal Code:</label>
                <input type="text" name="POSTAL_CODE" id="POSTAL_CODE" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="STATE">State:</label>
                <input type="text" name="STATE" id="STATE" class="form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        
        <a href="{{ route('customer.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
