<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    //
    public function index()
    {
        return view('admin.master.datauser');
    }
}
