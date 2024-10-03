@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Department Details</h2>

        <div class="card">
            <div class="card-header">Department ID: {{ $department->DEPT_ID }}</div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $department->NAME }}</p>
            </div>
        </div>

        <a href="{{ route('department.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection
