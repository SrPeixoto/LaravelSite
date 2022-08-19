<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
        
        $usuario = "Matheus Peixoto";
        $perfil = "Estagiário";
        $empresa = "Resolute IT";
       
        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa
        ];

        return view('home', $dados);
    }
}
