<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StudentController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('create', ([Studentcontroller::class, 'create']));
Route::get('index', ([Studentcontroller::class, 'index']));
