<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::controller(AdminController::class)->group(function(){
    Route::get('/','index')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/table', 'table')->name('Table');
    Route::get('/general', 'general')->name('general');
    Route::get('/customer', function(){
        return view('admin.customer');
    });
    Route::post('/create', 'create')->name('create');
});

Route::prefix('student')->group(function(){
    Route::controller(StudentController::class)->group(function(){
        Route::get('/index', 'index')->name('create');
        Route::post('/create', 'create')->name('create.student');
        Route::get('/list', 'getStudents')->name('list');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('student.updated');
        Route::get('/delete/{id}', 'delete')->name('student.delete');
    });
});

