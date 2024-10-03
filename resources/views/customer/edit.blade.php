@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Customer</h1>
        <form action="{{ route('customer.update', $customer->CUST_ID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ADDRESS">Address:</label>
                <input type="text" name="ADDRESS" id="ADDRESS" class="form-control" value="{{ $customer->ADDRESS }}" required>
            </div>
            <div class="form-group">
                <label for="CITY">City:</label>
                <input type="text" name="CITY" id="CITY" class="form-control" value="{{ $customer->CITY }}" required>
            </div>
            <div class="form-group">
                <label for="CUST_TYPE_CD">Customer Type Code:</label>
                <input type="text" name="CUST_TYPE_CD" id="CUST_TYPE_CD" class="form-control" value="{{ $customer->CUST_TYPE_CD }}" required>
            </div>
            <div class="form-group">
                <label for="POSTAL_CODE">Postal Code:</label>
                <input type="text" name="POSTAL_CODE" id="POSTAL_CODE" class="form-control" value="{{ $customer->POSTAL_CODE }}" required>
            </div>
            <div class="form-group">
                <label for="STATE">State:</label>
                <input type="text" name="STATE" id="STATE" class="form-control" value="{{ $customer->STATE }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
