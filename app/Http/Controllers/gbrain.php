<?php

namespace App\Http\Controllers;

class gbrain extends Controller
{
    private $nome = 'gorge';
    private $compras = ['alho', 'cebolinha', 'tomate', 'batata'];
    public function index()
    {
        $name='fulano';
        $compras=['arroz', 'feijão', 'macarrão', 'carne'];

        return view('base', compact('name', 'compras'));
    }
   public function dashboard() {
        return view('dashboard');
    }

    }

