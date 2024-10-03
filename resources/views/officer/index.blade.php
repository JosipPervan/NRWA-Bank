@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Officer List</h2>
        <a href="{{ route('officer.create') }}" class="btn btn-primary mb-3">Add New Officer</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Officer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($officer as $officer)
                    <tr>
                        <td>{{ $officer->OFFICER_ID }}</td>
                        <td>{{ $officer->FIRST_NAME }}</td>
                        <td>{{ $officer->LAST_NAME }}</td>
                        <td>{{ $officer->TITLE }}</td>
                        <td>
                            <a href="{{ route('officer.show', $officer->OFFICER_ID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('officer.edit', $officer->OFFICER_ID) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('officer.destroy', $officer->OFFICER_ID) }}" method="POST" style="display:inline;">
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
