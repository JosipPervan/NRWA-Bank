<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    // Display a listing of branchs
    public function index()
    {
        $branch = Branch::all();
        return view('components.table-list', [
            'title' => 'Branch',
            'items' => $branch,
            'columns' => [
                'BRANCH_ID' => 'Branch ID',
                'ADDRESS' => 'Address',
                'CITY' => 'City',
                'NAME' => 'Name',
                'STATE' => 'State',
                'ZIP_CODE' => 'Zip Code'
            ],
            'primaryKey' => 'BRANCH_ID',
            'createRoute' => 'branch.create',
            'showRoute' => 'branch.show',
            'editRoute' => 'branch.edit',
            'deleteRoute' => 'branch.destroy'
        ]);
    }

    // Show the form for creating a new branch
    public function create()
    {
        return view('branch.create'); // Return a view for creating a branch
    }

    // Store a newly created branch in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Branch::create($request->all());

        return redirect()->route('branch.index')->with('success', 'Branch created successfully.');
    }

    // Display the specified branch
    public function show(Branch $branch)
    {
        return view('branch.show', compact('branch')); // Return a view to show a branch
    }

    // Show the form for editing the specified branch
    public function edit(Branch $branch)
    {
        return view('branch.edit', compact('branch')); // Return a view for editing the branch
    }

    // Update the specified branch in the database
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $branch->update($request->all());

        return redirect()->route('branch.index')->with('success', 'Branch updated successfully.');
    }

    // Remove the specified branch from the database
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index')->with('success', 'Branch deleted successfully.');
    }
}
