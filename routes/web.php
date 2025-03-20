<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Frontend Routes
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
    Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
    Route::get('/login', [HomeController::class, 'login'])->name('frontend.login');
    Route::get('/register', [HomeController::class, 'register'])->name('frontend.register');
    Route::get('/plans', [HomeController::class, 'plans'])->name('frontend.plans');
    Route::get('/faq', [HomeController::class, 'faq'])->name('frontend.faq');
    Route::get('/api', [HomeController::class, 'api'])->name('frontend.api');
    Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
    Route::get('/staticqr', [HomeController::class, 'staticQr'])->name('frontend.staticqr');
    Route::get('/qrtype', [HomeController::class, 'qrtype'])->name('qrtype');
    Route::get('/typesofqr', [HomeController::class, 'typesOfQr'])->name('frontend.typesofqr');
});
