<?php

use App\Meme;

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

Route::get('/newmeme', function () {
    return view('memes/create');
});

//Für Testzwecke:
Route::get('/show_all', function() {
  $memes = Meme::orderBy('id')->get();

  return view('memes/show_all_title', ['memes' => $memes]);
});

//Posten eines Memes:
//Bilder können noch nicht erfolgreich abgespeichert werden
//Grundfuktionalität steht ansonsten
Route::post('/newmeme', 'MemeController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
