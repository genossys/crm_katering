<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Master\customerModel;

class customerController extends Controller
{
    use RegistersUsers;
    //
    public function index(){

    }

    public function showRegistrasiForm(){
        $this->middleware('guest');
        return view('auth.register');
    }

    //validasi input
    private function isValid(Request $r)
    {
        $messages = [
            'required'  => 'Field :attribute Tidak Boleh Kosong',
            'max'       => 'Filed :attribute Maksimal :max',
        ];

        $rules = [
            'username' => 'required|max:191|unique:tb_user,username',
            'email' => 'required|max:191',
            'nohp' => 'required|numeric|digits_between:1,15',
            'password' => 'required|string|min:8|confirmed',
        ];

        return Validator::make($r->all(), $rules, $messages);
    }

    public function register(Request $r)
    {
        $this->middleware('guest');
        $this->isValid($r)->validate();
        # code...
        try {
            $member = new customerModel();
            $member->username = $r->username;
            $member->email = $r->email;
            $member->password = Hash::make($r->password);
            $member->nohp = $r->nohp;
            $member->alamat = $r->alamat;
            $member->save();
            $credentials = $r->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/');
            } else {
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            return 'Error Program ' . $th;
        }
    }

    
}
