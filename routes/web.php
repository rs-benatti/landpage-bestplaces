<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enviaWhatsApp', 'ContatoController@Enviar');

Route::get('/enviaEmail', 'MailController@EmailForm');

Route::get('/contrate', function () {
    return view('contrate');
});

Route::get('/suporte', function () {
    return view('suporte');
});

Route::get('/contatoWhatsApp', 'ContatoController@Contato');

Route::get('/contatoPlanos', 'ContatoController@Planos');

Route::get('/landpagebasica', function (){
    return view('landbasica');
});

Route::get('/form', function(){
    return view('form');
});

Route::get('/form3', function(){
    return view('form3');
});

Route::get('/landpageavancada', function(){
    return view('landpageavancadawelcome');
});

Route::get('/landpageavancada/contato', function(){
    return view('landpageavancadacontato');
});

Route::get('/landpageavancada/sobrenos', function(){
    return view('landpageavancadasobrenos');
});

Route::get('/landpageavancada/blog', function(){
    return view('landpageavancadablog');
});

Route::get('/landpageavancada/cardapio', function(){
    return view('landpageavancadacardapio');
});
