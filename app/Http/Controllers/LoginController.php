<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'senha');

    if (Auth::attempt($credentials)) {
        // Se as credenciais estiverem corretas, redirecione o usuário para a página inicial
        return redirect()->intended('/vagas');
    }

    // Se as credenciais estiverem incorretas, redirecione o usuário para a página de login com uma mensagem de erro
    return redirect('/login')->withErrors(['email' => 'E-mail ou senha incorretos.']);
})->name('login');

   

