@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Business List</h2>
        <a href="{{ route('business.create') }}" class="btn btn-primary mb-3">Add New Business</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>CUST ID</th>
                    <th>Name</th>
                    <th>Incorporation Date</th>
                    <th>State ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($business as $busines)
                    <tr>
                        
                        <td>{{ $busines->NAME }}</td>
                        <td>{{ $busines->INCORP_DATE }}</td>
                        <td>{{ $busines->STATE_ID }}</td>
                        <td>{{ $busines->CUST_ID }}</td>
                        <td>
                            <a href="{{ route('business.show', $busines->CUST_ID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('business.edit', $busines->CUST_ID) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('business.destroy', $busines->CUST_ID) }}" method="POST" style="display:inline;">
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
