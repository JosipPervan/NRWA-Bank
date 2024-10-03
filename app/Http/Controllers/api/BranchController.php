<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title="Bank API",
 *     version="1.0.0",
 *     description="A description of your API.",
 *     @OA\Contact(
 *         name="Josip",
 *         email="josip.tomica01@gmail.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\Schema(
 *     schema="Branch",
 *     type="object",
 *     required={"BRANCH_ID", "ADDRESS", "CITY", "NAME", "STATE", "ZIP_CODE"},
 *     @OA\Property(property="BRANCH_ID", type="integer", example=1),
 *     @OA\Property(property="ADDRESS", type="string", example="3882 Main St."),
 *     @OA\Property(property="CITY", type="string", example="Waltham"),
 *     @OA\Property(property="NAME", type="string", example="Headquarters"),
 *     @OA\Property(property="STATE", type="string", example="MA"),
 *     @OA\Property(property="ZIP_CODE", type="string", example="02451")
 * )
 * @OA\PathItem(
 *   path="/branch",
 *   summary="Operations about branches"
 * )
 */
class BranchController extends Controller
{
    /**
     * @OA\Get(
     *     path="/branch",
     *     summary="Get a list of branches",
     *     tags={"Branch"},
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
        $branches = Branch::all();
        return response()->json($branches);
    }

    /**
     * @OA\Get(
     *     path="/branch/{id}",
     *     summary="Get a branch by ID",
     *     description="Returns a branch by its ID.",
     *     tags={"Branch"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the branch",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Branch")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Branch not found"
     *     )
     * )
     */
    public function show(Branch $branch)
    {
        return response()->json($branch);
    }

    /**
     * @OA\Post(
     *     path="/branch",
     *     summary="Create a new branch",
     *     tags={"Branch"},
     *     @OA\RequestBody(
     *         description="Branch object that needs to be added",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Branch")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Branch created successfully"
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

        $branch = Branch::create($request->all());

        return response()->json($branch, 201); // Status 201 (Created)
    }

    /**
     * @OA\Put(
     *     path="/branch/{id}",
     *     summary="Update a branch",
     *     description="Updates an existing branch.",
     *     tags={"Branch"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the branch to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Branch")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Branch updated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Branch not found"
     *     )
     * )
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'NAME' => 'required|string|max:255',
        ]);

        $branch->update($request->all());

        return response()->json($branch);
    }

    /**
     * @OA\Delete(
     *     path="/branch/{id}",
     *     summary="Delete a branch",
     *     description="Deletes a branch from the database.",
     *     tags={"Branch"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the branch to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Branch deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Branch not found"
     *     )
     * )
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return response()->json(null, 204); // 204 No Content response
    }
}
