<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

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
    public function registerCustomer(){

    }
}
