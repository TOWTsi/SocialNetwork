<?php

namespace App\Http\Controllers;

use App\Meme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class MemeController extends Controller
{
    /**
    * Create a new Meme
    **/
    public function create() {
    	return view('memes/create');
    }


    /**
    * Store a new Meme
    **/
    public function store(Request $request)
    {
    	$meme = new Meme;

    	$meme->meme_title = $request->meme_title;

      //TODO
      //Sinnvolle Namensgebung für neue Bilder überlegen, die Doppelbenennung verhindert
    	$meme->image_url = 'tmp_test';

      if ($request->description == NULL) {
        $meme->description = '';
      }
      else {
        $meme->description = $request->description;
      }

      $meme->upvotes = 0;
      $meme->downvotes = 0;
      $meme->is_flaged = false;

      //TODO
      //Richtigen Nutzer der gerade eingelogt ist zuweisen
      //Gruppen hinzufügbar machen
      $meme->user_id = 42;
      $meme->group_id = -1; //keine Gruppe zugewiesen

    	//Hier gibt es noch grobe Fehler - sowieso fehlt noch Verknüpfung mit Datenbank
    	//-> Speichert aktuell den Namen des Bildes in einer Datei Names Text aber nicht das Bild
    	Storage::put('memes/test', $request->picture);
      //Ich habe verschiedene Kombinationen des folgenden Codes ausprobiert.
      //Es scheint als würde die Bilddatei nicht vernünftig übertragen werden und als
      //würde sie hier nicht zur Verfügung stehen. Auch Änderungen in create.blade.php
      //haben bisher nicht zum Ziel geführt.
      //Storage::putFile('memes/test', $request->file('picture'));
      //$path = $request->file('picture')->store('memes');

    	$meme->save();

    	//Temporär - Später sollte view von neu erstelltem Meme sichtbar sein.
    	return view('welcome');
    }


}
