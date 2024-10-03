@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Transactions</h2>

        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Create New Transaction</a>

        @if ($transactions->isEmpty())
            <p>No transactions found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Transaction Date</th>
                        <th>Type</th>
                        <th>Account</th>
                        <th>Branch</th>
                        <th>Teller</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->TXN_ID }}</td>
                            <td>{{ $transaction->AMOUNT }}</td>
                            <td>{{ $transaction->TXN_DATE }}</td>
                            <td>{{ $transaction->TXN_TYPE_CD }}</td>
                            <td>{{ $transaction->account->ACCOUNT_ID ?? 'N/A' }}</td>
                            <td>{{ $transaction->branch->Branch_Name ?? 'N/A' }}</td>
                            <td>{{ $transaction->employee->FIRST_NAME ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('transactions.show', $transaction->TXN_ID) }}" class="btn btn-info">View</a>
                                <a href="{{ route('transactions.edit', $transaction->TXN_ID) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->TXN_ID) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
