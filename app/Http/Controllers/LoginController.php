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

        if(auth()->attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('list');
        }else{
            return redirect()->route('login');
        }
    }
    public function logout(){
        auth()->user()->logout();
        return redirect()->route('login');
    }
}
