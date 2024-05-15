<?php

use Illuminate\Support\Facades\Route;

Route::get('/ventas', function () {
    return view('ventas');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/', function () {
    return view('index');
});
