<?php


namespace App\Http\Controllers;

class PageController extends Controller
{
    public function pagina_inicial()
    {
        return view('pagina_inicial');
    }
}