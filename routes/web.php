<?php

use Illuminate\Support\Facades\Route;
use App\Loja;
use App\Central;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lojascentral', function () {
    $lojas = Loja::all();
    if(count($lojas)===0){
        echo "<h3>Você não possui nenhuma loja cadastrada</h3>";
    }
    else{
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Central</td></tr></thead>";
        foreach($lojas as $l){
            echo "<tr>";
            echo "<td>" . $l->nome ."</td>";
            echo "<td>" . $l->estoque ."</td>";
            echo "<td>" . $l->preco ."</td>";
            echo "<td>" . $l->central_id ."</td>";
            echo "</tr>";
        }
    }

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/centraisloja', function () {
    $centrais = Central::all();
    if(count($centrais)===0){
        echo "<h3>Você não possui nenhuma loja cadastrada</h3>";
    }
    else{
        // echo "<table>";
        // echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Central</td></tr></thead>";
        foreach($centrais as $c){
            echo "<p>" . $c->id ."</p>";
            $ljs = $c->lojas;
            if(count($ljs)> 0){
                echo "<ul>";
                foreach($ljs as $l){
                    echo "<li>". $l->nome . "</li> ";
                    echo "<li>". $l->estoque . "</li> ";
                    echo "<li>". $l->preco . "</li> ";
                }
                echo "</ul>";
            }
        }
    }

});

Route::get('/centraisloja/json', function () {
    $centrais = Central::with('lojas')->get();
    return $centrais->toJson();
});

Route::get('/adicionarloja', function () {
    $c = Central::find(1);
    $loja = new Loja();
    $loja->nome = "Loja PontoMais";
    $loja->estoque = 15;
    $loja->preco = 60000;
    $loja->central()->associate($c);
    $loja->save();
    return $loja->toJson();
});
