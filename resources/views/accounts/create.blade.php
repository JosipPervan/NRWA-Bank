<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        
        <!-- Form fields for Account attributes -->
        <label for="Avail_Balance">Available Balance:</label>
        <input type="text" name="AVAIL_BALANCE" id="Avail_Balance" required>
        <br>
        
        <label for="Last_Activity_Date">Last Activity Date:</label>
        <input type="date" name="LAST_ACTIVITY_DATE" id="Last_Activity_Date" required>
        <br>

        <label for="Open_Date">Open Date:</label>
        <input type="date" name="OPEN_DATE" id="Open_Date" required>
        <br>

        <label for="Pending_Balance">Pending Balance:</label>
        <input type="text" name="PENDING_BALANCE" id="Pending_Balance" required>
        <br>

        <label for="Status">Status:</label>
        <select name="STATUS" id="Status" required>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            <option value="Closed">Closed</option>
        </select>
        <br>

        <label for="Cust_Id">Customer ID:</label>
        <input type="number" name="CUST_ID" id="Cust_Id" required>
        <br>

        <label for="Open_Branch_Id">Open Branch ID:</label>
        <input type="number" name="OPEN_BRANCH_ID" id="Open_Branch_Id" required>
        <br>

        <label for="Open_EMP_Id">Open Employee ID:</label>
        <input type="number" name="OPEN_EMP_ID" id="Open_EMP_Id" required>
        <br>

        <label for="Product_Cd">Product Code:</label>
        <input type="text" name="PRODUCT_CD" id="Product_Cd" required>
        <br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('accounts.index') }}">Back to List</a>
</body>
</html>
