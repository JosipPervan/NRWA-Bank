@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Business Details</h2>

        <div class="card">
            <div class="card-header">Business ID: {{ $business->CUST_ID }}</div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $business->NAME }}</p>
                <p><strong>Incorporation Date:</strong> {{ $business->INCORP_DATE }}</p>
                <p><strong>State ID:</strong> {{ $business->STATE_ID }}</p>
            </div>
        </div>

        <a href="{{ route('business.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection
