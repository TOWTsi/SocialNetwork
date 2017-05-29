<?php

namespace App\Http\Controllers;

use App\Hashtag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class HashtagController extends Controller
{
    //
    public function store(Request $request)
    {
      $hashtag = new Hashtag;

      $hashtag->name = $request->name;

      $hashtag->save();
    }
}
