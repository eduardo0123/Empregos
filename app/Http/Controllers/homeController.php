<?php

namespace App\Http\Controllers;
use App\Models\vaga; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    
    public function indexx()
    {
        $vagas = vaga::all(); //Recupere todas as vagas do banco de dados

        return view('home', compact('vagas'));

        
}

}