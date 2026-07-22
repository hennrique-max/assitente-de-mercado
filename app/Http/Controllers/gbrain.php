<?php

namespace App\Http\Controllers;

class gbrain extends Controller
{
    private $nome = 'gorge';
    private $compras = ['alho', 'cebolinha', 'tomate', 'batata'];
    public function index()
    {
        return view('base', [
            'nome' => $this->nome, 
            'compras' => $this->compras]);
    }
}
