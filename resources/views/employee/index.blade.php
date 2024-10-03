@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employees List</h2>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Branch</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employee as $employee)
                    <tr>
                        <td>{{ $employee->Emp_Id }}</td>
                        <td>{{ $employee->FIRST_NAME }}</td>
                        <td>{{ $employee->LAST_NAME }}</td>
                        <td>{{ $employee->TITLE }}</td>
                        <td>{{ $employee->department->Dept_Name ?? 'N/A' }}</td>
                        <td>{{ $employee->branch->Branch_Name ?? 'N/A' }}</td>
                        <td>
                        <a href="{{ route('employee.show', $employee) }}" class="btn btn-info">View</a>
                        <a href="{{ route('employee.edit', $employee) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('employee.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
