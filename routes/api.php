<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DepartmentController;
use App\Http\Controllers\api\EmployeeController;
use App\Http\Controllers\api\BranchController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\api\OfficerController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccTransactionController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {

    return response()->json([
        'message' => 'Welcome to the Laravel API'
    ]);
});

// ------------------------- DEPARTMENT ----------------------------  //

Route::apiResource('department', DepartmentController::class);

// ------------------------- BRANCH ----------------------------  //

Route::apiResource('branch', BranchController::class);

// ------------------------- EMPLOYEE ----------------------------  //

Route::apiResource('employee', EmployeeController::class);

// ------------------------- BUSINESS ----------------------------  //

Route::apiResource('business', BusinessController::class);

// ------------------------- ACCOUNT ----------------------------  //

Route::apiResource('account', AccountController::class);

// ------------------------- ACC_TRANSACTION ----------------------------  //

Route::apiResource('acc_transaction', AccTransactionController::class);

// ------------------------- OFFICER ----------------------------  //

Route::apiResource('officer', OfficerController::class);

// ------------------------- PRODUCT ----------------------------  //

Route::apiResource('product', ProductController::class);

// ------------------------- CUSTOMER ----------------------------  //

Route::apiResource('customer', CustomerController::class);

// ------------------------- PRODUCT_TYPE ----------------------------  //

Route::apiResource('product_type', ProductTypeController::class);

// ------------------------- INDIVIDUAL ----------------------------  //

Route::apiResource('individual', IndividualController::class);

Route::options('/{any}', function () {
    return response('', 200)
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
})->where('any', '.*');

// routes/api.php
Route::get('/search/departments', [DepartmentController::class, 'search']);
