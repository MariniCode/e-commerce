<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/env-check', function () {
    return env('DB_PASSWORD');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

});

