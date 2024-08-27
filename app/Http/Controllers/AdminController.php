<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Models\Customer;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('admin.login');
    }
    public function table(){
        return view('admin.simple');
    }
    public function general(){
        return view('admin.general');
    }
    
}
