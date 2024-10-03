@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer Details</h1>
        <div class="card">
            <div class="card-header">Customer ID: {{ $customer->CUST_ID }}</div>
            <div class="card-body">
                <p><strong>Address:</strong> {{ $customer->ADDRESS }}</p>
                <p><strong>City:</strong> {{ $customer->CITY }}</p>
                <p><strong>Customer Type Code:</strong> {{ $customer->CUST_TYPE_CD }}</p>
                <p><strong>Postal Code:</strong> {{ $customer->POSTAL_CODE }}</p>
                <p><strong>State:</strong> {{ $customer->STATE }}</p>
                <br>
            </div>
        </div>
        <a href="{{ route('customer.edit', $customer->CUST_ID) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
