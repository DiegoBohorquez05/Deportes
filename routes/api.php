<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthController::class, 'login']);

Route::group(['prefix' => 'admins', 'middleware' => ['auth', 'role:admin']], function ($router){
    Route::post('', [TeamController::class, 'create']);
    // Route::get('/{id}', [CustomerController::class, 'show']);
    // Route::put('/{id}', [CustomerController::class, 'update']);
    // Route::post('/{id}', [CustomerController::class, 'destroy']);
});