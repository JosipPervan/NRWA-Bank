<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
</head>
<body>
    <h1>Edit Account</h1>
    <form action="{{ route('accounts.update', $account->ACCOUNT_ID) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add form fields for account attributes with current values -->
        <label for="AVAIL_BALANCE">Available Balance:</label>
        <input type="text" name="AVAIL_BALANCE" id="AVAIL_BALANCE" value="{{ $account->AVAIL_BALANCE }}">
        <!-- Add other fields similarly -->
        <button type="submit">Update</button>
    </form>
</body>
</html>
