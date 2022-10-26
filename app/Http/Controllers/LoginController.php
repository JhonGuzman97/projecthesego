<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        if(Auth::chek()){
            return view('dashboard.dashboard');
        }
        return view('/');
    }

    public function login(LoginRequest $request){

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/')->withErrors('Usuario y/o Contraseña Inconrrectos');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request,$user){
            return redirect('dashboard');
    }

    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
