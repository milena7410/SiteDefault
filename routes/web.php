<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicacoesController;

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

// rotas
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::get('/admin/check-login/user', [LoginController::class, 'verifyLogin'])->name('admin.check.login');

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [LoginController::class, 'painel'])->name('admin.dashboard');
});