<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    //Unter fillable nur was vom Nutzer selbst eingegeben werden kann
    protected $fillable = [
    	'image_url',
    	'meme_title',
    	'description',
    	//'upvotes',
    	//'downvotes',
    	//'is_flagged',
    	//'user_id',
    	'group_id',
    ];
}
