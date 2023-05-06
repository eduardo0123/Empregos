<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cadastro;

class recuperar2Controller extends Controller
{
    public function index()
    {
        $cadastros = cadastro::all();
        return view('cadastro1', ['cadastros' => $cadastros]);
    }
}
