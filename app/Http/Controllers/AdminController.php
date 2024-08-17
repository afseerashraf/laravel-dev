<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('Admin.login');
    }
    public function table(){
        return view('admin.simple');
    }
    public function general(){
        return view('admin.general');
    }
}
