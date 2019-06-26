<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }


    function postlogin(Request $request)
    {

        $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('username')
        ]);

        if (Auth::attempt($request->only($login_type, 'password'))) {
            return redirect('/');
        } else {
            return redirect()->back()->with('gagal', 'user id/password salah');
        }
    }
}
