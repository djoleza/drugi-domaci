<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamionController;
use App\Http\Controllers\VozacController;

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

Route::get('kamioni', [KamionController::class, 'index']);
Route::get('kamioni/{id}', [KamionController::class, 'show']);
Route::post('kamioni', [KamionController::class, 'store']);
Route::delete('kamioni/{id}', [KamionController::class, 'destroy']);
Route::get('vozaci', [VozacController::class, 'index']);
Route::get('vozaci/{id}', [VozacController::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
