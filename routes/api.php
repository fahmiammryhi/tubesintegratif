<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\OrderController;

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

//CRUD API LOCALHOST
Route::get('produkapi',[AdminController::class, 'produkapi']);
Route::post('produkapi',[AdminController::class, 'store']);
Route::get('produkapi/{id}',[AdminController::class, 'show']);
Route::get('produkapi/{id}/edit',[AdminController::class, 'edit']);
Route::put('produkapi/{id}/edit',[AdminController::class, 'update']);
Route::delete('produkapi/{id}/delete',[AdminController::class, 'destroy']);


//API ORANGLAIN
Route::get('character-list', [ApiController::class, 'getCharacterList']);
Route::get('character-list/{name}', [ApiController::class, 'show']);
Route::get('charakterlist', [ApiController::class, 'getFreeGames']);


//API MIDTRANS
Route::post('/callback',[OrderController::class,'callback']);