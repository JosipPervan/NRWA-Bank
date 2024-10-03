@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Branch</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('branch.update', $branch->BRANCH_ID) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="NAME">Branch Name:</label>
                <input type="text" name="NAME" class="form-control" value="{{ $branch->NAME }}" required>
            </div>

            <div class="form-group">
                <label for="ADDRESS">Address:</label>
                <input type="text" name="ADDRESS" class="form-control" value="{{ $branch->ADDRESS }}" required>
            </div>

            <div class="form-group">
                <label for="CITY">City:</label>
                <input type="text" name="CITY" class="form-control" value="{{ $branch->CITY }}" required>
            </div>

            <div class="form-group">
                <label for="STATE">State:</label>
                <input type="text" name="STATE" class="form-control" value="{{ $branch->STATE }}" required>
            </div>

            <div class="form-group">
                <label for="ZIP_CODE">Zip Code:</label>
                <input type="text" name="ZIP_CODE" class="form-control" value="{{ $branch->ZIP_CODE }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
