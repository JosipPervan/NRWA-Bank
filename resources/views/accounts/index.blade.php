<!DOCTYPE html>
<html>
<head>
    <title>Accounts</title>
    <!-- Add Bootstrap or other CSS frameworks if needed -->
</head>
<body>
    <h1>Accounts</h1>
    <a href="{{ route('accounts.create') }}">Create New Account</a>
    <table>
        <thead>
            <tr>
                <th>Account ID</th>
                <th>Available Balance</th>
                <th>Last Activity Date</th>
                <th>Open Date</th>
                <th>Pending Balance</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
            <tr>
                <td>{{ $account->ACCOUNT_ID }}</td>
                <td>{{ $account->AVAIL_BALANCE }}</td>
                <td>{{ $account->LAST_ACTIVITY_DATE }}</td>
                <td>{{ $account->OPEN_DATE }}</td>
                <td>{{ $account->PENDING_BALANCE }}</td>
                <td>{{ $account->STATUS }}</td>
                <td>
                    <a href="{{ route('accounts.show', $account->ACCOUNT_ID) }}">View</a>
                    <a href="{{ route('accounts.edit', $account->ACCOUNT_ID) }}">Edit</a>
                    <form action="{{ route('accounts.destroy', $account->ACCOUNT_ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
