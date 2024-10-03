<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Display a listing of employees
    public function index()
    {
        $employee = Employee::all();
        return view('employee.index', compact('employee')); // Return a view with employees
    }

    // Show the form for creating a new employee
    public function create()
    {
        return view('employee.create'); // Return a view for creating an employee
    }

    // Store a newly created employee in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employee,email',
            'position' => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    // Display the specified employee
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    // Show the form for editing the specified employee
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    // Update the specified employee in the database
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'START_DATE' => 'required|date',
            'TITLE' => 'required|string|max:255',
            'ASSIGNED_BRANCH_ID' => 'required|integer',
            'DEPT_ID' => 'required|integer',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    // Remove the specified employee from the database
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
