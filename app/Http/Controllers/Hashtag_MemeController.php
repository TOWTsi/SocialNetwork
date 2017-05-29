<?php

namespace App\Http\Controllers;

use App\Hashtag_Meme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class Hashtag_MemeController extends Controller
{
    //
    public function store(Request $request)
    {
      $hashtag_meme = new Hashtag;

      $hashtag_meme->meme_id = $request->meme_id;

      $hashtag_meme->hash_id = $request->hash_id;

      $hashtag_meme->save();
    }
}
