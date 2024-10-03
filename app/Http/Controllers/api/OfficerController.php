<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Officer;
use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     schema="Officer",
 *     type="object",
 *     required={"OFFICER_ID", "FIRST_NAME", "LAST_NAME", "START_DATE", "TITLE"},
 *     @OA\Property(property="OFFICER_ID", type="integer", example=1),
 *     @OA\Property(property="FIRST_NAME", type="string", example="John"),
 *     @OA\Property(property="LAST_NAME", type="string", example="Doe"),
 *     @OA\Property(property="START_DATE", type="string", format="date", example="2023-01-01"),
 *     @OA\Property(property="END_DATE", type="string", format="date", example="2024-01-01", nullable=true),
 *     @OA\Property(property="TITLE", type="string", example="Manager"),
 *     @OA\Property(property="CUST_ID", type="integer", example=100, nullable=true)
 * )
 * @OA\PathItem(
 *   path="/officer",
 *   summary="Operations about officers"
 * )
 */
class OfficerController extends Controller
{
    /**
     * @OA\Get(
     *     path="/officer",
     *     summary="Get a list of officers",
     *     tags={"Officer"},
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
        $officers = Officer::all();
        return response()->json($officers);
    }

    /**
     * @OA\Get(
     *     path="/officer/{id}",
     *     summary="Get an officer by ID",
     *     description="Returns an officer by their ID.",
     *     tags={"Officer"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the officer",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Officer")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Officer not found"
     *     )
     * )
     */
    public function show(Officer $officer)
    {
        return response()->json($officer);
    }

    /**
     * @OA\Post(
     *     path="/officer",
     *     summary="Create a new officer",
     *     tags={"Officer"},
     *     @OA\RequestBody(
     *         description="Officer object that needs to be added",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Officer")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Officer created successfully"
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
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'START_DATE' => 'required|date',
            'TITLE' => 'required|string|max:255',
            'END_DATE' => 'nullable|date',
            'CUST_ID' => 'nullable|integer',
        ]);

        $officer = Officer::create($request->all());

        return response()->json($officer, 201);
    }

    /**
     * @OA\Put(
     *     path="/officer/{id}",
     *     summary="Update an officer",
     *     description="Updates an existing officer.",
     *     tags={"Officer"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the officer to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Officer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Officer updated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Officer not found"
     *     )
     * )
     */
    public function update(Request $request, Officer $officer)
    {
        $request->validate([
            'FIRST_NAME' => 'required|string|max:255',
            'LAST_NAME' => 'required|string|max:255',
            'START_DATE' => 'required|date',
            'TITLE' => 'required|string|max:255',
            'END_DATE' => 'nullable|date',
            'CUST_ID' => 'nullable|integer',
        ]);

        $officer->update($request->all());

        return response()->json($officer);
    }

    /**
     * @OA\Delete(
     *     path="/officer/{id}",
     *     summary="Delete an officer",
     *     description="Deletes an officer from the database.",
     *     tags={"Officer"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the officer to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Officer deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Officer not found"
     *     )
     * )
     */
    public function destroy(Officer $officer)
    {
        $officer->delete();

        return response()->json(null, 204);
    }
}
