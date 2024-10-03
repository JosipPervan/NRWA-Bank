@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Department</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('department.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NAME">Department Name:</label>
                <input type="text" name="NAME" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
