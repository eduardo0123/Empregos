<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



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
        'senha' => Hash::make($request->senha),

        
        ]);
return "cadastrado com sucesso!";
        }
    }