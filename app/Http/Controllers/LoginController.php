<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.login.login');
    }

    public function painel(Request $request){
       return view('backend.admin.master');
    }
}
