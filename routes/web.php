<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'pagina_inicial'])->name('pagina_inicial');
Route::get('/projeto', [PageController::class, 'projeto'])->name('projeto');
Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');
Route::get('/equipa', [PageController::class, 'equipa'])->name('equipa');
Route::get('/comprar', function () {
    return view('comprar');
})->name('comprar');
