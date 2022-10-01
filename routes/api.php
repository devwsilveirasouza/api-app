<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Models\Api\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Get all employees
Route::get('employees', [EmployeeController::class, 'getEmployee']);

// Get Specific employee detail
Route::get('employees/{id}', [EmployeeController::class, 'getEmployeeById']);

// Add Employee
Route::post('addEmployee', [EmployeeController::class, 'addEmployee']);

// Update Employee
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

// Delete Employee
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
