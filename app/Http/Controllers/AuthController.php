<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $senha = $request->input('senha');
    
        // Verificar se o usuário existe no banco de dados
        $user = DB::table('cadastros')->where('email', $email)->first();
        
    
        if ($user == null || !Hash::check($senha, $user->senha)) {
            // Redirecionar de volta para a página de login com uma mensagem de erro
            return redirect('/login')->with('error', 'E-mail ou senha inválidos.');
        }else{
    
        // Armazenar os detalhes do usuário em uma sessão
        $request->session()->put('user', $user);
        
        // Redirecionar para a página de vagas
        return redirect('/vagas');
    }
    
}
    
}
