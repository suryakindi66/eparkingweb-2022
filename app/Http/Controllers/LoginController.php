<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function index()
    {   
        
    return view('login.login');
    }
    public function postlogin(Request $request)
    {
      if(Auth::attempt($request->only('email','password'))){
          $request->session()->regenerate();
        return redirect()->intended('/eparking');
      }
      return redirect('/login');
        
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
      
    }
    
}
