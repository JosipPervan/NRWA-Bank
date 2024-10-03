@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Officer</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('officer.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="FIRST_NAME">First Name:</label>
                <input type="text" name="FIRST_NAME" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="LAST_NAME">Last Name:</label>
                <input type="text" name="LAST_NAME" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="TITLE">Title:</label>
                <input type="text" name="TITLE" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="START_DATE">Start Date:</label>
                <input type="date" name="START_DATE" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
