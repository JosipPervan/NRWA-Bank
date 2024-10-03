@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Department</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('department.update', $department->DEPT_ID) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="NAME">Department Name:</label>
                <input type="text" name="NAME" class="form-control" value="{{ $department->NAME }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
