@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Individuals List</h2>
        <a href="{{ route('individual.create') }}" class="btn btn-primary mb-3">Add New Individual</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birth Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($individual as $individual)
                    <tr>
                        <td>{{ $individual->CUST_ID }}</td>
                        <td>{{ $individual->FIRST_NAME }}</td>
                        <td>{{ $individual->LAST_NAME }}</td>
                        <td>{{ $individual->BIRTH_DATE }}</td>
                        <td>
                            <a href="{{ route('individual.show', $individual->CUST_ID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('individual.edit', $individual->CUST_ID) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('individual.destroy', $individual->CUST_ID) }}" method="POST" style="display:inline;">
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
