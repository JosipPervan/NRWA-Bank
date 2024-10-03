@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Business</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('business.update', $business->CUST_ID) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="NAME">Business Name:</label>
                <input type="text" name="NAME" class="form-control" value="{{ $business->NAME }}" required>
            </div>

            <div class="form-group">
                <label for="INCORP_DATE">Incorporation Date:</label>
                <input type="date" name="INCORP_DATE" class="form-control" value="{{ $business->INCORP_DATE }}" required>
            </div>

            <div class="form-group">
                <label for="STATE_ID">State ID:</label>
                <input type="text" name="STATE_ID" class="form-control" value="{{ $business->STATE_ID }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
