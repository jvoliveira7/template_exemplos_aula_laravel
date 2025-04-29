<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaControllers;

Route::get('/pessoas',[PessoaController::class,'index'])->name('pessoas.index');
Route::get('/pessoas/create',[PessoaController::class,'create']);
Route::post('/pessoas',[PessoaController::class,'store'])->name('pessoas.store');
Route::resource('/eixo', 'App\Http\Controllers\EixoController');

Route::get('/simples', function () {
    return "<h1>Rota Simples</h1>";
    });

Route::get('/parametro/{a}', function ($a) {
        return "<h1>Parâmetro recebido: $a</h1>";
        });

        Route::get('/parametros/{a}/{b}/{c}', function ($a, $b, $c) {
            return "<h1>Parâmetros recebidos: $a / $b / $c</h1>";
            });
            Route::get('/opcionais/{a}/{b}/{c?}', function ($a, $b, $c=0) {
            });
            
Route::get('/regras/{a}/{b}', function ($a, $b) {
                return "<h1>Parâmetros recebidos: $a / $b</h1>";
                })->where('a', '[0-9]+')->where('b', '[A-Za-z]+');

                Route::prefix('/agrupamento')->group(function() {
                    Route::get('/', function() {
                    return "<h1>Agrupamento: rota raiz</h1>";
                    })->name('agrupamento');
                    Route::get('/um', function() {
                    return "<h1>Agrupamento: rota um</h1>";
                    })->name('agrupamento.um');
                    Route::get('/dois', function() {
                        return "<h1>Agrupamento: rota dois</h1>";
})->name('agrupamento.dois');
});

Route::get('/redirecionar', function () {
    return redirect()->route('agrupamento');
    });

    Route::post('/add', function (Request $request) {
        return "<h1>Requisição POST</h1>";
        });

