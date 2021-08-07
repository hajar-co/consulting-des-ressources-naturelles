<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;

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
// crud API for articles
Route::get('/actualities', [EquipeController::class, 'index']);
Route::get('/actualities/{id}', [EquipeController::class, 'showById']);
Route::post('/actualities/store', [EquipeController::class, 'store']);
Route::get('/actualities/{id}/edit', [EquipeController::class, 'edit']);
Route::put('/actualities/{id}', [EquipeController::class, 'update']);
Route::delete('/actualities/{id}', [EquipeController::class, 'destroy']);











Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
