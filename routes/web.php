<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genres;

Route::get('/', function () {
    $data['genres'] = Genres::all();
    
    return view('work.home',$data);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
