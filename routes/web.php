<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('work.home');
});


// Route::view("/insert",)


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
