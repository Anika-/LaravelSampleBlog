<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    //$artigos= BlogPost::with(‘user’)>order_by(‘updated_at’, ‘desc’)->paginate(5)
    //return view('home')->with('artigos',$artigos);
    return view('home');
});

Route::resource('usuario', 'UsuarioController');
Route::resource('publi', 'PublicacaoController');
