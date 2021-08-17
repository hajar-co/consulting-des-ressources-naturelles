<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Utilisateur;


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
//public Routes

Route::get('/actualities', [EquipeController::class, 'index']);
Route::get('/actualities/{id}', [EquipeController::class, 'showById']);
Route::post('/actualities/store', [EquipeController::class, 'store']);
Route::get('/actualities/{id}/edit', [EquipeController::class, 'edit']);
Route::put('/actualities/{id}', [EquipeController::class, 'update']);
Route::delete('/actualities/{id}', [EquipeController::class, 'destroy']);

// Route::post('/sign-up/create',[AuthController::class, 'store']);

//====> create manuellement pour tester
Route::post('/sign-up/createAdmin', function () {
    return User::create([
        'name' =>'test',
        'email'=>'test@gmail.com',
        'password' => bcrypt('test123'),
        'role' =>'2'
    ]);
    
});
Route::get('/dashClient', [AuthController::class, 'index'])->name('dashClient');
Route::post('/sign-up', [AuthController::class, 'signUp']);
Route::post('/login', [AuthController::class, 'loginUser']);



//protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/actualities', [EquipeController::class, 'index']);
    Route::post('/log-out', [AuthController::class, 'logout']);
});








Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
