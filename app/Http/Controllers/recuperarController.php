<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaga;

class RecuperarController extends Controller
{
    public function index()
    {
        $vagas = vaga::all();
        return view('vagas1', ['vagas' => $vagas]);
    }
    
}
