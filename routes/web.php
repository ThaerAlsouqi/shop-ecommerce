<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/collection',function(){
    return view('collection');
})->name('collection');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('signin',function(){
    return view('partials.sign-in');
})->name('sign-in');

Route::get('signup',function(){
    return view('partials.sign-up');
})->name('sign-up');

