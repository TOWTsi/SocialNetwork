<?php

use App\Meme;
use App\Hashtag;
use App\Hashtag_Meme;

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

//Für Testzwecke, ob alle Hashtags gesetzt wurden:
Route::get('/show_all_tags', function() {
  $tags = Hashtag::orderBy('id')->get();
  return view ('search/show_all_tags', ['tags' => $tags]);
});

//Tür testzwecke, ob alle Relationen vorhanden sind:
Route::get('/show_all_tag_relations', function() {
  $rels = Hashtag_Meme::orderBy('id')->get();
  return view ('search/show_all_tag_relations', ['rels' => $rels]);
});

Route::get('/show_meme/{id}', function($id) {
  $meme = Meme::findOrFail($id);
  return view('memes/show_one', ['meme' => $meme]);
});

Route::post('/newmeme', 'MemeController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', function() {
		return view('search/search');
});
