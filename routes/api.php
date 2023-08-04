<?php

use App\Http\Controllers\AdminController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('produkapi',[AdminController::class, 'produkapi']);
Route::post('produkapi',[AdminController::class, 'store']);
Route::get('produkapi/{id}',[AdminController::class, 'show']);
Route::get('produkapi/{id}/edit',[AdminController::class, 'edit']);
Route::put('produkapi/{id}/edit',[AdminController::class, 'update']);
Route::delete('produkapi/{id}/delete',[AdminController::class, 'destroy']);