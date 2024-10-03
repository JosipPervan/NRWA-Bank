@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Officer</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('officer.update', $officer->OFFICER_ID) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="FIRST_NAME">First Name:</label>
                <input type="text" name="FIRST_NAME" class="form-control" value="{{ $officer->FIRST_NAME }}" required>
            </div>

            <div class="form-group">
                <label for="LAST_NAME">Last Name:</label>
                <input type="text" name="LAST_NAME" class="form-control" value="{{ $officer->LAST_NAME }}" required>
            </div>

            <div class="form-group">
                <label for="TITLE">Title:</label>
                <input type="text" name="TITLE" class="form-control" value="{{ $officer->TITLE }}" required>
            </div>

            <div class="form-group">
                <label for="START_DATE">Start Date:</label>
                <input type="date" name="START_DATE" class="form-control" value="{{ $officer->START_DATE }}" required>
            </div>

            <div class="form-group">
                <label for="END_DATE">End Date:</label>
                <input type="date" name="END_DATE" class="form-control" value="{{ $officer->END_DATE }}">
            </div>

            <div class="form-group">
                <label for="CUST_ID">Customer ID:</label>
                <input type="number" name="CUST_ID" class="form-control" value="{{ $officer->CUST_ID }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
