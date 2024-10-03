<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Department",
 *     type="object",
 *     required={"DEPARTMENT_ID", "NAME"},
 *     @OA\Property(property="DEPARTMENT_ID", type="integer", example=1),
 *     @OA\Property(property="NAME", type="string", example="Human Resources"),
 * )
 *
 * @OA\PathItem(
 *   path="/department",
 *   summary="Operations about departments"
 * )
 */
class DepartmentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/department",
     *     summary="Get a list of departments",
     *     tags={"Department"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found"
     *     )
     * )
     */
    public function index()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

    /**
     * @OA\Get(
     *     path="/department/{id}",
     *     summary="Get a department by ID",
     *     description="Returns a department by its ID.",
     *     tags={"Department"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the department",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Department"),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Department not found",
     *     )
     * )
     */
    public function show(Department $department)
    {
        return response()->json($department);
    }

    /**
     * @OA\Post(
     *     path="/department",
     *     summary="Create a new department",
     *     tags={"Department"},
     *     @OA\RequestBody(
     *         description="Department object that needs to be added",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Department")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Department created successfully"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid input"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        $department = Department::create($request->all());

        return response()->json($department, 201); // Status 201 (Created)
    }

    /**
     * @OA\Put(
     *     path="/department/{id}",
     *     summary="Update a department",
     *     description="Updates an existing department.",
     *     tags={"Department"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the department to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Department")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Department updated successfully",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Department not found",
     *     )
     * )
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        $department->update($request->all());

        return response()->json($department);
    }

    /**
     * @OA\Delete(
     *     path="/department/{id}",
     *     summary="Delete a department",
     *     description="Deletes a department from the database.",
     *     tags={"Department"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the department to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Department deleted successfully",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Department not found",
     *     )
     * )
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json(null, 204); // 204 No Content response
    }
}
