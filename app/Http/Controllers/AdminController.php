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
    public function create(Request $request){
        $customer = new Customer();
        $customer->branch_id = $request->branch_id;
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->mobile = $request->input('mobile');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->dob = $request->input('dob');
        $customer->save();
        return 'success';
    }
   
}
