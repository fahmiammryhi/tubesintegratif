<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [AuthController::class, 'register']);
Route::get('register', [AuthController::class, 'showReg'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});

//user
Route::get('/user/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.game');
Route::get('/user/about', [App\Http\Controllers\UserController::class, 'tentangkami'])->name('user.about');
Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'profil'])->name('user.profile');
Route::put('/updateprofile/{id}', [UserController::class, 'updateprofile'])->name('updateprofile');
Route::get('/user/news', [App\Http\Controllers\UserController::class, 'news'])->name('user.news');

Route::get('/detailgame/{id}', [UserController::class, 'showDetail'])->name('detailgame');


//logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//admin crud
// Route::post('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.users');
Route::get('/admin/product', [App\Http\Controllers\AdminController::class, 'produk'])->name('admin.produk');

Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
Route::put('/updateuser/{id}', [AdminController::class, 'updateuser'])->name('updateuser');

Route::delete('/deletegame{id}', [AdminController::class, 'deletegame'])->name('deletegame');
Route::put('/updategame/{id}', [AdminController::class, 'updategame'])->name('updategame');
