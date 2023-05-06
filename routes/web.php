<?php

use App\Http\Controllers\cadastroController;
use App\Models\cadastros;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\vaga;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});



Route::get('/vagas', [App\Http\Controllers\RecuperarController::class, 'index'])->name('cadastro_vagas');
Route::get('/cadastros', [App\Http\Controllers\Recuperar2Controller::class, 'index'])->name('cadastro_empresas');


//Route::get('/cadastro1','cadastroController@create');
Route::get('cadastro1/', 'App\Http\Controllers\cadastroController@create');
Route::POST('cadastro1/', 'App\Http\Controllers\cadastroController@store')->name('cadastrar_empresa');
Route::get('vagas1/', 'App\Http\Controllers\vagaController@create');
Route::POST('vagas1/', 'App\Http\Controllers\vagaController@store')->name('cadastrar_vaga');


