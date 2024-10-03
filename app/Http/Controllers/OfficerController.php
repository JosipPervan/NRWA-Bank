<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        $officer = Officer::all();
        return view('officer.index', compact('officer'));
    }

    public function create()
    {
        return view('officer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'START_DATE' => 'required|date',
            'END_DATE' => 'nullable|date|after_or_equal:START_DATE',
            'TITLE' => 'required|string|max:100',
            'CUST_ID' => 'required|integer|exists:customer,CUST_ID',
        ]);

        Officer::create($request->all());

        return redirect()->route('officer.index')
            ->with('success', 'Officer created successfully.');
    }

    public function show(Officer $officer)
    {
        return view('officer.show', compact('officer'));
    }

    public function edit(Officer $officer)
    {
        return view('officer.edit', compact('officer'));
    }

    public function update(Request $request, Officer $officer)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'START_DATE' => 'required|date',
            'END_DATE' => 'nullable|date|after_or_equal:START_DATE',
            'TITLE' => 'required|string|max:100',
            'CUST_ID' => 'required|integer|exists:customer,CUST_ID',
        ]);

        $officer->update($request->all());

        return redirect()->route('officer.index')
            ->with('success', 'Officer updated successfully.');
    }

    public function destroy(Officer $officer)
    {
        $officer->delete();

        return redirect()->route('officer.index')
            ->with('success', 'Officer deleted successfully.');
    }
}
