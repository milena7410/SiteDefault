<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('frontend.index');
});

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin/check-login/user', [LoginController::class, 'verifyLogin', ])->name('admin.check.login');

Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout')->middleware('auth');
});
