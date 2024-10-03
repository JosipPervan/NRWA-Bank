<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::all();
        return view('business.index', compact('business'));
    }

    public function create()
    {
        return view('business.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'INCORP_DATE' => 'required|date',
            'NAME' => 'required|string|max:255',
            'STATE_ID' => 'required|string|max:2',
            'CUST_ID' => 'required|integer|exists:customer,CUST_ID',
        ]);

        Business::create($request->all());

        return redirect()->route('business.index')
            ->with('success', 'Business created successfully.');
    }

    public function show(Business $business)
    {
        return view('business.show', compact('business'));
    }

    public function edit(Business $business)
    {
        return view('business.edit', compact('business'));
    }

    public function update(Request $request, Business $business)
    {
        $request->validate([
            'INCORP_DATE' => 'required|date',
            'NAME' => 'required|string|max:255',
            'STATE_ID' => 'required|string|max:2',
            'CUST_ID' => 'required|integer|exists:customer,CUST_ID',
        ]);

        $business->update($request->all());

        return redirect()->route('business.index')
            ->with('success', 'Business updated successfully.');
    }

    public function destroy(Business $business)
    {
        $business->delete();

        return redirect()->route('business.index')
            ->with('success', 'Business deleted successfully.');
    }
}
