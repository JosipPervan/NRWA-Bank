@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Branch</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('branch.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NAME">Branch Name:</label>
                <input type="text" name="NAME" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ADDRESS">Address:</label>
                <input type="text" name="ADDRESS" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="CITY">City:</label>
                <input type="text" name="CITY" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="STATE">State:</label>
                <input type="text" name="STATE" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ZIP_CODE">Zip Code:</label>
                <input type="text" name="ZIP_CODE" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
