<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function adminLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('list');
        }else{
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function customer(){
        return view('customer.login');
    }
    public function doLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;

        if(auth()->guard('customer')->attempt(['email'=> $email, 'password' => $request->password])){
            return redirect()->route('list');
        }else{
            return redirect()->route('customerLoginView');
        }
    }
}
