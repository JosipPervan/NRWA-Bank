@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>

        <div class="mb-3">
            <a href="{{ route('customer.create') }}" class="btn btn-success">Add New Customer</a>
        </div>
        
        <!-- Search Form -->
        <div class="mb-3">
            <label for="search" class="form-label">Search by City or State:</label>
            <input type="text" id="search" class="form-control" placeholder="Enter city or state...">
        </div>

        <table class="table table-bordered" id="customer-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Customer Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->CUST_ID }}</td>
                        <td>{{ $customer->ADDRESS }}</td>
                        <td>{{ $customer->CITY }}</td>
                        <td>{{ $customer->STATE }}</td>
                        <td>{{ $customer->POSTAL_CODE }}</td>
                        <td>{{ $customer->CUST_TYPE_CD }}</td>
                        <td>
                            <a href="{{ route('customer.show', $customer->CUST_ID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('customer.edit', $customer->CUST_ID) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('customer.destroy', $customer->CUST_ID) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            const query = this.value;

            // Perform an AJAX request using Axios
            axios.get('{{ route('customers.search') }}', {
                params: {
                    query: query
                }
            })
            .then(response => {
                // Update the table with the search results
                const customers = response.data;
                let tableBody = '';

                customers.forEach(customer => {
                    tableBody += `
                        <tr>
                            <td>${customer.CUST_ID}</td>
                            <td>${customer.ADDRESS}</td>
                            <td>${customer.CITY}</td>
                            <td>${customer.STATE}</td>
                            <td>${customer.POSTAL_CODE}</td>
                            <td>${customer.CUST_TYPE_CD}</td>
                            <td>
                                <a href="/customer/${customer.CUST_ID}" class="btn btn-info">View</a>
                                <a href="/customer/${customer.CUST_ID}/edit" class="btn btn-warning">Edit</a>
                                <form action="/customer/${customer.CUST_ID}" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    `;
                });

                document.querySelector('#customer-table tbody').innerHTML = tableBody;
            })
            .catch(error => {
                console.error('There was an error!', error);
            });
        });
    </script>
@endsection
