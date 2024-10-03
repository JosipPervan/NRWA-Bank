<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\AccTransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// --------------------- Route za Products (Primjer profin) ------------------------  //

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// web.php
Route::resource('product', App\Http\Controllers\ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ------------------------- Route za Department ----------------------------  //

Route::resource('department', DepartmentController::class);

// ------------------------- Route za Branch ----------------------------  //

Route::resource('branch', BranchController::class);

// ------------------------- Route za Account ----------------------------  //

Route::resource('accounts', AccountController::class);

// ------------------------- Route za Customer ----------------------------  //

Route::resource('customer', CustomerController::class);
Route::get('/customers/search', [CustomerController::class, 'search'])->name('customers.search');

// ------------------------- Route za Business ----------------------------  //

Route::resource('business', BusinessController::class);

// ------------------------- Route za Officer ----------------------------  //

Route::resource('officer', OfficerController::class);

// ------------------------- Route za Employee ----------------------------  //

Route::resource('employee', EmployeeController::class);

// ------------------------- Route za Individual ----------------------------  //

Route::resource('individual', IndividualController::class);

// ------------------------- Route za AccTransaction ----------------------------  //

Route::resource('transactions', AccTransactionController::class);

// ------------------------- Route za Product ----------------------------  //

Route::resource('product', ProductController::class);

// ------------------------- Route za ProductType ----------------------------  //

Route::resource('product_type', ProductTypeController::class);
