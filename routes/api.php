<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\CondidatController;

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

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'delete']);

Route::get('recruteurs', [RecruteurController::class, 'index']);
Route::get('recruteurs/{id}', [RecruteurController::class, 'show']);
Route::post('recruteurs', [RecruteurController::class, 'store']);
Route::put('recruteurs/{id}', [RecruteurController::class, 'update']);
Route::delete('recruteurs/{id}', [RecruteurController::class, 'delete']);

Route::get('condidats', [CondidatController::class, 'index']);
Route::get('condidats/{id}', [CondidatController::class, 'show']);
Route::post('condidats', [CondidatController::class, 'store']);
Route::put('condidats/{id}', [CondidatController::class, 'update']);
Route::delete('condidats/{id}', [CondidatController::class, 'delete']);