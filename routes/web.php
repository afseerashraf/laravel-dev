<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Models\Student;


Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('adminlogin', 'adminLogin')->name('adminLogin');
    Route::get('logout', 'logout')->name('logout');
    Route::get('/customer', 'customer')->name('customerLoginView');
    Route::post('/customoerlogin', 'doLogin')->name('customerLogin');
});
Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
        Route::get('table', 'table')->name('Table');
        Route::get('general', 'general')->name('general');
    });
});

    Route::prefix('customer')->group(function () {
        Route::controller(CustomerController::class)->group(function () {
            Route::get('customer', 'customer')->name('create.customer');
            Route::post('create', 'create')->name('create.customer');
            Route::get('detiles', 'detiles')->name('customer.detiles');
        });
    });
 Route::middleware('auth')->group(function () {  
    Route::prefix('student')->group(function () {
        Route::controller(StudentController::class)->group(function () {
            Route::get('index', 'index')->name('createStudent');
            Route::post('create', 'create')->name('create.student');
            Route::post('search', 'search')->name('search');
            Route::get('list', 'getStudents')->name('list');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update', 'update')->name('student.updated');
            Route::get('delete/{id}', 'delete')->name('student.delete');
        });
    });
});
