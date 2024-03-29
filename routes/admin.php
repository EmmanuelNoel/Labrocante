<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\HomeController;
use App\Http\Controllers\Admin\Categorie\CategorieController;
use App\Http\Controllers\Admin\Products\ProductController;
use App\Http\Controllers\Admin\Users\ManagerController;
use App\Http\Controllers\Admin\Users\UserController;

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

        Route::resource('categories', CategorieController::class);

        Route::resource('produits', ProductController::class);

        Route::resource('managers', ManagerController::class);

        Route::resource('users', UserController::class);

        
    });
});
