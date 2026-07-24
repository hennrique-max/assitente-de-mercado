<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\cadastrorequest;
use App\Models\User;

class cadastrocontroller extends Controller
{
    public function index()
    {
        return view('cadastro');
    }
    public function store(cadastrorequest $request)
    {
        $user = user::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => ($request->input('password')),
        ]);
        auth()->login($user);
        return redirect()->route('site.dashboard');
    }
}
