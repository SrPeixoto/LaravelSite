<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginP extends Controller
{
    public function indexLogin(Request $request){
        $dados = [
            'Usuario'=>$request->input('lUsuario'),
            'Senha'=>$request->input('lSenha')
        ];
        
        return view('loginP', $dados);
    }
}
