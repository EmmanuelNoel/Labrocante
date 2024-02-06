<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('header', function () {
    return view('header2');
})->name('header');
Route::get('bienvenue', function () {
    return view('bienvenue');
})->name('bienvenue');
Route::get('detailproduit', function () {
    return view('detailproduit');
})->name('detailproduit');
Route::get('suggestion', function () {
    return view('suggestion');
})->name('suggestion');
Route::get('acheter', function () {
    return view('categories');
})->name('categories');
Route::get('articlefavoris', function () {
    return view('articlefavoris');
})->name('articlefavoris');
Route::get('panier', function () {
    return view('panier');
})->name('panier');

Route::get('home', function () {
    return view('home');
})->name('home');

// Otp routes
Route::get('/verify-otp/{id}', [VerificationController::class, 'showVerificationForm'])->name('verify-otp');
Route::post('/validate-otp', [VerificationController::class, 'valideOtpCode'])->name('validate-otp');
Route::get('/sendOtpCode/{id}', [VerificationController::class, 'sendOtpCode'])->name('sendOtpCode');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
include 'admin.php';
