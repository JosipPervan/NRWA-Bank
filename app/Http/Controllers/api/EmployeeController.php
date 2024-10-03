<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Return all employees as JSON for the API
    public function index()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    // Return a specific employee as JSON for the API
    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    // Store a new employee via the API
    public function store(Request $request)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
            'DEPARTMENT_ID' => 'required|integer',
            // Add any other validation rules specific to your employee
        ]);

        $employee = Employee::create($request->all());

        return response()->json($employee, 201); // Status 201 (Created)
    }

    // Update an employee via the API
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
            'DEPARTMENT_ID' => 'required|integer',
            // Add any other validation rules specific to your employee
        ]);

        $employee->update($request->all());

        return response()->json($employee);
    }

    // Delete an employee via the API
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(null, 204); // 204 No Content response
    }
}
