@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Officer Details</h2>

        <div class="card">
            <div class="card-header">Officer ID: {{ $officer->OFFICER_ID }}</div>
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $officer->FIRST_NAME }}</p>
                <p><strong>Last Name:</strong> {{ $officer->LAST_NAME }}</p>
                <p><strong>Title:</strong> {{ $officer->TITLE }}</p>
                <p><strong>Start Date:</strong> {{ $officer->START_DATE }}</p>
                <p><strong>End Date:</strong> {{ $officer->END_DATE ?? 'N/A' }}</p>
                <p><strong>Customer ID:</strong> {{ $officer->CUST_ID }}</p>
            </div>
        </div>

        <a href="{{ route('officer.edit', $officer->OFFICER_ID) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('officer.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection
