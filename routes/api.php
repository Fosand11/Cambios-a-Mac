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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'index']); // Ritrives a list of users

Route::get('/users/{id}', [UserController::class, 'show']); //Retrives a specific user

Route::post('/users', [UserController::class, 'create']); //create a new user

Route::put('/update/user/{user}', [UserController::class, 'update']); //Update user #id

Route::delete('/delete/users/{id}', [UserController::class, 'destroy']); //Delete user #id
