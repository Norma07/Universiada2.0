<?php

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
Route::get('/', ['uses' =>'ViewController@index', 'as' =>'index.index']);
Route::get('/Ajedrez', ['uses' => 'ViewController@ajedrez', 'as' =>'ajedrez.index']);
Route::get('/Disciplinas', ['uses' => 'ViewController@disciplinas', 'as' =>'disciplinas.index']);
Route::get('/AdminIndex',['uses' => 'HomeController@index', 'as' => 'administrator.index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
