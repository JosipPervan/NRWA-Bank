<!DOCTYPE html>
<html>
<head>
    <title>Account Details</title>
</head>
<body>
    <h1>Account Details</h1>
    <p>Account ID: {{ $account->ACCOUNT_ID }}</p>
    <p>Available Balance: {{ $account->AVAIL_BALANCE }}</p>
    <p>Last Activity Date: {{ $account->LAST_ACTIVITY_DATE }}</p>
    <p>Open Date: {{ $account->OPEN_DATE }}</p>
    <p>Pending Balance: {{ $account->PENDING_BALANCE }}</p>
    <p>Status: {{ $account->STATUS }}</p>
    <a href="{{ route('accounts.edit', $account->ACCOUNT_ID) }}">Edit</a>
    <a href="{{ route('accounts.index') }}">Back to List</a>
</body>
</html>
