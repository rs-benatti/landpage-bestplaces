<?php

use App\Http\Controllers\FormResponseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/success', function(){
    return view('success');
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

Route::get('/admin', 'AdminController@index')->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


//Rotas de email

Route::resource('email','EmailController');

Route::get('/send','EmailController@toSend')->name('email.toSend');

Route::post('/sendMail','EmailController@sendMail')->name('email.sendMail');

Route::get('/scheduled/{id}','EmailController@getAllMessages')->name('email.scheduled');

Route::get('/sent/{id}','EmailController@sent')->name('email.sent');

Route::get('/finalize/{id}','EmailController@finalize')->name('email.finalize');

Route::get('/updatePassword/','EmailController@updatePassword')->name('password.change');

Route::put('/up/{user}','EmailController@up')->name('password.up');
