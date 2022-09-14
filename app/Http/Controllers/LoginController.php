<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.login.login');
    }

    public function dashboard(Request $request){
       return view('backend.admin.master');
    }

    public function verifyLogin(Request $request)
    {
    
        $attributes = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt($attributes)) {
            $resultado['success'] = true;
            return response()->json($resultado);
        }

        $resultado['success'] = false;
        return response()->json($resultado);
    }
}
