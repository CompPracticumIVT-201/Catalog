<?php

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
Route::prefix('books')->group(function () {
    Route::get('list', [\App\Http\Controllers\bookController::class, 'getListBookAction']);
    Route::get('get', [\App\Http\Controllers\bookController::class, 'getBookAction']);
    Route::get('search', [\App\Http\Controllers\bookController::class, 'searchAction']);
});
