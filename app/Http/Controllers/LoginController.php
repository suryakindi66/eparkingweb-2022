<?php

namespace App\Http\Controllers;
use App\Models\User;
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
      if(Auth::attempt($request->only('name','password'))){
          $request->session()->regenerate();
        return redirect()->intended('/admin/eparking');
      }
      $request->session()->flash('erorlogin' , 'Username / Password Salah !');
      return redirect('/admin/login');
        
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
      
    }

    public function register()
    {
        return view('login.register');
      
    }
    public function postregister(Request $request)
    {
      /*  Ngecek Email dan username secara bersamaan
      
      if (User::where('email', $request->email)->exists() || User::where('name', $request->username)->exists()) {
      $request->session()->flash('already', 'User Sudah Terdaftar');
        return redirect('/admin/register');
      }
      */

      /* Ngecek Email Dan username secara spesifik
         if (User::where('email', $request->email)->exists()) {
        $request->session()->flash('already-email', 'Email Sudah Terdaftar');
        return redirect('/admin/register');
    } 
      elseif(User::where('name', $request->username)->exists()) {
        $request->session()->flash('already-username', 'Username Sudah Terdaftar');
        return redirect('/admin/register');
    }

    */
    if (User::where('email', $request->email)->exists() || User::where('name', $request->username)->exists()){
      $request->session()->flash('already', 'Email / Username Sudah Terdaftar! Pastikan Email Dan Username Belum Pernah Terdaftar');
      return redirect('/admin/register');

    }
   
      $register = new User;
      $register->name = $request->username;
      $register->email = $request->email;
      $register->password = bcrypt($request->password);
      $register->save();
      $request->session()->flash('sukses', 'Registrasi Berhasil, Silahkan Log in!');
      return redirect('/admin/register');
    }
    
}
