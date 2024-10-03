@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee Details: {{ $employee->FIRST_NAME }} {{ $employee->LAST_NAME }}</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> {{ $employee->Emp_Id }}</li>
            <li class="list-group-item"><strong>First Name:</strong> {{ $employee->FIRST_NAME }}</li>
            <li class="list-group-item"><strong>Last Name:</strong> {{ $employee->LAST_NAME }}</li>
            <li class="list-group-item"><strong>Start Date:</strong> {{ $employee->START_DATE }}</li>
            <li class="list-group-item"><strong>End Date:</strong> {{ $employee->END_DATE ?? 'Still Employed' }}</li>
            <li class="list-group-item"><strong>Title:</strong> {{ $employee->TITLE }}</li>
            <li class="list-group-item"><strong>Assigned Branch:</strong> {{ $employee->branch->Branch_Name ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Department:</strong> {{ $employee->department->Dept_Name ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Superior:</strong> 
                @if ($employee->superiorEmployee)
                    {{ $employee->superiorEmployee->FIRST_NAME }} {{ $employee->superiorEmployee->LAST_NAME }}
                @else
                    No Superior Assigned
                @endif
            </li>
        </ul>

        <a href="{{ route('employee.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
