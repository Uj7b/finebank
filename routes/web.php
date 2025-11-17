<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
})->name("login");
Route::get('signup', function () {
    return view('signup');
});
Route::get('forgot-password', function () {
    return view('forgot-password');
});
Route::get('terms-of-services', function () {
    return "terms-of-services";
})->name("terms-of-services");
