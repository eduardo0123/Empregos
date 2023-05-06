<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cadastro;
use Illuminate\Http\Request;


class cadastroController extends Controller
{
    public function create(){
        return view ('cadastro1');
    }
    public function store(Request $request){
        cadastro::create([
        'cnpj' => $request->cnpj,
        'nome' => $request->nome,
        'endereco' => $request->endereco,
        'email' => $request->email,
        'senha' => $request->senha,

        ]);
return "cadastrado com sucesso!";
        }
    }