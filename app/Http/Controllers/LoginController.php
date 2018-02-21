<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function index(){
    	return view('login');
    }

    public function login(){
    	$successful_login = Auth::attempt([
    		'email' => request('email'),
    		'password' => request('password')
    	]); //returns bool

    	if($successful_login){
    		return redirect('/profile');
    	}
    	else{
    		return redirect('/login');
    	}

    }

    public function logout(){
    	Auth::logout(); //destroys user in session
    	return redirect('/login');
    }
}
