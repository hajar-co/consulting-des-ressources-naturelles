<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AdminController;
use App\Models\User;



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
// Route::post('/sign-up/createAdmin', function () {
//     return User::create([
//         'name' =>'client',
//         'email'=>'client@gmail.com',
//         'password' => bcrypt('client123'),
//         'role' =>'3'
//     ]);
    
// });
Route::get('/dashClient', [AuthController::class, 'index'])->name('dashClient');
Route::post('/sign-up', [AuthController::class, 'signUp']);
Route::post('/login', [AuthController::class, 'loginUser'])->name('loginUser');

Route::post('/addMembre', [AdminController::class, 'store']);
Route::put('/equipe/{id}', [AdminController::class, 'update']);
Route::delete('/equipe/{id}', [AdminController::class, 'destroy']);




//protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/actualities', [EquipeController::class, 'index']);
    Route::post('/log-out', [AuthController::class, 'logout']);
    Route::post('/send-form', [UtilisateurController::class, 'store']);
});








Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
