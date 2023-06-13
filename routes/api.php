<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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
Route::get('mahasiswa/read', [APIController::class, 'read']);
Route::post('mahasiswa/create', [APIController::class, 'create']);
Route::get('mahasiswa/edit/{id}', [APIController::class, 'edit']);
Route::post('mahasiswa/update/{id}', [APIController::class, 'update']);
Route::get('mahasiswa/delete/{id}', [APIController::class, 'delete']);

