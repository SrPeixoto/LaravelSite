<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function index(Request $request){
        
        //Opção 1
        /*
        $dados = $request->all();
        //print_r($dados);
        $produto = $dados['Produto'];
        $preco = $dados['Preço'];
        $categoria = $dados['Categoria'];
        */

        //Opção 2
        /*
        $produto = $request->query('Produto');
        $preco = $request->query('Preço');
        $categoria = $request->query('Categoria');
        */

        //Opção 3 (Precisa de uma ROTA especifica{POST})
        /*
        $produto = $request->input('Produto');
        $preco = $request->input('Preço');
        $categoria = $request->input('Categoria');
        */

        //Opção 3 (Através de uma RAY)
        $dados = [
            'Produto'=>$request->input('Produto'),
            'Preço'=>$request->input('Preço'),
            'Categoria'=>$request->input('Categoria')
        ];
        
        return view('produtos', $dados);
    }

    public function excluir($id){

        echo $id;

    }
}
