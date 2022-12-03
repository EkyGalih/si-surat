<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function register(){
		return view('auth.register');
	}

    public function login(){
    	return view('auth.login');
    }

    public function postLogin(Request $r){
    	if (filter_var($r->username, FILTER_VALIDATE_EMAIL)) {
            $credentials = [
                'email'  => $r->username,
                'password' => $r->password
            ];
        } else {
            $credentials = [
                'username' => $r->username,
                'password' => $r->password
            ];
        }

        $user = User::where('username', '=', $r->username)->first();

        if (Auth::attempt($credentials, $r->remember)) {
            return redirect()->intended('welcome');
        }
    }

    public function logout(){
       Auth::logout();
       return redirect('login');
   }
}
