<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin/')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('login', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'showVerificationForm'])->name('login');
        Route::post('login', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'storeData'])->name('storeData');
        Route::get('forgotPassword', [\App\Http\Controllers\Admin\Auth\AuthController::class, 'showforgotPasswordForm'])->name('forgotPassword');
        Route::any('deconnexion', [AuthController::class, 'logout'])->name('logout');

    });
});


Route::middleware(['acessDashboard'])->group(function () {
Route::prefix('admin/')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('dashboard', [\App\Http\Controllers\Admin\Auth\HomeController::class, 'dashboard'])->name('dashboard');
    });
});
});
