<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
</head>
<body>
    <h1>Departments</h1>
    <a href="{{ route('department.create') }}">Create New Department</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Department ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($department as $department)
            <tr>
                <td>{{ $department->DEPT_ID }}</td>
                <td>{{ $department->NAME }}</td>
                <td>
                    <a href="{{ route('department.show', $department->DEPT_ID) }}">View</a>
                    <a href="{{ route('department.edit', $department->DEPT_ID) }}">Edit</a>
                    <form action="{{ route('department.destroy', $department->DEPT_ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
