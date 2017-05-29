<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller {
   public function index($tag){
      $tags = DB::select('select "$tag" from meme');
      return view('meme_view',['memes'=>$tags]);
   }
}