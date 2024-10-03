@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Business</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('business.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NAME">Business Name:</label>
                <input type="text" name="NAME" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="INCORP_DATE">Incorporation Date:</label>
                <input type="date" name="INCORP_DATE" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="STATE_ID">State ID:</label>
                <input type="text" name="STATE_ID" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
