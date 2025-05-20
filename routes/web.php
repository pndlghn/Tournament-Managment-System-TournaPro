<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/knowledge', function () {
    return view('knowledge');
});
Route::get('/contact', function () {
    return view('contact');
});
