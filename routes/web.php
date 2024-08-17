<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::controller(AdminController::class)->group(function(){
    Route::get('/','index')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/table', 'table')->name('Table');
    Route::get('/general', 'general')->name('general');
});
