<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::post('user/login',[LoginController::class, 'userLogin'])->name('userLogin');
Route::post('user/register',[LoginController::class, 'userRegister'])->name('userRegister');
Route::group( ['prefix' => 'user/passport','middleware' => ['auth:user-api','scopes:user'] ],function(){
   // authenticated staff routes here 
    Route::get('users',[LoginController::class, 'users']);
    Route::post('logout',[LoginController::class, 'logutUser']);
});  