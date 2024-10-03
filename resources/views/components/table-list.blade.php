{{-- resources/views/components/table-list.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $title }} List</h2>
        <a href="{{ route($createRoute) }}" class="btn btn-primary mb-3">Add New {{ $title }}</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        @foreach ($columns as $columnKey => $columnName)
                            <td>{{ $item->$columnKey }}</td>
                        @endforeach
                        <td>
                            <a href="{{ route($showRoute, $item->$primaryKey) }}" class="btn btn-info">View</a>
                            <a href="{{ route($editRoute, $item->$primaryKey) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route($deleteRoute, $item->$primaryKey) }}" method="POST" style="display:inline;">
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
