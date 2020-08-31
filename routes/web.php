<?php

use App\Http\Controllers\FormResponseController;
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

Route::post('/enviaEmail/create', 'FormResponseController@Store');

Route::get('/contrate', function () {
    return view('contrate');
});

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');

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
    return view('landpageAvancada.landpageavancadawelcome');
})->name('avancada.index');

Route::get('/landpageavancada/contato', function(){
    return view('landpageAvancada.landpageavancadacontato');
});

Route::get('/landpageavancada/sobrenos', function(){
    return view('landpageAvancada.landpageavancadasobrenos');
});

Route::get('/landpageavancada/blog', function(){
    return view('landpageAvancada.landpageavancadablog');
});

Route::get('/landpageavancada/cardapio', function(){
    return view('landpageAvancada.landpageavancadacardapio');
})->name('avancada.cardapio');

Route::get('/landpageintermediaria', function(){
    return view('landpageintermediaria');
});

Route::get('/admin', 'FormResponseController@index');
