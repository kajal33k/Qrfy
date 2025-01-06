<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/plans', function () {
    return view('frontend.plans');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/api', function () {
    return view('frontend.api');
});

Route::get('/staticqr', function () {
    return view('frontend.staticqr');
});

Route::get('/typesofqr', function () {
    return view('frontend.typesofqr');
});