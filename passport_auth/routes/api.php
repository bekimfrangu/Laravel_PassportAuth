<?php

use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/register', [UserController::class, 'register']);
// Route::post('/login', [UserController::class, 'login']);

// Route::apiResource('/employee', 'EmployeeController')->middleware('auth:api');

// Users
// Passport PAT
// Route::prefix('passport')->controller(UserController::class)->group(function () {
//     Route::post('/login', 'login');
//     Route::post('/register', 'register');
    
// });

// Route::post('admin/login',[LoginController::class, 'adminLogin'])->name('adminLogin');
// Route::group( ['prefix' => 'admin','middleware' => ['auth:admin-api','scopes:admin'] ],function(){
//    // authenticated staff routes here 
//     Route::get('dashboard',[LoginController::class, 'adminDashboard']);
// });

// Route::post('user/login',[LoginController::class, 'userLogin'])->name('userLogin');
// Route::group( ['prefix' => 'user','middleware' => ['auth:user-api','scopes:user'] ],function(){
//    // authenticated staff routes here 
//     Route::get('dashboard',[LoginController::class, 'userDashboard']);
// });