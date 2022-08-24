<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function publicacoes(Request $request)
    {
        return view('layouts.publicacoes.publicacoes');
    }
}
