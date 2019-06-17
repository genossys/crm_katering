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

    public function login(){
        return view('umum.login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    function postlogin(Request $request)
    {

        $login_type = filter_var($request->input('user_id'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('user_id')
        ]);

        if (Auth::attempt($request->only($login_type, 'password'))) {
            $user = Auth::user();
            // return response()->json([
            //     'data' => $user
            // ]);
            if ($user->hakAkses == 'admin') {
                # code...
                return redirect('/admin');
            } else {
                # code...
                return redirect('/');
            }
        } else {
            return redirect()->back()->with('gagal', 'user id/password salah');
        }
    }


}
