<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\RouteController;

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

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth:sanctum'])->post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/v1/routes/{id}', [RouteController::class, 'index'])->name('routes.index');
Route::prefix('/v1')->middleware('auth:sanctum')->group(function () {
});
