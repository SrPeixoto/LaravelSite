<?php

use Illuminate\Support\Facades\Route;

// ######### ADCIONAR OS CONTROLES AQUI!! ########
use App\Http\Controllers\HomeController;
use App\Http\Controllers\produtoController;
use App\Http\Controllers\loginP;


Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos', [produtoController::class, 'index']);
Route::post('/produtos', [produtoController::class, 'index']);
Route::get('/produtos/excluir/{id}', [produtoController::class, 'excluir']);

Route::get('/login', [loginP::class, 'indexLogin']);
Route::post('/login', [loginP::class, 'indexLogin']);


// Route::get('/login', function(){
//     return view('loginP');
// });






// == CHAMAR CONTROLLERS ABAIXO DA VERSÃO 8.0 ==
//Route::get('/', 'HomeController@index');

// == CHAMAR CONTROLLERS ACIMA DA VERSÃO 8.0 ==
// Route::get('/', [HomeController::class, 'index']);

/* Route::get('/', function(){
    return view('home');
}); 

// ======== TODAS AS POSSÍVEIS ROTAS ========

Route::view('/', 'home');

//Rota Fixa (Estavél)
Route::get('/produtos', function(){
    echo "Pagina de Produtos";
});


//Rota Dinâmica com variável
Route::get('/produtos/{nomeProduto}', function($nomeProduto){
    echo "Produto: ".$nomeProduto;
});

Route::get('/produtos/{nomeProduto}/comentario/{idComentário}', function($nomeProduto, $idComentário){
    echo "Produto: ".$nomeProduto.", Comentário: ".$idComentário;
});*/

