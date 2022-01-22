<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentApiController;

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

// Menampilkan data siswa melalui API
Route::get('/students', [studentApiController::class, 'index']);
Route::get('/students/{id}', [studentApiController::class, 'getById']);
Route::get('/students/by_nim/{nim}', [studentApiController::class, 'getByNim']);

// Menambah data siswa melalui API
Route::post('/students', [studentApiController::class, 'save']);

// Mengubah data siswa melalui API
Route::put('/students/{id}', [studentApiController::class, 'update']);

// Menghapus data siswa melalui API
Route::delete('/students/{id}', [studentApiController::class, 'delete']);
