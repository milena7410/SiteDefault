<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function index(Request $request)
    {
        return view('backend.login');
    }

    public function dashboard(Request $request){
       return view('backend.admin.master');
    }

    public function logout(){
        Auth::logout();
        return view('backend.login');
    }

    public function verifyLogin(Request $request)
    {
        if (Auth::attempt($request->all())) {
            $resultado['success'] = true;
            return response()->json($resultado);
        }

        $resultado['error'] = false;
        return response()->json($resultado);

    }
}
