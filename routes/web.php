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
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/PC', 'PagesController@index');

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/mpc/{test_id}', function($test_id){
    return '<h1>Tescik nr:</h1>'.$test_id;
});
