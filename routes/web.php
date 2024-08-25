<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Models\Student;


Route::controller(LoginController::class)->group(function(){
   
    Route::get('/', 'login')->name('login');
    Route::post('/userlogin', 'userLogin')->name('userLogin');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/table', 'table')->name('Table');
    Route::get('/general', 'general')->name('general');
    Route::get('/customer', function(){
        // return view('admin.customer');
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

Route::get('/login', function(){
    return view('login.login');
});

