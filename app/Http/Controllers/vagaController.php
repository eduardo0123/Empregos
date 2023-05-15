<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\vaga;
use Illuminate\Http\Request;

class vagaController extends Controller
{
    public function create(){
        return view('vagas1');
    }
    public function store(Request $request){
        vaga::create([
            'cargo' => $request->cargo,
            'remuneracao' => $request->remuneracao,
            'exigências' => $request->exigências,
            'responsabilidades' => $request->responsabilidades, 
           
        ]);
        return "vaga cadastrada!";
    }
  
}
