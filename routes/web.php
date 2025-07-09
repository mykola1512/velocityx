<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'pagina_inicial'])->name('pagina_inicial');
Route::get('/projeto', [PageController::class, 'projeto'])->name('projeto');
Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');
Route::get('/equipa', [PageController::class, 'equipa'])->name('equipa');
Route::get('/comprar', function () {
    return view('comprar');
})->name('comprar');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::post('/encomenda', function(Request $request) {
    $data = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'morada' => 'required|string|max:500',
    ]);

    Mail::send('emails.encomenda', $data, function($message) use ($data) {
        $message->to('a9844@csmiguel.pt')->subject('Nova Encomenda VelocityX');
    });

    return back()->with('success', 'Encomenda enviada com sucesso! Obrigado!');
})->name('encomenda.enviar');