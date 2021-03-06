<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function authenticate(Request $request)
    {
    	$credentials = $request->only('username', 'password');

    	if (Auth::attempt($credentials)) {
    		return redirect()->intended($request->company);
    	}

    	$company = substr(redirect()->intended()->getTargetUrl(), strlen('http://gbrica.test/'));

    	// dd($company);

    	return view('auth.login', compact('company'));
    }

    function logout()
    {
    	Auth::logout();

    	return redirect('/');
    }
}
