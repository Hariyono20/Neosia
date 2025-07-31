<?php

use Illuminate\Support\Facades\Route;

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


Route::redirect('/', '/dashboard'); // Auto-redirect ke dashboard

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::view('/service', 'layouts.service')->name('service');