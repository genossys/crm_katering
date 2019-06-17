<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    use AuthenticatesUsers;
    
    function login(){
        return view('umum.login');
    }

    function postlogin(Request $request){

        $login_type = filter_var($request->input('user_id'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('user_id')
        ]);

        if(Auth::attempt($request->only( $login_type,'password'))){
            
            if (Auth::user()->hak_akses == 'admin') {
                # code...
                return redirect('/admin');
            } else {
                # code...
                return redirect('/')->with('username','nama');
            }
            
        }else {
            return redirect()->back()->with('gagal','user id/password salah');

        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
