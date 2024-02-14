<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Otp\VerificationController;
use App\Http\Controllers\Produits\ProduitsController;
use App\Http\Controllers\Users\NewSubscriberController;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('header', function () {
    return view('header2');
})->name('header');

Route::get('bienvenue', function () {
    return view('auth.bienvenue');
})->name('bienvenue');

Route::get('detailproduit/{id}', [ProduitsController::class, 'produit_details'])->name('detailproduit');

Route::get('suggestion', function () {
    return view('suggestion');
})->name('suggestion');

Route::get('acheter', function () {
    return view('categories.categories');
})->name('categories');
Route::get('articlefavoris', function () {
    return view('articles.articlefavoris');
})->name('articlefavoris');

Route::get('panier', function () {
    return view('panier');
})->name('panier');

// Newsletters
//Route::get('/subscribers', [NewSubscriberController::class, 'create'])->name('subscribers.store');
Route::post('/subscribers', [NewSubscriberController::class, 'store'])->name('subscribers.store');

// Otp routes
Route::get('/verify-otp/{id}', [VerificationController::class, 'showVerificationForm'])->name('verify-otp');
Route::post('/validate-otp', [VerificationController::class, 'valideOtpCode'])->name('validate-otp');
Route::get('/sendOtpCode/{id}', [VerificationController::class, 'sendOtpCode'])->name('sendOtpCode');
Route::get('/verificationSuccessfully', [VerificationController::class, 'verificationSuccessfully'])->name('verificationSuccessfully');


// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

require __DIR__ . '/auth.php';
include 'admin.php';
