<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.page.home');
});
Route::get('/contact', function () {
    return view('Frontend.page.contact');
});

Route::get('/about',[PageController::class,'about'])->name('about');

