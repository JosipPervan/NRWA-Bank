<!DOCTYPE html>
<html>
<head>
    <title>Branches</title>
</head>
<body>
    <h1>Branches</h1>
    <a href="{{ route('branch.create') }}">Create New Branch</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Branch ID</th>
                <th>Address</th>
                <th>City</th>
                <th>Name</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($branch as $branch)
            <tr>
                <td>{{ $branch->BRANCH_ID }}</td>
                <td>{{ $branch->ADDRESS }}</td>
                <td>{{ $branch->CITY }}</td>
                <td>{{ $branch->NAME }}</td>
                <td>{{ $branch->STATE }}</td>
                <td>{{ $branch->ZIP_CODE }}</td>
                <td>
                    <a href="{{ route('branch.show', $branch->BRANCH_ID) }}">View</a>
                    <a href="{{ route('branch.edit', $branch->BRANCH_ID) }}">Edit</a>
                    <form action="{{ route('branch.destroy', $branch->BRANCH_ID) }}" method="POST" style="display:inline;">
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
