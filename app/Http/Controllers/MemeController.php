<?php

namespace App\Http\Controllers;

use App\Meme;
use App\Hashtag;
use App\Hashtag_Meme;
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

      //Temporär Platzhalter Name speichern
      $meme->image_url = 'tmp';
      $meme->save();

      // Hier werden die Hashtags gesetzt und in Relation gebracht
      if ($request->hashlist != NULL) {
          $tok = strtok($request->hashlist, ' ');
          while ($tok !== false) {
            $tmp = Hashtag::where('name', $tok)->first();
            if ($tmp == NULL) { // Wenn ein Hashtag nicht existiert, dann wird es hinzugefügt
              echo 'Hallo';
              $hash = new Hashtag;
              $hash->name = $tok;
              $hash->save();
            } // Hier wird die Relation aufgebaut
            $tmp = Hashtag::where('name', $tok)->first()->id;
            $hash_meme = new Hashtag_Meme;
            $hash_meme->meme_id = $meme->id;
            $hash_meme->hash_id = $tmp;
            $hash_meme->save();
            $tok = strtok(' ');
          }
      }


      //Storage::putFile('memes/test', $request->file('picture'));
      //$path = $request->file('picture')->store('memes');
      //$file = $request->file('picture');
      //var_dump($file);
      //die();
      if ($request->hasFile('picture')) {
        $file = $request->file('picture');

        $filename = $meme->id . '.' . $file->getClientOriginalExtension();

        //$filename = 'test.' . $file->getClientOriginalExtension();
        $file = $file->move(public_path('/images/memes/'), $filename);

        $path = '/images/memes/' . $filename;
        //$user->update(['profile_pic' => $path]);
        $meme->update(['image_url' => $path]);

      }

    	//Temporär - Später sollte view von neu erstelltem Meme sichtbar sein.
    	//return view('welcome');
      //$meme = Meme::findOrFail($id);
      return view('memes/show_one', ['meme' => $meme]);
    }


}
