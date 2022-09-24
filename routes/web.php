<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;



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

//ROUTE HOME
Route::get('/', [AuthController::class, 'home'])->name('home');

//ROUTE CHECK LOGIN
Route::get('/admin', [AuthController::class, 'index'])->name('login');
Route::post('/admin/check-login/user', [AuthController::class, 'verifyLogin', ])->name('admin.check.login');

//ROUTE MIDDLEWARE
Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
        Route::get('/users/show', [UsersController::class, 'index'])->name('users.show')->middleware('auth');
        Route::get('/users/edit', [UsersController::class, 'edit'])->name('users.edit')->middleware('auth');



});

