<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();

        return view('components.table-list', [
            'title' => 'Department',
            'items' => $department,
            'columns' => [
                'DEPT_ID' => 'Department ID',
                'NAME' => 'Name'
            ],
            'primaryKey' => 'DEPT_ID',
            'createRoute' => 'department.create',
            'showRoute' => 'department.show',
            'editRoute' => 'department.edit',
            'deleteRoute' => 'department.destroy'
        ]);
    }

    public function show(Department $department)
    {
        return view('department.show', compact('department')); // Return view for single department
    }

    public function create()
    {
        return view('department.create'); // Return form view to create a department
    }

    public function store(Request $request)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        Department::create($request->all());

        return redirect()->route('department.index')->with('success', 'Department created successfully!');
    }

    public function edit(Department $department)
    {
        return view('department.edit', compact('department')); // Return form view to edit a department
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        $department->update($request->all());

        return redirect()->route('department.index')->with('success', 'Department updated successfully!');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('department.index')->with('success', 'Department deleted successfully!');
    }



    // DepartmentController.php
    public function search(Request $request)
    {
        $query = $request->get('query');

        // Search by department name
        $departments = Department::where('DEPARTMENT_NAME', 'LIKE', "%{$query}%")->get();

        return response()->json($departments);
    }
}
