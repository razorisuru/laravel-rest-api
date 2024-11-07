<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api_key')->get('/student', [StudentController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);

Route::get('/student/show/{id}', [StudentController::class, 'show']);

Route::post('/student', [StudentController::class, 'insert']);

Route::put('/student/edit/{id}', [StudentController::class, 'edit']);

Route::delete('/student/del/{id}', [StudentController::class, 'delete']);
