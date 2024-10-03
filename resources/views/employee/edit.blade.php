@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Employee: {{ $employee->FIRST_NAME }} {{ $employee->LAST_NAME }}</h1>

        <form action="{{ route('employee.update', $employee->Emp_Id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="FIRST_NAME" class="form-label">First Name</label>
                <input type="text" name="FIRST_NAME" class="form-control" value="{{ $employee->FIRST_NAME }}" required>
            </div>

            <div class="mb-3">
                <label for="LAST_NAME" class="form-label">Last Name</label>
                <input type="text" name="LAST_NAME" class="form-control" value="{{ $employee->LAST_NAME }}" required>
            </div>

            <div class="mb-3">
                <label for="START_DATE" class="form-label">Start Date</label>
                <input type="date" name="START_DATE" class="form-control" value="{{ $employee->START_DATE }}" required>
            </div>

            <div class="mb-3">
                <label for="TITLE" class="form-label">Title</label>
                <input type="text" name="TITLE" class="form-control" value="{{ $employee->TITLE }}" required>
            </div>

            <div class="mb-3">
                <label for="ASSIGNED_BRANCH_ID" class="form-label">Assigned Branch</label>
                <input type="number" name="ASSIGNED_BRANCH_ID" class="form-control" value="{{ $employee->ASSIGNED_BRANCH_ID }}" required>
            </div>

            <div class="mb-3">
                <label for="DEPT_ID" class="form-label">Department</label>
                <input type="number" name="DEPT_ID" class="form-control" value="{{ $employee->DEPT_ID }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
@endsection
