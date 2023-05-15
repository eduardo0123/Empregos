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


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
//Route::post('/login', [AuthController::class, 'login']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('cadastro_vagas');

//Route::post('/login', '\App\Http\Controllers\LoginController@login')->name('login');


//Route::get('/', function () {
  //  return view('home');
//});

//Route::get('/', 'App\Http\Controllers\HomeController@indexx')->name('home');









Route::get('/home', [App\Http\Controllers\homeController::class, 'indexx'])->name('home');

Route::get('/vagas', [App\Http\Controllers\RecuperarController::class, 'index'])->name('cadastro_vagas');
Route::get('/cadastros', [App\Http\Controllers\Recuperar2Controller::class, 'index'])->name('cadastro_empresas');
//Route::get('/home', [App\Http\Controllers\homeController::class, 'indexx'])->name('home');
//Route::get('/logins', [App\Http\Controllers\LoginController::class, 'login'])->name('logar_empresa');


//Route::get('/seu_emprego1', [App\Http\Controllers\Recuperar3Controller::class, 'index'])->name('cadastrar_vaga2');


//Route::get('/cadastro1','cadastroController@create');
Route::get('cadastro1/', 'App\Http\Controllers\cadastroController@create');
Route::POST('cadastro1/', 'App\Http\Controllers\cadastroController@store')->name('cadastrar_empresa');
Route::get('vagas1/', 'App\Http\Controllers\vagaController@create');
Route::POST('vagas1/', 'App\Http\Controllers\vagaController@store')->name('cadastrar_vaga');




//Route::get('seu_emprego1/', 'App\Http\Controllers\recuperar3Controller@create');
//Route::POST('seu_emprego1/', 'App\Http\Controllers\recuperar3Controller@store')->name('cadastrar_vaga2');

