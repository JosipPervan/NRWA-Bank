@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Transaction Details</h2>

        <div class="card">
            <div class="card-header">
                Transaction ID: {{ $transaction->TXN_ID }}
            </div>
            <div class="card-body">
                <p><strong>Amount:</strong> {{ $transaction->AMOUNT }}</p>
                <p><strong>Transaction Date:</strong> {{ $transaction->TXN_DATE }}</p>
                <p><strong>Transaction Type:</strong> {{ $transaction->TXN_TYPE_CD }}</p>
                <p><strong>Account:</strong> {{ $transaction->account->ACCOUNT_ID ?? 'N/A' }}</p>
                <p><strong>Branch:</strong> {{ $transaction->branch->Branch_Name ?? 'N/A' }}</p>
                <p><strong>Teller:</strong> {{ $transaction->employee->FIRST_NAME ?? 'N/A' }}</p>

                <a href="{{ route('transactions.index') }}" class="btn btn-primary">Back to Transactions List</a>
                <a href="{{ route('transactions.edit', $transaction->TXN_ID) }}" class="btn btn-warning">Edit Transaction</a>

                <form action="{{ route('transactions.destroy', $transaction->TXN_ID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Transaction</button>
                </form>
            </div>
        </div>
    </div>
@endsection
