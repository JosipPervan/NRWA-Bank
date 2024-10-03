<?php

namespace App\Http\Controllers\api;

use OpenApi\Annotations as OA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Server(
 *     url="http://127.0.0.1:8000/api",
 *     description="Local API Server"
 * )
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     in="header",
 *     name="Authorization",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */

class HomeController extends Controller
{
    /**
     * @OA\PathItem(
     *     path="/api/docs",
     *     @OA\Post(
     *         tags={"Bank API"},
     *         summary="Create a new thrift store item",
     *         description="This endpoint allows you to create a new item in the thrift store.",
     *         @OA\Response(
     *             response=200,
     *             description="Successful response"
     *         ),
     *         @OA\Response(
     *             response=400,
     *             description="Bad Request"
     *         ),
     *         security={{"bearerAuth": {}}}
     *     )
     * )
     */
}
