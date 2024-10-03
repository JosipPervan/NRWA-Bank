<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ADDRESS' => 'required',
            'CITY' => 'required',
            'CUST_TYPE_CD' => 'required',
            'POSTAL_CODE' => 'required',
            'STATE' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customer.index')
            ->with('success', 'Customer created successfully.');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'ADDRESS' => 'required',
            'CITY' => 'required',
            'CUST_TYPE_CD' => 'required',
            'POSTAL_CODE' => 'required',
            'STATE' => 'required',
        ]);

        $customer->update($request->all());

        return redirect()->route('customer.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success', 'Customer deleted successfully.');
    }

    public function search(Request $request)
    {
        // Extract the search query
        $searchQuery = $request->input('query');

        // Perform the search query on the 'customer' table (adjust fields as needed)
        $customers = Customer::where('CITY', 'like', '%' . $searchQuery . '%')
            ->orWhere('STATE', 'like', '%' . $searchQuery . '%')
            ->get();

        // Return the results as a JSON response for the AJAX request
        return response()->json($customers);
    }
}
