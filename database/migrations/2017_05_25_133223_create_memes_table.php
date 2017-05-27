<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_url');
            $table->string('meme_title');
            $table->text('description');
            $table->integer('upvotes')->unsigned()->default(0);
            $table->integer('downvotes')->unsigned()->default(0);
            $table->boolean('is_flaged')->default(false);

            //Gibt es evtl einen beseren Wert als Integer um auf die user_id zu verweisen?
            $table->integer('user_id');

            //Was wenn Meme mehreren Gruppen zugeteilt werden soll, gibt es
            //Array-Typen oder ähnliches?
            $table->integer('group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memes');
    }
}
