<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $individual = Individual::all();
        return view('components.table-list', [
            'title' => 'Individual',
            'items' => $individual,
            'columns' => [
                'CUST_ID' => 'ID',
                'FIRST_NAME' => 'First Name',
                'LAST_NAME' => 'Last Name',
                'BIRTH_DATE' => 'Birth Date',
            ],
            'primaryKey' => 'CUST_ID',
            'createRoute' => 'individual.create',
            'showRoute' => 'individual.show',
            'editRoute' => 'individual.edit',
            'deleteRoute' => 'individual.destroy'
        ]);
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('individual.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'BIRTH_DATE' => 'required|date',
        ]);

        Individual::create($request->all());
        return redirect()->route('individual.index')
            ->with('success', 'Individual created successfully.');
    }

    // Display the specified resource
    public function show($CUST_ID)
    {
        $individual = Individual::findOrFail($CUST_ID);
        return view('individual.show', compact('individual'));
    }

    // Show the form for editing the specified resource
    public function edit($CUST_ID)
    {
        $individual = Individual::findOrFail($CUST_ID);
        return view('individual.edit', compact('individual'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $CUST_ID)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'BIRTH_DATE' => 'required|date',
        ]);

        $individual = Individual::findOrFail($CUST_ID);
        $individual->update($request->all());

        return redirect()->route('individual.index')
            ->with('success', 'Individual updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($CUST_ID)
    {
        $individual = Individual::findOrFail($CUST_ID);
        $individual->delete();

        return redirect()->route('individual.index')
            ->with('success', 'Individual deleted successfully.');
    }
}
