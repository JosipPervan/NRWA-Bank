@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Branch Details</h2>

        <div class="card">
            <div class="card-header">Branch ID: {{ $branch->BRANCH_ID }}</div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $branch->NAME }}</p>
                <p><strong>Address:</strong> {{ $branch->ADDRESS }}</p>
                <p><strong>City:</strong> {{ $branch->CITY }}</p>
                <p><strong>State:</strong> {{ $branch->STATE }}</p>
                <p><strong>Zip Code:</strong> {{ $branch->ZIP_CODE }}</p>
            </div>
        </div>

        <a href="{{ route('branch.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection
