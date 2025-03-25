<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Davi";
    $idade = 21;
    // A variável é passada para a view com o nome da chave
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => 'programador']);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {
    return view('products');
});
