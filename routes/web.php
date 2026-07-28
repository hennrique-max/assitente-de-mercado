<?php
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\sitecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\compracontroller;
use App\Http\Controllers\gbrain;
use App\Http\Requests\comprarequest;

Route::get('/', [gbrain::class, 'index'])->name('site.index');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('site.authenticate');

Route::get('/cadastro', [CadastroController::class, 'index'])->name('site.cadastro');

Route::post('/cadastro', [CadastroController::class, 'store'])->name('auth.cadastro');

Route::middleware('auth')-> group(function () {
    Route::get('/dashboard', [App\Http\Controllers\gbrain::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('site.logout');

    //compra
   
    Route::resource('/dashboard/compra', compracontroller::class)->except(['show','edit']);
    Route::post('/dashboard/compra/{compra}/toggle', [compracontroller::class, 'toggle'])->name('compra.toggle');
    Route::get('/dashboard/compra/configurar', [compracontroller::class, 'editcompra'])->name('compra.edit');


    });

