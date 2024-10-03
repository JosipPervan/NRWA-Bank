@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Transaction</h2>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="AMOUNT" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="AMOUNT" name="AMOUNT" required>
            </div>
            <div class="mb-3">
                <label for="TXN_DATE" class="form-label">Transaction Date</label>
                <input type="date" class="form-control" id="TXN_DATE" name="TXN_DATE" required>
            </div>
            <div class="mb-3">
                <label for="TXN_TYPE_CD" class="form-label">Transaction Type</label>
                <input type="text" class="form-control" id="TXN_TYPE_CD" name="TXN_TYPE_CD" required>
            </div>
            <div class="mb-3">
                <label for="ACCOUNT_ID" class="form-label">Account</label>
                <input type="text" class="form-control" id="ACCOUNT_ID" name="ACCOUNT_ID" required>
            </div>
            <div class="mb-3">
                <label for="EXECUTION_BRANCH_ID" class="form-label">Branch</label>
                <input type="text" class="form-control" id="EXECUTION_BRANCH_ID" name="EXECUTION_BRANCH_ID" required>
            </div>
            <div class="mb-3">
                <label for="TELLER_EMP_ID" class="form-label">Teller</label>
                <input type="text" class="form-control" id="TELLER_EMP_ID" name="TELLER_EMP_ID" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
