<?php

use Illuminate\Support\Facades\Route;
use App\Loja;
use App\Central;


//many-to-many
use App\Desenvolvedor;
use App\Projeto;
use App\Alocacao;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lojascentral', function () {
    $dojas = Loja::all();
    if(count($dojas)===0){
        echo "<h3>Você não possui nenhuma loja cadastrada</h3>";
    }
    else{
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Central</td></tr></thead>";
        foreach($dojas as $d){
            echo "<tr>";
            echo "<td>" . $d->nome ."</td>";
            echo "<td>" . $d->estoque ."</td>";
            echo "<td>" . $d->preco ."</td>";
            echo "<td>" . $d->central_id ."</td>";
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
            $djs = $c->lojas;
            if(count($djs)> 0){
                echo "<ul>";
                foreach($djs as $d){
                    echo "<li>". $d->nome . "</li> ";
                    echo "<li>". $d->estoque . "</li> ";
                    echo "<li>". $d->preco . "</li> ";
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
    $doja = new Loja();
    $doja->nome = "Loja PontoMais";
    $doja->estoque = 15;
    $doja->preco = 60000;
    $doja->central()->associate($c);
    $doja->save();
    return $doja->toJson();
});

Route::get('/desenvolvedor_projeto', function () {
    $dev = Desenvolvedor::with('projetos')->get();
    // return $dev->toJson()
    if(count($dev)===0){
        echo "<h3>Você não possui nenhuma loja cadastrada</h3>";
    }
    else{
        // echo "<table>";
        // echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Central</td></tr></thead>";
        foreach($dev as $d){

            echo "<p>Nome: " . $d->nome ."</p>";
            echo "<p> Cargo: " . $d->cargo ."</p>";
            if(count($d->projetos)>0){
                echo "Projetos: <br/>";
                echo "<ul>";
                foreach($d->projetos as $p){
                    echo "<li>";
                    echo "<p> Nome" . $p->id . ": ". $p->nome . " | " . "Horas: " . $p->estimativa_hora .  "</p>";
                    echo "</li>";
                }
                echo "</ul>";
            }
            echo "<hr/>";
        }
    }
});
